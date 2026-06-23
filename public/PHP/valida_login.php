<?php

require_once 'conexao.php';

$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "SELECT * 
        FROM usuarios
        WHERE nome = ?
        AND senha = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$login, $senha]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
    'status' => $usuario ? true : false
]);