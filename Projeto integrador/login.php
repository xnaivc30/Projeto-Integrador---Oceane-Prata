<?php

session_start();

include("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$sql = "SELECT * FROM Login WHERE email = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Erro SQL: " . $conn->error);
}
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();
if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();
    if (password_verify($senha, $usuario["senha"])) {
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["email"] = $usuario["email"];
        echo "
        <h1>Login realizado com sucesso!</h1>
        <p>Bem-vindo, {$usuario['email']}.</p>
        <a href='index.html'>Ir para a página inicial</a>
        ";

    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}
?>