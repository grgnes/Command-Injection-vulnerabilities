<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$command =
    "/usr/local/bin/feedback " .
    "--name '$name' " .
    "--email $email " .
    "--subject '$subject' " .
    "--message '$message'";

shell_exec($command);

header("Content-Type: application/json");
echo "{}";