<?php

$host = "dpg-d8t6s36q1p3s739273qg-a.virginia-postgres.render.com";
$port = "5432";
$dbname = "inclusao_e5re";
$user = "inclusao_e5re_user";
$pass = "PLLCv7F9caEg8RZJo8OW3MyjvxyhpwAi";

$dsn = "pgsql:host=$host;dbname=$dbname;sslmode=require";

try {

    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

} catch (PDOException $e) {
    die("Erro conexão: " . $e->getMessage());
}