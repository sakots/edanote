<?php
declare(strict_types=1);

/// SQLite3 データベースファイル関連

return [
  'databaseName' => 'edanote.db', //ファイル名
  'dbBusyTimeout' => 5000, // データベースがロックされている場合の待機時間（ミリ秒 0~60000）
];
