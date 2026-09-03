#!/bin/sh
set -e
cd "$(dirname "$0")/.."
PROJECT="$(pwd)"
# shellcheck disable=SC1091
. "$PROJECT/.local/db.env"

MYSQL80="/opt/homebrew/opt/mysql@8.0/bin/mysql --protocol=SOCKET -S /tmp/mysql.sock"
LOG_DIR="$PROJECT/.local/run"
LOG_FILE="$LOG_DIR/mysql-import.log"
PID_FILE="$LOG_DIR/mysql-import.pid"
SQL_PATH="$PROJECT/$SQL_DUMP"

mkdir -p "$LOG_DIR"

if [ ! -f "$SQL_PATH" ]; then
  echo "Dump not found: $SQL_PATH"
  exit 1
fi

echo "Creating database $DB_NAME and user $DB_LOGIN..."
php -r "
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
\$m = new mysqli('localhost', 'root', '');
\$m->query('CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8 COLLATE utf8_unicode_ci');
try { \$m->query(\"CREATE USER '$DB_LOGIN'@'localhost' IDENTIFIED BY '$DB_PASSWORD'\"); } catch (Throwable \$e) {}
\$m->query(\"GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_LOGIN'@'localhost'\");
\$m->query('FLUSH PRIVILEGES');
echo \"OK\\n\";
"

TABLES=$(php -r "
mysqli_report(MYSQLI_REPORT_OFF);
\$m = @new mysqli('localhost', 'root', '', '$DB_NAME');
\$r = \$m->query(\"SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='$DB_NAME'\");
echo \$r ? \$r->fetch_row()[0] : 0;
")

if [ "${TABLES:-0}" -ge 50 ]; then
  echo "Database already has $TABLES tables — skip import."
else
  DUMP_SIZE=$(du -h "$SQL_PATH" | awk '{print $1}')
  echo "Importing $SQL_DUMP ($DUMP_SIZE) into $DB_NAME..."
  echo "Log: $LOG_FILE"
  nohup sh -c "
    /opt/homebrew/opt/mysql@8.0/bin/mysql --protocol=SOCKET -S /tmp/mysql.sock -uroot --force '$DB_NAME' < '$SQL_PATH' \
      && echo IMPORT_OK >> '$LOG_FILE' \
      || echo IMPORT_FAIL >> '$LOG_FILE'
  " >> "$LOG_FILE" 2>&1 &
  echo $! > "$PID_FILE"
  echo "Import started in background (pid $(cat "$PID_FILE"))."
  echo "Progress: tail -f $LOG_FILE"
fi

"$PROJECT/scripts/apply-local-db-config.sh"
echo "When import finishes: ./scripts/start-dev.sh"
