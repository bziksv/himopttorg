#!/bin/sh
set -e
cd "$(dirname "$0")/.."
PROJECT="$(pwd)"
SITE_ROOT="$PROJECT/himopttorg.ru"
PHP83=/opt/homebrew/opt/php@8.3
NGINX=/opt/homebrew/bin/nginx
RUN_DIR="$PROJECT/.local/run"

mkdir -p "$RUN_DIR"

# shellcheck disable=SC1091
. "$PROJECT/.local/db.env"

TABLES=$(php -r "
mysqli_report(MYSQLI_REPORT_OFF);
\$m = @new mysqli('$DB_HOST', '$DB_LOGIN', '$DB_PASSWORD', '$DB_NAME');
if (\$m->connect_error) { echo 0; exit; }
\$r = \$m->query(\"SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='$DB_NAME'\");
echo \$r ? \$r->fetch_row()[0] : 0;
" 2>/dev/null || echo 0)

if [ "${TABLES:-0}" -lt 50 ]; then
  echo "WARN: local DB $DB_NAME has $TABLES tables. Import: ./scripts/setup-local-db.sh"
else
  echo "Local MySQL: $DB_NAME ($TABLES tables)"
fi

"$PROJECT/scripts/stop-dev.sh" 2>/dev/null || true
sleep 1

USER_NAME="$(whoami)"
USER_GROUP="$(id -gn)"

sed "s|SITE_ROOT|$SITE_ROOT|g; s|RUN_DIR|$RUN_DIR|g" \
  "$PROJECT/.local/nginx/nginx.conf" > "$RUN_DIR/nginx.conf"
sed "s|RUN_DIR|$RUN_DIR|g" \
  "$PROJECT/.local/php/fpm.conf" > "$RUN_DIR/fpm.conf"
sed "s|USER_NAME|$USER_NAME|g; s|USER_GROUP|$USER_GROUP|g" \
  "$PROJECT/.local/php/pools.conf" > "$RUN_DIR/pools.conf"
cp "$PROJECT/.local/php/php.ini" "$RUN_DIR/php.ini"

export PHPRC="$RUN_DIR/php.ini"

start_php_server() {
  echo "php -S 127.0.0.1:${HTTP_PORT} (built-in)"
  nohup "$PHP83/bin/php" -S "127.0.0.1:${HTTP_PORT}" \
    -t "$SITE_ROOT" "$PROJECT/.local/router.php" \
    > "$RUN_DIR/php-server.log" 2>&1 &
  echo $! > "$RUN_DIR/php-server.pid"
}

if "$PHP83/sbin/php-fpm" -y "$RUN_DIR/fpm.conf" \
  && "$NGINX" -c "$RUN_DIR/nginx.conf" -g "error_log $RUN_DIR/nginx-error.log;"; then
  echo "nginx + php-fpm on ${HTTP_PORT}/${FPM_PORT}"
else
  echo "nginx/php-fpm недоступны — fallback"
  [ -f "$RUN_DIR/php-fpm.pid" ] && kill "$(cat "$RUN_DIR/php-fpm.pid")" 2>/dev/null || true
  start_php_server
fi

sleep 1

HTTP=$(curl -sS -o /tmp/himopttorg-local.html -w '%{http_code}' --max-time 60 "http://127.0.0.1:${HTTP_PORT}/" || echo 000)

echo "local  http://127.0.0.1:${HTTP_PORT}/  → HTTP $HTTP"
echo "stop:  ./scripts/stop-dev.sh"

if [ "$HTTP" = "000" ]; then
  echo "WARN: сайт не ответил — см. $RUN_DIR/"
  exit 1
fi
