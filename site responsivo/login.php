<?php
session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
    exit;
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
    <title>Login - Oceane Prata</title>

    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</head>

<body class="Pagina2">

<?php include("header.php"); ?>

    <main class="main2">
        <form action="erro.php" method="POST">

            <div class="paginaloguin">

                <h2>Login</h2>

                <label>Email</label>
                <input type="email" name="email" placeholder="username@email.com" required>

                <label>Senha</label>
                <input type="password" name="senha" placeholder="Password" required>

                <button type="submit">Entrar</button>

                <p>Esqueceu sua senha? <a href="esqueci.php">Clique aqui</a></p>

                <div style="display: flex; gap: 7px;" class="cadastro">
                    <span>Ainda não tem uma conta?</span>
                    <a href="cadastro.php">Cadastre-se</a>
                </div>

            </div>

        </form>

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
        <ul class="Links">
            <li><a href="index.php#Produtos">Produtos</a></li>
            <li><a href="index.php#Cuidados">Cuidados</a></li>
        </ul>
        <div class="Line"></div>
        <p class="copyright">
            Oceane Prata &copy; 2026
        </p>
    </footer>

    <script src="script.js"></script>

</body>

</html>