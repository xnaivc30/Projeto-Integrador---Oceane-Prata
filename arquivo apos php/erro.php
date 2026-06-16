<?php
session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] != "POST" || empty($_POST["email"]) || empty($_POST["senha"])) {
    header("Location: login.php");
    exit();
}

$email = trim($_POST["email"]);
$senha = $_POST["senha"];

$sql = "SELECT * FROM Login WHERE email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro no servidor");
}

$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();
    
    if (password_verify($senha, $usuario["senha"])) {
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["email"] = $usuario["email"];
        echo "<script>alert('Logado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Senha incorreta!'); window.location.href='login.php';</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado!'); window.location.href='login.php';</script>";
}

$stmt->close();
$conn->close();
?>