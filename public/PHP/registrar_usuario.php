<?php

require_once 'conexao.php';

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';
$confirmar_senha = $_POST['confirmar_senha'] ?? '';
echo 1;
exit;

if ($nome == '' || $email == '' || $senha == '' || $confirmar_senha == '') {
    echo json_encode([
        'status' => false,
        'msg' => 'Preencha todos os campos.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => false,
        'msg' => 'E-mail inválido.'
    ]);
    exit;
}

if ($senha !== $confirmar_senha) {
    echo json_encode([
        'status' => false,
        'msg' => 'As senhas não conferem.'
    ]);
    exit;
}

try {

    $sqlVerifica = "SELECT id FROM usuarios WHERE email = ? LIMIT 1";
    $stmtVerifica = $pdo->prepare($sqlVerifica);
    $stmtVerifica->execute([$email]);

    if ($stmtVerifica->rowCount() > 0) {
        echo json_encode([
            'status' => false,
            'msg' => 'Este e-mail já está cadastrado.'
        ]);
        exit;
    }


    $sql = "INSERT INTO usuarios
            (nome, email, senha)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([
        $nome,
        $email,
        $senha
    ])) {

        echo json_encode([
            'status' => true,
            'msg' => 'Usuário cadastrado com sucesso.'
        ]);

    } else {

        echo json_encode([
            'status' => false,
            'msg' => 'Erro ao cadastrar usuário.'
        ]);
    }

} catch (PDOException $e) {

    echo json_encode([
        'status' => false,
        'msg' => 'Erro interno no servidor.'
    ]);
}