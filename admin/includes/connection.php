<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=heticback;', 'root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8');
