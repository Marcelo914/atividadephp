<?php 
$host = 'localhost';
$db = 'loja';
$user = 'loja';
$pass = '9146';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "erro na conexão do banco de dados: " . $e->getMessage();
    exit;
}
