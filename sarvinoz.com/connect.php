<?php
$username = 'root';
$password = '';
$host = 'localhost';
$dbname = 'dizayn';
$connection = new mysqli($host, $username, $password, $dbname);
if ($connection->connect_error) {
    die ("Connection error" . $connection->connect_error);
} else echo " ";