<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("conexao.php");
if (!isset($_SESSION["email"])) {
    $email = "";
} else {
    $email = $_SESSION["email"];
}

if (isset($_GET['add']) && $email != "") {
    $id = $_GET['add'];

    $sql = "UPDATE carrinho SET quantidade = quantidade + 1 WHERE id = ? AND email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $id, $email);
    $stmt->execute();

    header("Location: carrinho.php");
    exit;
}
if (isset($_GET['minus']) && $email != "") {
    $id = $_GET['minus'];

    $sql = "UPDATE carrinho 
            SET quantidade = GREATEST(quantidade - 1, 1)
            WHERE id = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $id, $email);
    $stmt->execute();

    header("Location: carrinho.php");
    exit;
}
$total = 0;
$resultado = null;

if ($email != "") {
    $sql = "SELECT * FROM carrinho WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }
}
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
    <?php include("header.php"); ?>

    <main class="paginaCarrinho">
        <section class="listaCarrinho" id="listaCarrinhoConteudo">
            <h2>Meu Carrinho</h2>
            <p class="descricaoCarrinho">Revise seus itens antes de finalizar a compra.</p>
            <div id="itemsContainer">

<?php
$total = 0;
if ($resultado) {
    while ($produto = $resultado->fetch_assoc()) {
        $subtotal = $produto["preco"] * $produto["quantidade"];
        $total += $subtotal;
?>
        <div class="itemCarrinho">
            <h3><?php echo $produto["nome_produto"]; ?></h3>
            <p>Preço: R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?></p>
            <p>
                Quantidade: <?php echo $produto["quantidade"]; ?>
                <a href="carrinho.php?minus=<?php echo $produto['id']; ?>" 
                   style="padding:2px 6px; background:#ccc; text-decoration:none; border-radius:3px;">-</a>
                <a href="carrinho.php?add=<?php echo $produto['id']; ?>" 
                   style="padding:2px 6px; background:#ccc; text-decoration:none; border-radius:3px;">+</a>
            </p>
            <p>Subtotal: R$ <?php echo number_format($subtotal, 2, ",", "."); ?></p>
            <a href="carrinho.php?del=<?php echo $produto['id']; ?>" 
               onclick="return confirm('Tem certeza que deseja remover este item?')"
               style="color:white; background:red; padding:6px 10px; border-radius:5px; text-decoration:none;">
               Remover
            </a>
        </div>
<?php
    }
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