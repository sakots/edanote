# edanote

PHP・Twig・SQLiteで動く新しめのお絵かき掲示板です。

## 必要環境

- PHP 8.2以上
- PDO SQLite / fileinfo / mbstring
- Composer（開発時に必要）

## 配布版

リリース用の完成品は `edanote/` ディレクトリです。Composerを使えないレンタル
サーバーにも、ディレクトリの中身をそのままFTPで設置できます。

配布ディレクトリを作り直す場合：

```sh
composer install --no-dev --prefer-dist
scripts/package-release.sh
```

`edanote/` と、FTPアップロード用の `edanote.zip` が生成されます。ZIPが不要なら
`php scripts/build-release.php` のみを実行してください。

詳しい設置・更新方法は `INSTALL.md` を参照してください。

## 開発環境のセットアップ

```sh
composer install
cp config/local.example.php config/local.php
php -S localhost:8000 -t public public/router.php
```

`http://localhost:8000` を開いてください。SQLiteデータベースと必要な実行時
ディレクトリは初回アクセス時に自動作成されます。

設定は `config/` ディレクトリで管理します。

- `app.php`: 掲示板名、タイムゾーン、表示件数
- `database.php`: SQLiteの保存先
- `upload.php`: 画像形式、容量、寸法
- `security.php`: セッション、投稿制限
- `local.php`: 設置環境固有の上書き（Git管理外）

各ファイルは連想配列を返します。`local.php` の同じキーで既定値を上書きできます。

## 構成

HTTPの入口は `public/index.php`、Twigテンプレートは `templates/`、アプリケーション
コードは `src/`、DBやキャッシュなどの可変データは `var/` に置きます。アップロード
画像のみWeb配信のため `public/uploads/` に保存します。

## 確認

```sh
composer test
```
