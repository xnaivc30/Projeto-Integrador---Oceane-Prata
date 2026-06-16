<?php
session_start();
include("conexao.php");
$email = $_SESSION["email"];
$sql = "SELECT * FROM carrinho WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho — Pratas Oceano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="Pagina1">
    <div class="topo">
        <header>
            <img src="imagens/Design sem nome.png" alt="Logotipo da loja Pratas Oceano com letras elegantes sobre fundo branco">
            <h2>OCEANE PRATA</h2>
        </header>
        <nav>
            <a href="index.php">HOME</a>
            <a href="index.php#Produtos">PRODUTOS</a>
            <a href="index.php#Contato">CONTATO</a>
            <a href="login.php"><span style="background-color: rgb(11, 146, 170);padding: 10px; color: rgb(255, 255, 255); border-radius: 8px;">LOGIN</span></a>
            <a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </nav>
    </div>

    <main class="paginaCarrinho">
        <section class="listaCarrinho" id="listaCarrinhoConteudo">
            <h2>Meu Carrinho</h2>
            <p class="descricaoCarrinho">Revise seus itens antes de finalizar a compra.</p>
            <div id="itemsContainer">

<?php
$total = 0;

while ($produto = $resultado->fetch_assoc()) {

    $subtotal = $produto["preco"] * $produto["quantidade"];
    $total += $subtotal;
?>
    <div class="itemCarrinho">
        <h3><?php echo $produto["nome_produto"]; ?></h3>
        <p>Preço: R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?></p>
        <p>Quantidade: <?php echo $produto["quantidade"]; ?></p>
        <p>Subtotal: R$ <?php echo number_format($subtotal, 2, ",", "."); ?></p>
    </div>
<?php
}
?>

</div>
            <div id="emptyState" class="carrinhoVazio" style="display:none">
                <p>Seu carrinho está vazio.</p>
                <p><a href="index.php#Produtos">Continuar comprando</a></p>
            </div>
        </section>

        <aside class="resumoPedido">
            <h3>Resumo do Pedido</h3>
            <div class="linhaTotal"><span>Subtotal</span><span id="subtotal">R$ <?php echo number_format($total, 2, ",", "."); ?></span></div>
            <div class="linhaTotal"><span>Frete</span><span id="frete">R$ 0,00</span></div>
            <div class="linhaTotal linhaTotalFinal"><span>Total</span><span id="total">R$ <?php echo number_format($total, 2, ",", "."); ?></span></div>
            <button class="botaoFinalizarCompra" id="checkoutBtn">Finalizar Compra</button>
            <p class="infoSeguranca">Pagamento seguro — Parcelamos em até 3x sem juros</p>
        </aside>
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
</body>

</html>