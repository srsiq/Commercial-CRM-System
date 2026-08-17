<?php

require_once __DIR__ . "/src/config/conexao.php";

$nome  = "Administrador";
$email = "admin@empresa.com";
$senha = "123456";

$senhaHash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

$stmt = $mysqli->prepare("
    INSERT INTO usuarios (
        nome,
        email,
        senha,
        tipo,
        status
    )
    VALUES (?, ?, ?, 'admin', 'ativo')
");

$stmt->bind_param(
    "sss",
    $nome,
    $email,
    $senhaHash
);

$stmt->execute();

echo "Administrador criado com sucesso.";

$stmt->close();