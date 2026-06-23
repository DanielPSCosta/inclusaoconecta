<?php

require_once 'conexao.php';

$atendente = $_POST['atendente'];
$atendido = $_POST['Atendido'];
$servico = $_POST['servico_executado'];
$duracao = $_POST['Duracao'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO atendimentos
        (atendente, atendido, servico, duracao, categoria)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssss",
    $atendente,
    $atendido,
    $servico,
    $duracao,
    $categoria
);

if ($stmt->execute()) {

    echo json_encode([
        'status' => true
    ]);

} else {

    echo json_encode([
        'status' => false
    ]);
}