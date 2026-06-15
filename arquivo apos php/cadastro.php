<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    if (!$stmt) {
        die("Erro SQL: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $senhaHash);

    if ($stmt->execute()) {
        echo "<script>
                alert('Cadastro realizado com sucesso!');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratas Oceano</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
 <div class="topo">
        <header><img src="imagens/Design sem nome.png" alt="Logo Pratas Oceano" width="800px">
            <h2>OCEANE PRATA</h2>
        </header>
        <nav>
            <a href="index.php">HOME</a>
            <a href="index.html">CONTATO</a>
            <a href="index.html">PRODUTOS</a>
            <a href="login.html"><span style="background-color: rgb(11, 146, 170);padding: 10px; color: rgb(255, 255, 255); border-radius: 8px;">LOGIN</span></a>
        </nav>
    </div>
<body class="Pagina2">
    <main class="main2">
        <form action="cadastro.php" method="POST">
        <div class="paginaloguin">
            <h2>Cadastre-se</h2>
            <label>Email</label>
            <input type="email" name="email" placeholder="username@email.com">
            <label>Crie uma senha</label>
            <input type="password" name="senha" placeholder="Password">
            <label> Confirme sua senha </label>
            <input type="password" name="confirmar_senha" placeholder="Password">
            <button type="submit">Cadastrar</button>
            <p> Esqueceu sua senha?&nbsp; <a href="esqueci.html"> Clique aqui </a></p>
            <span>Ou continue com</span><br>
            <div style="display: flex; margin-top: 5px;">
                <button><i class="fa-brands fa-google"></i></button>&nbsp;&nbsp;
                <button><i class="fa-brands fa-apple"></i></button>&nbsp;&nbsp;
                <button><i class="fa-brands fa-facebook"></i></button>&nbsp;&nbsp;
            </div> 
        </form><br>
            <div style="display: flex; gap: 7px;" class="cadastro">
                <span>Já tem uma conta? </span><a href="login.php">Login</a>
            </div>
        </div>
    </main>

        <footer class="footer2">
        <div class="footer-titulo2">
            <p></p>
            OCEANE PRATA
        </div>
        <div class="medias-sociais">
            <a style="color: aliceblue;" href="https://www.tiktok.com/pt-BR/"><i class="fa-brands fa-tiktok"></i></a>
            <a style="color: aliceblue;" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a style="color: aliceblue;" href="https://www.facebook.com/?locale=pt_BR"><i class="fa-brands fa-facebook"></i></a>
            <a style="color: aliceblue;" href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        </div>
        <ul class="Links">
            <li> <a href="index.html#Produtos">Produtos</a> </li>
            <li> <a href="index.html#PaginaCuidado">Cuidados</a> </li>
        </ul>
        <div class="Line"></div>
        <p class="copyright">
            Oceane Prata &copy; 2026
        </p>
    </footer>

    <script src="script.js"></script>
</body>
</html>