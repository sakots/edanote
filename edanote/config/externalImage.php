<?php
declare(strict_types=1);

// 外部画像の設定

return [
  'useExternalImageThumb' => 1, // 外部画像のサムネイルを使用するかどうか 0:しない 1:する
  'externalImageThumbWidth' => 200, // 外部画像のサムネイルの幅（ピクセル 高さは自動です）
  'externalImageThumbDays' => 30, // 外部画像のサムネイルのキャッシュ期間（日数）
];