<?php

define('SITE_NAME', 'TAH Tecnologia');
define('SITE_URL', 'http://localhost/Commercial-CRM-System');

define('ASSETS_URL', SITE_URL . '/assets');

define('TELEFONE', '(16) 0000-0000');
define('EMAIL', 'contato@sempresa.com.br');
define('ENDERECO', 'Rua Exemplo, 123 - Cidade, Estado - CEP 00000-000');

define('BASE_PATH', dirname(dirname(dirname(__FILE__))));

/*
|--------------------------------------------------------------------------
| CONEXÃO COM BANCO
|--------------------------------------------------------------------------
*/

$connectionFile = BASE_PATH . '/app/config/conexao.php';

// if (file_exists($connectionFile)) {
//     require_once $connectionFile;
// } else {
//     die('Arquivo de conexão com o banco de dados não encontrado.');
// }