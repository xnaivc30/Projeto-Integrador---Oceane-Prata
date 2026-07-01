<?php
/* Navegação Responsiva
   Adicionado: toggle hambúrguer (#navToggle), id da nav (#mainNav), overlay (#navOverlay)
   O CSS e o script.js controlam a lógica de exibição/ocultação.
*/
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div id="navOverlay" class="nav-overlay" aria-hidden="true"></div>
<div class="topo">
    <header>
        <img src="imagens/Design sem nome.png"
             alt="Logotipo da loja Pratas Oceano"
             width="88">
        <h2>Silver Ocean</h2>
    </header>
    <button id="navToggle" class="nav-toggle" aria-label="Abrir menu de navegação" aria-controls="mainNav" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav id="mainNav" role="navigation" aria-label="Menu principal">
        <a href="index.php">HOME</a>
        <a href="index.php#Produtos">PRODUTOS</a>
        <a href="index.php#Contato">CONTATO</a>
        <?php if (isset($_SESSION["email"])) { ?>
            <a href="logout.php">
                <span style="background-color:red; padding:8px 14px; color:white; border-radius:8px; white-space:nowrap;">
                    SAIR
                </span>
            </a>
        <?php } else { ?>
            <a href="login.php">
                <span style="background-color:rgb(11,146,170); padding:8px 14px; color:white; border-radius:8px; white-space:nowrap;">
                    LOGIN
                </span>
            </a>
        <?php } ?>
        <a href="carrinho.php" aria-label="Ver carrinho de compras">
         <i class="fa-solid fa-cart-shopping" style="font-size:1.2rem;"></i>
        </a>
    </nav>
</div>
