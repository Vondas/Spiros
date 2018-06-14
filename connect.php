<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Spiros";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch(PDOException $e) {
    die($e->getMessage());
}

$pdo->exec('SET NAMES UTF8');