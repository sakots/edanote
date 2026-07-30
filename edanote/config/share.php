<?php
declare(strict_types=1);

// SNS共有設定

return [
  'displayShareButtons' => 1, // SNSシェアボタンを表示するかどうか 1:する 0:しない
  'switchSNS' => 1, // 詳細機能を有効にするかどうか 1:する 0:しない
  'snsServers' => [ // 表示するサーバーのリスト
    'X' => 'https://x.com',
    'Bluesky' => 'https://bsky.app',
    'Threads' => 'https://www.threads.net',
    'pawoo.net' => 'https://pawoo.net',
    'fedibird.com' => 'https://fedibird.com',
    'misskey.io' => 'https://misskey.io',
    'xissmie.xfolio.jp' => 'https://xissmie.xfolio.jp',
    'misskey.design' => 'https://misskey.design',
    'nijimiss.moe' => 'https://nijimiss.moe',
    'sushi.ski' => 'https://sushi.ski',
  ],
  'useMisskeyNote' => 1, // Misskeyにノートするを使うかどうか 1:使う 0:使わない
  'misskeyServers' => [ // Misskeyにノートするで使うサーバーのリスト
    'misskey.io' => 'https://misskey.io',
    'xissmie.xfolio.jp' => 'https://xissmie.xfolio.jp',
    'misskey.design' => 'https://misskey.design',
    'nijimiss.moe' => 'https://nijimiss.moe',
    'sushi.ski' => 'https://sushi.ski',
    'misskey.gamelore.fun' => 'https://misskey.gamelore.fun',
    'misskey.delmulin.com' => 'https://misskey.delmulin.com',
    'side.misskey.productions' => 'https://side.misskey.productions',
    'mk.shrimpia.network' => 'https://mk.shrimpia.network',
  ],
];
