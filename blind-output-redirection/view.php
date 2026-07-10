<?php

$filename = $_GET['filename'] ?? '';

$filename = basename($filename);

$path = __DIR__ . "/images/" . $filename;

if (!is_file($path)) {
    http_response_code(404);
    echo "Dosya bulunamadı.";
    exit;
}

header("Content-Type: text/plain; charset=UTF-8");

readfile($path);