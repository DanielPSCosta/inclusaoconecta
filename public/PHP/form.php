<?php

require_once 'conexao.php';

$atendente = $_POST['atendente'] ?? '';
$atendido = $_POST['atendido'] ?? '';
$servico = $_POST['servico_executado'] ?? '';
$duracao = $_POST['duracao'] ?? '';
$categoria = $_POST['categoria'] ?? '';


$sql = "INSERT INTO atendimentos
        (atendente, atendido, servico, duracao, categoria)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

if ($stmt->execute([
    $atendente,
    $atendido,
    $servico,
    $duracao,
    $categoria
])) {

    echo json_encode([
        'status' => true
    ]);

} else {

    echo json_encode([
        'status' => false
    ]);
}