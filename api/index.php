<?php

// Siapkan folder sementara berizin akses di server Vercel
$dirs = [
    '/tmp/views',
    '/tmp/framework/sessions',
    '/tmp/framework/views',
    '/tmp/framework/cache',
    '/tmp/logs',
];

foreach ($dirs as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Pengaturan Environment Vercel Serverless
putenv('VIEW_COMPILED_PATH=/tmp/views');
putenv('LOG_CHANNEL=stderr');

// Jalankan aplikasi Laravel
require __DIR__ . '/../public/index.php';
