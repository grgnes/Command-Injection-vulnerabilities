<?php

$ip = $_POST['ip'];  // get the IP address from the post request

$command = "ping -c 4 " . $ip;  // contruct the ping command

echo "<h3>Executed Command</h3>";
echo "<pre>$command</pre>";  // display the executed command
 
$output = shell_exec($command);  // execute the command and capture the output
 
echo "<pre>$output</pre>"; // display the output of the command