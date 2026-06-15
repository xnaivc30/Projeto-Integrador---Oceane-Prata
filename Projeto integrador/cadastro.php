<?php

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmar = $_POST["confirmar_senha"];

if ($senha != $confirmar) {
    die("As senhas inseridas não correspondem.");
}

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO Login (email, senha) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senhaHash);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
?>