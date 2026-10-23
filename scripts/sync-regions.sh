#!/bin/sh
# Copy shared Bitrix customizations to regional sites.
# One git repo (Voronezh). No per-city branches.
#
#   ./scripts/sync-regions.sh                 dry-run: Voronezh → regions
#   ./scripts/sync-regions.sh --apply         copy on the server
#   ./scripts/sync-regions.sh --from-local --apply
#   ./scripts/sync-regions.sh --site l --apply
#
# Never copies: dbconn, .settings, license, header.php, footer.php, upload/.

set -e
cd "$(dirname "$0")/.."
PROJECT="$(pwd)"

SSH_HOST="${HIMOPT_SSH_HOST:-himopttorg@himopttorg.beget.tech}"
SSH_KEY="${HIMOPT_SSH_KEY:-$HOME/.ssh/id_ed25519}"
REMOTE_HOME="/home/h/himopttorg"

APPLY=0
FROM_LOCAL=0
CLEAR_CACHE=0
ONLY_SITE=""

while [ $# -gt 0 ]; do
  case "$1" in
    --apply) APPLY=1 ;;
    --from-local) FROM_LOCAL=1 ;;
    --clear-cache) CLEAR_CACHE=1 ;;
    --site) ONLY_SITE="$2"; shift ;;
    -h|--help)
      sed -n '2,12p' "$0"
      exit 0
      ;;
    *) echo "Unknown option: $1" >&2; exit 1 ;;
  esac
  shift
done

# Shared logic only. City phones / Metrika stay in header.php and footer.php.
SHARED_PATHS="
legal
bitrix/php_interface/init.php
bitrix/php_interface/include
bitrix/templates/himopttorg/template_styles.css
bitrix/templates/himopttorg/components/bitrix/catalog.product.subscribe/.default
bitrix/templates/himopttorg/components/bitrix/catalog/.default/bitrix/catalog.section/.default
bitrix/templates/himopttorg/components/bitrix/catalog/.default/bitrix/catalog.section/table
bitrix/templates/himopttorg/components/bitrix/catalog/.default/bitrix/catalog.element/.default
bitrix/templates/himopttorg/components/bitrix/catalog/.default/section.php
bitrix/templates/himopttorg/components/bitrix/system.auth.authorize/.default
bitrix/templates/himopttorg/components/bitrix/system.auth.forgotpasswd/.default
bitrix/templates/himopttorg/components/bitrix/system.auth.confirmation/.default
bitrix/templates/himopttorg/components/bitrix/system.auth.form/store
"

SITES="l.himopttorg.ru kursk.himopttorg.ru belgorod.himopttorg.ru tambov.himopttorg.ru"
case "$ONLY_SITE" in
  "") ;;
  l|lipetsk) SITES="l.himopttorg.ru" ;;
  kursk) SITES="kursk.himopttorg.ru" ;;
  belgorod) SITES="belgorod.himopttorg.ru" ;;
  tambov) SITES="tambov.himopttorg.ru" ;;
  *) echo "Unknown --site $ONLY_SITE (l|kursk|belgorod|tambov)" >&2; exit 1 ;;
esac

ssh_cmd() {
  ssh -o BatchMode=yes -o IdentitiesOnly=yes -i "$SSH_KEY" "$SSH_HOST" "$@"
}

RSYNC_FLAGS="-a --omit-dir-times"
if [ "$APPLY" -eq 0 ]; then
  RSYNC_FLAGS="$RSYNC_FLAGS -n --itemize-changes"
  echo "DRY-RUN (pass --apply to copy)"
else
  echo "APPLY"
fi

if [ "$FROM_LOCAL" -eq 1 ]; then
  echo "Source: local $PROJECT"
  for site in $SITES; do
    dest="$SSH_HOST:$REMOTE_HOME/$site/public_html"
    echo "===== $site ====="
    for rel in $SHARED_PATHS; do
      [ -e "$PROJECT/$rel" ] || { echo "skip missing $rel"; continue; }
      echo "-- $rel"
      # shellcheck disable=SC2086
      rsync $RSYNC_FLAGS -e "ssh -o BatchMode=yes -o IdentitiesOnly=yes -i $SSH_KEY" \
        "$PROJECT/$rel" "$dest/$(dirname "$rel")/"
    done
    if [ "$APPLY" -eq 1 ] && [ "$CLEAR_CACHE" -eq 1 ]; then
      ssh_cmd "rm -rf $REMOTE_HOME/$site/public_html/bitrix/cache/* $REMOTE_HOME/$site/public_html/bitrix/managed_cache/*"
      echo "cache cleared"
    fi
  done
  exit 0
fi

echo "Source: $REMOTE_HOME/himopttorg.beget.tech/public_html"
# Expand paths on the server so one SSH session does all copies.
# shellcheck disable=SC2086
ssh_cmd "APPLY=$APPLY CLEAR_CACHE=$CLEAR_CACHE; SRC=$REMOTE_HOME/himopttorg.beget.tech/public_html; SITES='$SITES'; SHARED_PATHS='$SHARED_PATHS';
set -e
if [ \"\$APPLY\" -eq 0 ]; then echo DRY-RUN; RSYNC='rsync -a -n --itemize-changes --omit-dir-times'; else RSYNC='rsync -a --omit-dir-times'; fi
for site in \$SITES; do
  DEST=$REMOTE_HOME/\$site/public_html
  echo \"===== \$site =====\"
  for rel in \$SHARED_PATHS; do
    if [ ! -e \"\$SRC/\$rel\" ]; then echo \"skip missing \$rel\"; continue; fi
    echo \"-- \$rel\"
    mkdir -p \"\$DEST/\$(dirname \"\$rel\")\"
    \$RSYNC \"\$SRC/\$rel\" \"\$DEST/\$(dirname \"\$rel\")/\"
  done
  if [ \"\$APPLY\" -eq 1 ] && [ \"\$CLEAR_CACHE\" -eq 1 ]; then
    rm -rf \"\$DEST/bitrix/cache/\"* \"\$DEST/bitrix/managed_cache/\"*
    echo cache cleared
  fi
done
"
