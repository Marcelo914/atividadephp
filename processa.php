<?php
require_once 'conexao.php';

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$descricao = $_POST['descricao'] ?? '';
$preco = $_POST['preco'] ?? '';

if($id){
    $sql = "UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id";
    $stmt = $pdo ->prepare($sql);
    $stmt->bindParam(':id', $id);
}else{
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)";
    $stmt = $pdo->prepare($sql);
}

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':preco', $preco);

$stmt->execute();

header('location: index.php');
exit;