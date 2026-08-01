<?php
declare(strict_types=1);

// 掲示板基本設定

return [
  'boardName' => 'edanote', // 掲示板タイトル
  'descriptions' => [ // 掲示板の説明文（htmlタグが使えます）
    'edanoteは新しめのお絵かき掲示板です',
    'iPadやスマートフォンでも使えます',
  ],

  'boardUrl' => 'https://example.ltd/edanote', // 掲示板の設置URL シェアボタン等で必須
  'home' => '../', //「ホーム」へのリンク
  'timezone' => 'Asia/Tokyo', // タイムゾーン

  'templateDirectory' => 'edaDefault',// テンプレートディレクトリ名
  'useDarkMode' => 1, // ダークモードを使用 1:する 0:しない
  'isDarkModeByDefault' => 0, // ダークモードをデフォルトに 1:する 0:しない

  'maxThreads' => 1000, // 最大スレッド数
  'threadsPerPage' => 10, // 1ページあたりのスレッド数
  'repliesPerThread' => 1000, // 1スレッドあたりの返信数の限界

  'maxNameLength' => 50, // 名前の最大文字数
  'maxSubjectLength' => 100, // 題名の最大文字数
  'maxCommentLength' => 4000, // 本文の最大文字数
  'default_name' => '名無しさん', // 名前が空欄の場合のデフォルト名

  'displayHomeLink' => 1, // ホームへ戻るリンクを上段のメニューに表示 1:する 0:しない
];
