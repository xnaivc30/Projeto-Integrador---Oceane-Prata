<?php
session_start();
include("conexao.php");

$mensagem = "";
$tipo_mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    
    if (empty($email)) {
        $mensagem = "Por favor, insira um email válido.";
        $tipo_mensagem = "erro";
    } else {
        $sql = "SELECT id FROM Login WHERE email = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            
            if ($resultado->num_rows > 0) {
                $mensagem = "Um link de recuperação foi enviado para seu email.";
                $tipo_mensagem = "sucesso";
            } else {
                $mensagem = "Email não encontrado em nosso banco de dados.";
                $tipo_mensagem = "erro";
            }
            $stmt->close();
        }
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
    <title>Recuperar Senha - Pratas Oceano</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body class="Pagina2">
    <div class="topo">
        <header><img src="imagens/Design sem nome.png" alt="Logo Pratas Oceano" width="800px">
            <h2>OCEANE PRATA</h2>
        </header>
        <nav>
            <a href="index.php">HOME</a>
            <a href="index.php#Produtos">PRODUTOS</a>
            <a href="index.php#Contato">CONTATO</a>
            <a href="login.php"><span style="background-color: rgb(11, 146, 170);padding: 10px; color: rgb(255, 255, 255); border-radius: 8px;">LOGIN</span></a>
        </nav>
    </div>

    <main class="main2">
        <form action="esqueci.php" method="POST">
            <div class="paginaloguin">
                <h2>Recuperar Senha</h2>
                <?php if ($mensagem): ?>
                    <p style="color: <?php echo $tipo_mensagem === 'sucesso' ? 'green' : 'red'; ?>;">
                        <?php echo htmlspecialchars($mensagem); ?>
                    </p>
                <?php endif; ?>
                <label>Email</label>
                <input type="email" name="email" placeholder="username@email.com" required>
                <button type="submit">Recuperar Senha</button>
                <p>Lembrou sua senha? <a href="login.php">Voltar ao Login</a></p>
                <div style="display: flex; gap: 7px; justify-content: center;">
                    <span>Não tem uma conta?</span>
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
