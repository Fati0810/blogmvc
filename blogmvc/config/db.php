<?php 

$dsn = 'mysql:dbname=db_exemple;host=127.0.0.1';
$user = 'root';
$password = '';

$option= array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

$pdo = new PDO($dsn, $user, $password, $option);



?>