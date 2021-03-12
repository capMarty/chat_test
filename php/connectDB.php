<?php

$dbname = 'chat';
$user = 'capmarty';
$pass = 'capMarty0208';
$host = '127.0.0.1';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

try {
	$pdo = new PDO($dsn, $user, $pass, $opt);
} catch (Exception $e) {
	echo "Error";
}