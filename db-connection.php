<?php

// db connection credentials 
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// create connection
$connection = new mysqli($servername, $username, $password);

// check for error
if ($connection->connect_error) {
    echo 'Connection failed: ' . $connection->connect_error;
    exit; // stops all code execution
}

?>