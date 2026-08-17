<?php

session_start();

require_once __DIR__ . "/../config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /Commercial-CRM-System/Commercial-CRM-System/index");
    exit;
}

$email = trim($_POST["email"] ?? "");
$senha = $_POST["senha"] ?? "";

// ================================
// VALIDAÇÃO
// ================================

if ($email === "" || $senha === "") {
    $_SESSION["erro_login"] = "Informe o e-mail e a senha.";

    header("Location: /Commercial-CRM-System/index");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["erro_login"] = "Informe um e-mail válido.";

    header("Location: /Commercial-CRM-System/index");
    exit;
}

// ================================
// BUSCAR USUÁRIO
// ================================

$stmt = $mysqli->prepare("
    SELECT
        id,
        nome,
        email,
        senha,
        tipo,
        status
    FROM usuarios
    WHERE email = ?
    LIMIT 1
");

$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result();

$usuario = $result->fetch_assoc();

$stmt->close();

// ================================
// VERIFICAR USUÁRIO
// ================================

if (!$usuario) {
    $_SESSION["erro_login"] = "E-mail ou senha incorretos.";

    header("Location: /Commercial-CRM-System/index");
    exit;
}

// ================================
// VERIFICAR STATUS
// ================================

if ($usuario["status"] !== "ativo") {
    $_SESSION["erro_login"] = "Seu usuário está inativo.";

    header("Location: /Commercial-CRM-System/index");
    exit;
}

// ================================
// VERIFICAR SENHA
// ================================

if (!password_verify($senha, $usuario["senha"])) {
    $_SESSION["erro_login"] = "E-mail ou senha incorretos.";

    header("Location: /Commercial-CRM-System/index");
    exit;
}

// ================================
// LOGIN CORRETO
// ================================

session_regenerate_id(true);

$_SESSION["usuario_id"] = $usuario["id"];
$_SESSION["usuario_nome"] = $usuario["nome"];
$_SESSION["usuario_email"] = $usuario["email"];
$_SESSION["usuario_tipo"] = $usuario["tipo"];
$_SESSION["logado"] = true;

// ================================
// ATUALIZAR ÚLTIMO LOGIN
// ================================

$stmt = $mysqli->prepare("
    UPDATE usuarios
    SET ultimo_login = NOW()
    WHERE id = ?
");

$stmt->bind_param("i", $usuario["id"]);

$stmt->execute();

$stmt->close();

// ================================
// REDIRECIONAR
// ================================

header("Location: /Commercial-CRM-System/dashboard");
exit;