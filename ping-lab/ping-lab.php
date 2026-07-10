<?php

$ip = $_POST['ip'];

$command = "ping -c 4 " . $ip;

echo "<h3>Çalıştırılan Komut</h3>";
echo "<pre>$command</pre>";

$output = shell_exec($command);

echo "<pre>$output</pre>";