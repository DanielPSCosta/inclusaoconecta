<?php

$arquivo = '../js/dados.json';

$dados = json_decode(file_get_contents($arquivo), true);

if (!$dados) {
    $dados = [];
}

$novoId = count($dados) + 1;

$dados[] = [
    'id' => $novoId,
    'servico' => $_POST['servico_executado'],
    'categoria' => $_POST['categoria'],
    'duracao' => $_POST['Duracao'],
    'disponibilidade' => 'Disponível',
    'atendente' => $_POST['atendente'],
    'atendido' => $_POST['Atendido']
];

file_put_contents(
    $arquivo,
    json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

echo json_encode([
    'status' => true
]);