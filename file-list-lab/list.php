<?php

$folder = $_POST['folder'] ?? '';  // get the folder name from the post request

$command = "ls " . $folder;   // construct the ls command

$output = shell_exec($command);  // execute the command and capture the output

echo $output;  // return the output to the client
