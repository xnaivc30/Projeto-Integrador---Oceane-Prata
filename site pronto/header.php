<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="topo">
    <header>
        <img src="imagens/Design sem nome.png"
             alt="Logotipo da loja Pratas Oceano com letras elegantes sobre fundo branco"
             width="800px">
        <h2>OCEANE PRATA</h2>
    </header>
    <nav>
        <a href="index.php">HOME</a>
        <a href="index.php#Produtos">PRODUTOS</a>
        <a href="index.php#Contato">CONTATO</a>

        <?php if (isset($_SESSION["email"])) { ?>
            <a href="logout.php">
                <span style="background-color:red;padding:10px;color:white;border-radius:8px;">
                    SAIR
                </span>
            </a>
        <?php } else { ?>
            <a href="login.php">
                <span style="background-color:rgb(11,146,170);padding:10px;color:white;border-radius:8px;">
                    LOGIN
                </span>
            </a>
        <?php } ?>
        <a href="carrinho.php">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </nav>
</div>