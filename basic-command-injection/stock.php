<?php

$productId = $_POST['productId'] ?? '';
$storeId = $_POST['storeId'] ?? '';

$stockcheckPath = __DIR__ . '/stockcheck';

$command = "$stockcheckPath $productId $storeId";

echo shell_exec($command);