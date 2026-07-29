<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$target = $root . '/edanote';

function removeTree(string $path): void
{
    if (!is_dir($path)) {
        return;
    }
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($iterator as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }
    rmdir($path);
}

function copyTree(string $source, string $target): void
{
    if (!is_dir($target) && !mkdir($target, 0755, true) && !is_dir($target)) {
        throw new RuntimeException("ディレクトリを作成できません: {$target}");
    }
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($source, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($iterator as $item) {
        $relative = substr($item->getPathname(), strlen($source) + 1);
        $destination = $target . '/' . $relative;
        if ($item->isDir()) {
            if (!is_dir($destination)) {
                mkdir($destination, 0755, true);
            }
        } else {
            copy($item->getPathname(), $destination);
        }
    }
}

removeTree($target);
mkdir($target, 0755, true);

foreach (['config', 'src', 'templates', 'vendor'] as $directory) {
    copyTree($root . '/' . $directory, $target . '/' . $directory);
}
foreach (['assets', 'uploads'] as $directory) {
    copyTree($root . '/public/' . $directory, $target . '/' . $directory);
}
foreach (['cache', 'data'] as $directory) {
    mkdir($target . '/var/' . $directory, 0755, true);
    touch($target . '/var/' . $directory . '/.gitkeep');
}

foreach ([
    $root . '/public/index.php' => $target . '/index.php',
    $root . '/public/router.php' => $target . '/router.php',
    $root . '/composer.json' => $target . '/composer.json',
    $root . '/composer.lock' => $target . '/composer.lock',
    $root . '/INSTALL.md' => $target . '/README.md',
    $root . '/distribution.htaccess' => $target . '/.htaccess',
] as $source => $destination) {
    copy($source, $destination);
}

foreach (['config', 'src', 'templates', 'var', 'vendor'] as $directory) {
    copy($root . '/protected.htaccess', $target . '/' . $directory . '/.htaccess');
}

// 開発環境の設定や生成済みデータを配布物へ混入させません。
@unlink($target . '/config/local.php');
foreach (glob($target . '/uploads/*') ?: [] as $file) {
    if (basename($file) !== '.gitkeep' && is_file($file)) {
        unlink($file);
    }
}

echo "配布ディレクトリを作成しました: {$target}\n";
