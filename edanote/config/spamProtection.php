<?php
declare(strict_types=1);

// スパム対策設定

return [
  'forbiddenStrings' => [ // 禁止文字列
    'irc.s16.xrea.com',
    '著作権の侵害',
    '未承諾広告',
  ],
  'forbiddenNames' => [ // 名前として使えない文字列
    'ブランド',
    '通販',
    '口コミ',
    '販売',
  ],
  'forbiddenIPs' => [ // 禁止IPアドレス
    '192.168.1.1',
    '10.0.0.1'
  ],
];