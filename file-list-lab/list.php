<?php

$folder = $_POST['folder'] ?? '';

$command = "ls " . $folder;

$output = shell_exec($command);

echo $output;
