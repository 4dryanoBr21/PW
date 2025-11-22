<?php
$db_host = 'localhost';
$db_user = 'root';
$dbpassword = '';
$dbname = 'loja_do_brasil';

$conexao = new mysqli($db_host, $db_user, $dbpassword, $dbname);

if ($conexao->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $conexao->connect_error);
}
?>