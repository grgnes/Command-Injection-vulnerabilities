<?php

$host = $_POST['host'] ?? '';

$command = "ping -c 1 " . $host;

shell_exec($command);

echo "{}";