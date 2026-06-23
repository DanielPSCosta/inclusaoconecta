<?php

require_once 'conexao.php';

$sql = "SELECT * FROM atendimentos";

$stmt = $pdo->query($sql);

$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($dados);