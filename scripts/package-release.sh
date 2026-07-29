#!/usr/bin/env sh
set -eu

project_dir=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)

php "$project_dir/scripts/build-release.php"

if ! command -v zip >/dev/null 2>&1; then
  echo "zipコマンドが見つかりません。配布ディレクトリは作成済みです。" >&2
  exit 1
fi

cd "$project_dir"
rm -f edanote.zip
zip -qr edanote.zip edanote
echo "配布ZIPを作成しました: $project_dir/edanote.zip"
