<?php
declare(strict_types=1);

// 個人識別設定

return [
  'useUserID' => 1, // 個人識別IDを使用するかどうか 0:しない 1:する
  'userIDSeed' => 'IDの種', //ID生成の種
  'userIDCycle' => 7, // IDの変更周期（日数 0:変更しない）
];