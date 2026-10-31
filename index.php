<?php
// Xoa triet de tat ca cac header chan iFrame o cap do PHP
@header_remove('X-Frame-Options');
@header_remove('x-frame-options');
header_remove('X-Frame-Options');

// Cho phep nhung iFrame tu moi nguon (ShortenWorld, Facebook, v.v.)
header('Content-Security-Policy: frame-ancestors *');
header('Access-Control-Allow-Origin: *');

// Doc va tra ve noi dung file SPA index.html
if (file_exists(__DIR__ . '/index.html')) {
    readfile(__DIR__ . '/index.html');
} else {
    echo "Application file index.html not found.";
}
exit;
