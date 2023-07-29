<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'loteria';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);



} catch (\Throwable $th) {
    throw $th;
}

?>