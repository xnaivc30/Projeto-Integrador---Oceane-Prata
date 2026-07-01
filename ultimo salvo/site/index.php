<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratas Oceano</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="Pagina1">
<?php include("header.php"); ?>
    <main>
        <div class="PrimeiraParte">
            <div class="Esquerda">
                <div>
                    <h2>The best silver you've ever seen</h2>
                    <p>Authenticy and style for all your moments. Unique pieces made out of 925 silver and costume jewelry selected for you to shine daily.</p>
                    <a href="#Produtos">See collection </a>
                    <a href="#Contato">Contact Us </a>
                </div>
            </div>
            <div class="Direita">
                <div>
                    <img src="imagens/1.png" alt="Prata Oceano produto destaque" width="350px">
                </div>
            </div>
        </div>
        <div id="Produtos"> </div>
        <br>
        <br>
        <p></p>
        <div class="banner1">
            <h3>Best-Sellers</h3>
            <h1><span>Featured</span> Products</h1>
        </div>
        <div class="Botoesdedestaques">
            <button class="ativo" onclick="marcarDestaque(this)">All</button>
            <button onclick="marcarDestaque(this)">Rings</button>
            <button onclick="marcarDestaque(this)">Chains</button>
            <button onclick="marcarDestaque(this)">Semi Jewels</button>
            <button onclick="marcarDestaque(this)">Earrings</button>
        </div>
        <div class="SegundaParte">
            <div class="cimapt1">
                <div class="cards" data-categoria="CORRENTES"><img src="imagens/colar de prata 2.webp"
                        alt="Colar de prata" width="150px">
                    <b>Silver necklace</b>
                    <p>Sophisticated necklace made out of <br> 925 silver for everyday use.</p>
                    <span>US$45.50 <strong class="antigo">US$ 50.50</strong></span>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="1">
                        <input type="hidden" name="nome_produto" value="Colar de prata">
                        <input type="hidden" name="preco" value="219.90">
                        <button type="submit"> Add to cart</button>
                    </form>
                </div>
                <div class="cards" data-categoria="CORRENTES"><img src="imagens/colar de prata 3.webp"
                        alt="Colar elegante" width="150px">
                    <h2>Premium Necklace</h2>
                    <p>Modern design with a glossy <br> finish.</p>
                    <span>US$44.20<strong class="antigo">US$ 55.50</strong></span>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="2">
                        <input type="hidden" name="nome_produto" value="Colar Premium">
                        <input type="hidden" name="preco" value="229.90">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
                <div class="cards" data-categoria="SEMIJOIAS"><img src="imagens/colar de prata 4.webp"
                        alt="Colar clássico" height="220px" width="150px">
                    <h2>Classic Necklace</h2>
                    <p>Light and elegant piece to go with any <br> outfit.</p>
                    <span>US$38.50<strong class="antigo">US$ 48.50</strong></span>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="3">
                        <input type="hidden" name="nome_produto" value="Colar Clássico">
                        <input type="hidden" name="preco" value="199.90">
                        <button type="submit"> Add to cart</button>
                    </form>
                </div>
            </div>
            <div class="baixopt2">
                <div class="cards" data-categoria="ALIANÇAS"><img src="imagens/Imagem aliança 1.webp"
                        alt="Brincos elegantes" height="220px" width="150px">
                    <h2>Elegant Rings</h2>
                    <p>Delicate pieces with a strong <br> sparkle.</p>
                    <span>US$ 46.30 <strong class="antigo">US$ 55.90</strong></span>
                <form action="adicionar_carrinho.php" method="POST">
    <input type="hidden" name="produto_id" value="4">
    <input type="hidden" name="nome_produto" value="Aneis Elegantes">
    <input type="hidden" name="preco" value="239.90">
    <button type="submit">Add to cart</button>
            </form>
                </div>
                <div class="cards" data-categoria="BRINCOS"><img src="imagens/pulseira 3.webp" alt="Acessórios luxo"
                        width="150px">
                    <h2>Luxury Accessories</h2>
                    <p>Finish for special <br> events.</p>
                    <span>US$ 34.70 <strong class="antigo">US$ 44.40</strong></span>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="5">
                        <input type="hidden" name="nome_produto" value="Acessórios Luxo">
                        <input type="hidden" name="preco" value="179.90">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
                <div class="cards" data-categoria="SEMIJOIAS"><img src="imagens/colar de prata 3.webp" alt="Semijoias"
                        width="150px">
                    <h2>Semi Jewels</h2>
                    <p>Versatile style that goes with <br> everything.</p>
                    <span>US$40.50 <strong class="antigo">US$ 50.20</strong></span>
                    <form action="adicionar_carrinho.php" method="POST">
                        <input type="hidden" name="produto_id" value="6">
                        <input type="hidden" name="nome_produto" value="Semijoias">
                        <input type="hidden" name="preco" value="209.90">
                        <button type="submit">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- maisprabaixodomeio -->

        <div id="PaginaCuidado" class="PaginaCuidado">
            <div class="banner1">
                <h3>DURABILIDADE COM <span>GARANTIA</span></h3>
                <h2>Cuidados com suas Joias</h2>
            </div>
            <div class="Dividir2">
                <div class="Esquerda2">
                    <div class="suasjoias">
                        <h4>Evite a água</h4>
                        <p>Retire antes do banho, piscina ou mar. A água acelera o escurecimento natural da prata.</p>
                    </div>
                    <br>
                    <div class="suasjoias">
                        <h4>Limpeza</h4>
                        <p>Use flanela macia ou pasta específica para prata. Evite produtos abrasivos.</p>
                    </div>

                </div>
                <div class="Direita2">
                    <div class="suasjoias">
                        <h4>Armazenamento</h4>
                        <p>Guarde em saquinhos ou caixinhas individuais, longe da umidade e luz solar direta.</p>
                    </div>
                    <br>
                    <div class="suasjoias">
                        <h4>Perfumes e cremes</h4>
                        <p>Aplique perfumes e cremes antes de colocar as joias. Produtos químicos oxidam a prata.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Pagina de contato no final -->
        <div id="Contato" class="PaginaContato">
            <div class="banner1">
                <h2>CONTACT <span style="color: gold;">US</span> </h3>
                    <h2><span style="color: #4ecdc4;">We’re here to help!</span></h2>
            </div><br><br>

            <div class="envolvetudo">
                <div class="direita3">
                    <p> Do you have questions or need help? Our team is ready to assist you. Send a message and we'll get back to you as soon as possible.</p>
                    <h3>Send a message to our<span style="color: rgb(50, 173, 50);">WhatsApp</span></h3>
                    <form action="">
                        <input id="NomeCompleto" type="text" placeholder="Nome completo" required>
                        <input id="Assunto" type="text" placeholder="Assunto..." required><br><br><br>
                        <button onclick="AjudaEnviarMensagem()">Send a message</button> <br>
                        <p id="resultadoprecisadeajuda"></p>
                    </form>
                </div>

                <div class="esquerda3">
                    <h3>Contact Information</h3>
                    <p><i class="fa-solid fa-location-dot"></i> Address: 123 Silver Street - Ocean City</p>
                    <p><i class="fa-solid fa-phone"></i> Phone: +55 (11) 98765-4321</p>
                    <p><i class="fa-solid fa-envelope"></i> E-mail: contato@oceaneprata.com</p>
                    <p><i class="fa-solid fa-clock"></i> Opening Hours: Monday to Friday, from 9AM to 6PM</p>
                    <p><i class="fa-solid fa-headset"></i> 24/7 Customer Service for questions and assistance.</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-titulo">
            <p>Silver Ocean</p>
            
        </div>
        <div class="medias-sociais">
            <a style="color: aliceblue;" href="https://www.tiktok.com/pt-BR/"><i class="fa-brands fa-tiktok"></i></a>
            <a style="color: aliceblue;" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a style="color: aliceblue;" href="https://www.facebook.com/?locale=pt_BR"><i
                    class="fa-brands fa-facebook"></i></a>
            <a style="color: aliceblue;" href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <ul class="Links">
            <li> <a href="#Produtos">Products</a> </li>
            <li> <a href="#PaginaCuidado">Care</a> </li>
        </ul>
        <div class="Line"></div>
        <p class="copyright">
            Oceane Prata &copy; 2026
        </p>
    </footer>
    <script src="script.js"></script>
</body>

</html>