<?php
declare(strict_types=1);

// 掲示板スレッド設定

return [
  'maxThreads' => 1000, // 最大スレッド数
  'threadsPerPage' => 10, // 1ページあたりのスレッド数
  'repliesPerThread' => 1000, // 1スレッドあたりの返信数の限界

  'maxNameLength' => 50, // 名前の最大文字数
  'maxSubjectLength' => 100, // 題名の最大文字数
  'maxCommentLength' => 4000, // 本文の最大文字数
];
