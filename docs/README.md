# edanote 設置方法

配布ファイルの `edanote` ディレクトリを、FTPなどでサーバーへアップロードします。
サーバー上でComposerやビルドコマンドを実行する必要はありません。

## 1. 設定

`config/local.example.php` を `config/local.php` にコピーし、掲示板名などを編集します。
変更しなくても既定値で起動できます。

```php
<?php
return [
    'app' => [
        'name' => 'わたしのお絵かき掲示板',
    ],
];
```

設定項目は `config/app.php`、`database.php`、`upload.php`、`security.php` に分かれています。
更新時に上書きされない設置固有値は `local.php` に書いてください。

## 2. 書き込み権限

PHPから次のディレクトリへ書き込めるようにします。

- `uploads/`
- `var/cache/`
- `var/data/`

一般的なレンタルサーバーではアップロードするだけで動作します。権限変更が必要な場合も、
まず `0755` を使用し、安易に `0777` にはしないでください。

## 3. ブラウザで開く

アップロード先の `index.php` をブラウザで開きます。SQLiteデータベースは初回アクセス時に
`var/data/edanote.sqlite3` として自動作成されます。

## 必要環境

- PHP 8.2以上
- fileinfo、mbstring、PDO SQLite拡張
- Apacheまたは `.htaccess` 相当のアクセス制御を設定できるWebサーバー

nginxでは `.htaccess` が効きません。`config/`、`src/`、`templates/`、`var/`、
`vendor/` を外部公開しないようサーバー側で設定してください。

## 更新時に上書きしないもの

- `config/local.php`
- `uploads/`
- `var/data/`

更新前には、この3箇所を必ずバックアップしてください。
