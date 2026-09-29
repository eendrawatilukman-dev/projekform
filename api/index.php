<?php

// Menyiapkan folder sementara berizin akses di server Vercel
$dirs = [
    '/tmp/views',
    '/tmp/framework/sessions',
    '/tmp/framework/views',
    '/tmp/framework/cache',
];

foreach ($dirs as $dir) {
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Set lokasi kompilasi Blade view ke /tmp/views
putenv('VIEW_COMPILED_PATH=/tmp/views');

// Jalankan aplikasi Laravel
require __DIR__ . '/../public/index.php';
