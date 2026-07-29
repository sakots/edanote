# edanote

PHP・Twig・SQLiteで動く新しめのお絵かき掲示板です。

## 必要環境

- PHP 8.2以上
- PDO SQLite / fileinfo / mbstring
- Composer（開発時に必要）

## 配布版

リリース用の完成品は `edanote/` ディレクトリです。
Composerを使えないレンタルサーバーにも、ディレクトリの中身をそのままFTPで設置できます。

詳しい設置・更新方法は [doc/INSTALL.md](doc/INSTALL.md)を参照してください。

## 設定

設定は `config/` ディレクトリで管理します。

- `app.php`: 掲示板名、タイムゾーン、表示件数
- `database.php`: SQLiteの保存先
- `upload.php`: 画像形式、容量、寸法
- `security.php`: セッション、投稿制限
- `local.php`: 設置環境固有の上書き（Git管理外）

各ファイルは連想配列を返します。`local.php` の同じキーで既定値を上書きできます。

## 構成

## 確認

```sh
composer test
```

## 更新履歴

すべての更新履歴は[こちら](CHANGELOG.md)を参照してください。

### [2029/07/29]

- リポジトリ生やした
