<?php
session_start();
include("conexao.php");
if (!isset($_SESSION["email"])) {
    die("Faça login primeiro.");
}
$email = $_SESSION["email"];
$produto_id = $_POST["produto_id"];
$nome = $_POST["nome_produto"];
$preco = $_POST["preco"];

$sql = "SELECT * FROM carrinho
        WHERE email = ? AND produto_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $produto_id);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {

    $sql = "UPDATE carrinho
            SET quantidade = quantidade + 1
            WHERE email = ? AND produto_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $produto_id);
    $stmt->execute();

} else {

    $sql = "INSERT INTO carrinho
            (email, produto_id, nome_produto, preco, quantidade)
            VALUES (?, ?, ?, ?, 1)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd",
        $email,
        $produto_id,
        $nome,
        $preco
    );

    $stmt->execute();
}

header("Location: carrinho.php");
exit;
?>