<?php
declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Edanote\Config\Config;
use Edanote\Database\Database;
use Edanote\Repository\PostRepository;

function expect(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

$config = new Config(dirname(__DIR__) . '/config');
expect($config->get('app.name') === 'edanote', '設定を読み込めませんでした。');

$path = sys_get_temp_dir() . '/edanote-test-' . bin2hex(random_bytes(4)) . '.sqlite3';
$repository = new PostRepository(Database::connect($path));
$thread = $repository->create(null, 'テスト', '題名', '本文', null);
$repository->create($thread, '返信者', '', '返信', null);
$rows = $repository->threads(10, 0, 5);
expect(count($rows) === 1, 'スレッドを取得できませんでした。');
expect(count($rows[0]['replies']) === 1, '返信を取得できませんでした。');
expect($repository->countThreads() === 1, 'スレッド数が正しくありません。');
unlink($path);
@unlink($path . '-wal');
@unlink($path . '-shm');
echo "OK\n";
