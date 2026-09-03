#!/bin/sh
set -e
cd "$(dirname "$0")/.."
PROJECT="$(pwd)"
# shellcheck disable=SC1091
. "$PROJECT/.local/db.env"

SITE_ROOT="$PROJECT"
DBCONN="$SITE_ROOT/bitrix/php_interface/dbconn.php"
SETTINGS="$SITE_ROOT/bitrix/.settings.php"
LOCAL="$SITE_ROOT/bitrix/php_interface/dbconn.local.php"
BACKUP_DIR="$PROJECT/.local/backup"
mkdir -p "$BACKUP_DIR"

if [ -f "$DBCONN" ] && [ ! -f "$BACKUP_DIR/dbconn.remote.php" ]; then
  cp "$DBCONN" "$BACKUP_DIR/dbconn.remote.php"
fi
if [ -f "$SETTINGS" ] && [ ! -f "$BACKUP_DIR/.settings.remote.php" ]; then
  cp "$SETTINGS" "$BACKUP_DIR/.settings.remote.php"
fi

if [ -f "$DBCONN" ] && ! grep -q "dbconn.local.php" "$DBCONN" 2>/dev/null; then
  TMP="$DBCONN.new"
  {
    printf '%s\n' '<?'
    printf '%s\n' 'if (file_exists(__DIR__ . '"'"'/dbconn.local.php'"'"'))'
    printf '%s\n' '{'
    printf '%s\n' '    require __DIR__ . '"'"'/dbconn.local.php'"'"';'
    printf '%s\n' '    return;'
    printf '%s\n' '}'
    printf '\n'
    tail -n +2 "$DBCONN"
  } > "$TMP"
  mv "$TMP" "$DBCONN"
fi

cat > "$LOCAL" <<EOF
<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
\$DBType = "mysql";
\$DBHost = "$DB_HOST";
\$DBLogin = "$DB_LOGIN";
\$DBPassword = "$DB_PASSWORD";
\$DBName = "$DB_NAME";
\$DBDebug = true;
\$DBDebugToFile = false;

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~BX_DIR_PERMISSIONS);
define("BX_DISABLE_INDEX_PAGE", true);
?>
EOF

if [ -f "$SETTINGS" ]; then
  php -r "
\$file = '$SETTINGS';
\$data = include \$file;
\$data['connections']['value']['default']['host'] = '$DB_HOST';
\$data['connections']['value']['default']['database'] = '$DB_NAME';
\$data['connections']['value']['default']['login'] = '$DB_LOGIN';
\$data['connections']['value']['default']['password'] = '$DB_PASSWORD';
\$export = var_export(\$data, true);
file_put_contents(\$file, \"<?php\\n\\nreturn \" . \$export . \";\\n\");
"
fi

echo "local DB config → $SITE_ROOT ($DB_LOGIN@$DB_HOST / $DB_NAME)"
