<?php
declare(strict_types=1);

return [
  'directory' => dirname(__DIR__) . '/public/uploads', //設置URL
  // サブディレクトリ設置でも動くよう、掲示板URLからの相対パスにします。
  'public_path' => 'uploads', // ディレクトリ名
  'max_bytes' => 5 * 1024 * 1024, // アップロードできる最大サイズ（デフォルト5MB）
  'max_width' => 4096, // 画像の最大幅
  'max_height' => 4096, // 画像の最大高さ
  'mime_types' => [ // 許可するMIMEタイプと拡張子の対応表
    'image/png' => 'png',
    'image/jpeg' => 'jpg',
    'image/gif' => 'gif',
    'image/webp' => 'webp',
    'image/avif' => 'avif',
  ],
];
