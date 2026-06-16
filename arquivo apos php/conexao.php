<?php
$host = "sql205.infinityfree.com";
$usuario = "if0_41468828";
$senha = "SsPROaS5KmKz";
$banco = "if0_41468828_banco_de_dados_oceane";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>