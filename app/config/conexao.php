<?php

$host = "localhost";
$db   = "crm";
$user = "root";
$pass = "";
$charset = "utf8mb4";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {

    $mysqli = new mysqli(
        $host,
        $user,
        $pass,
        $db
    );

    $mysqli->set_charset($charset);

} catch (mysqli_sql_exception $e) {

    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Erro ao conectar no banco de dados.",
        "error" => $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);

    exit;
}