<?php
// Get the form data from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Contruct the command to execute the feedback script with the form data as arguments
$command =
    "/usr/local/bin/feedback " .
    "--name '$name' " .
    "--email $email " .
    "--subject '$subject' " .
    "--message '$message'";

shell_exec($command);  // execute the command

header("Content-Type: application/json");   // set the content type to json
echo "{}";