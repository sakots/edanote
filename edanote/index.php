<?php
declare(strict_types=1);

//--------------------------------------------------
//  おえかきけいじばん「edanote」
//  by sakots & OekakiBBS reDev.Team  https://oekakibbs.moe/
//--------------------------------------------------

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$root = is_dir(__DIR__ . '/vendor') ? __DIR__ : dirname(__DIR__);
require $root . '/vendor/autoload.php';

date_default_timezone_set((string) $config->get('app.timezone', 'Asia/Tokyo'));
session_name((string) $config->get('security.session_name', 'edanote_session'));
session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax', 'secure' => !empty($_SERVER['HTTPS'])]);
session_start();

//twigの設定
$twig = new Environment(new FilesystemLoader($root . '/templates'), [
  'cache' => $root . '/var/cache',
  'auto_reload' => true,
  'strict_variables' => true,
]);

//エラー処理
$errors = [];
