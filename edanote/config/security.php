<?php
declare(strict_types=1);

// セキュリティ設定とスパム対策（管理者は設定に関わらず投稿可能）

return [
  'session_name' => 'edanote_session', // セッション名

  'hasNoJapanese' => 0, // 日本語を含まない投稿を禁止 1:する 0:しない

  // 禁止○○系は正規表現が使えます。

  'forbiddenStrings' => [ // コメント欄で禁止する文字列と禁止レベル
  // 禁止レベルは数値で指定（点数が一定以上になると投稿できません）
  // ひとつで投稿不可の文字列は初期値だと10
    'ad.example.ltd' => 10, // 禁止文字列 => 禁止レベル
    'http://ad.example.ltd' => 10,
    'https://ad.example.ltd' => 10,
    '著作権の侵害' => 10,
    '未承諾広告' => 10,
    '激安' => 6,
    '通販' => 6,
    'ブランド' => 6,
    '販売' => 6,
    '品質を?重視' => 6,
    '大量入荷' => 6,
    'シュプリーム' => 6,
    'シャネル' => 6,
    'バレンシアガ' => 6,
    'ルイヴィトン' => 6,
    'アダルト' => 1,
    'https?://' => 1, // http とhttpsの大量投稿を禁止
    '//' => 1, // //から始まるURLの大量投稿も禁止
  ],
  'forbiddenThresholdCount' => 10, // 禁止レベルの合計がこの値以上だと投稿不可

  'forbiddenNames' => [ // 名前として使えない文字列
    'ブランド',
    '通販',
    '口コミ',
    '販売',
    '管理人',
  ],
  'forbiddenUrls' => [ // URLとして使えない文字列
    'url.example.ltd',
    'example.com',
  ],

  'forbiddenIPs' => [ // 禁止IPアドレス
    '10.0.0.1',
  ],
  'forbiddenHosts' => [ // 禁止ホスト
    'forbidden.example.ltd',
    'ad.example.ltd',
  ],
  'requireReverseDns' => 0, // 逆引きDNSがないIPアドレスからの投稿を禁止 1:する 0:しない
];
