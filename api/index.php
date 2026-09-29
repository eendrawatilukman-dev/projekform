<?php

// 1. Menyiapkan direktori temporer di /tmp Vercel
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

// 2. Set lokasi cache ke folder /tmp
putenv('VIEW_COMPILED_PATH=/tmp/views');
putenv('LOG_CHANNEL=stderr');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');

// 3. Panggil aplikasi Laravel
require __DIR__ . '/../public/index.php';
