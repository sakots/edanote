<?php
declare(strict_types=1);

// 本番環境固有の値だけを書きます。このファイルを config.local.php にコピーしてください。

return [

  /* 設定しなければ動かない項目 */
  'admin' => [
    'adminPassword' => 'password', // 管理者パスワードは初期設定のままでは動きません
  ],

  /* 最初に設定する項目 */
  'board' => [
    'boardName' => 'わたしのお絵かき掲示板', // 掲示板タイトル
  ],

  /* 名前として使えない文字列に管理者の名前を入れることを強く推奨します */
  'forbiddenNames' => [ // 名前として使えない文字列
    '管理人',
    'admin',
  ],
];
