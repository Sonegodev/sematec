<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Durk</title>
    <link rel="icon" type="image/png" href="logoAba.png">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .carousel {
            width: 100%;
            max-height: 400px;
            overflow: hidden;
            position: relative;
            margin: 0 auto;
        }

        .slides {
            display: flex;
            width: 300%;
            animation: slide 10s infinite;
        }

        .slides img {
            width: 100%;
            height: auto;
            flex-shrink: 0;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            33% {
                transform: translateX(-100%);
            }

            66% {
                transform: translateX(-200%);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 40px;
            border-bottom: 1px solid #ccc;
        }

        .headerEsq {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        nav a {
            margin: 0 12px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .headerDir {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .pesquisa input {
            padding: 6px;
            border: 1px solid #aaa;
            border-radius: 10px;
        }

        /* footer */
        footer {
            background-color: #f9f9f9;
            padding: 30px 40px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            border-top: 1px solid #ccc;
        }

        footer div {
            margin: 10px;
        }

        footer h4 {
            margin-bottom: 10px;
        }

        footer a {
            display: block;
            text-decoration: none;
            color: black;
            margin: 4px 0;
        }

        .icones img {
            height: 24px;
            margin-right: 10px;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        .produtos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
            text-align: left;
        }

        .produto {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 16px;
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #fff;
            min-height: 300px;
        }

        .produto:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .produto img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }

    </style>

</head>

<body>

    <!-- header -->
    <header>
        <div class="headerEsq">
            <div class="logo"><img src="logo.png" alt=""></div>
            <nav>
                <a href="#">Vestuário</a>
                <a href="#">Acessórios</a>
                <a href="#">Lançamentos</a>
            </nav>
        </div>

        <div class="headerDir">
            <div class="pesquisa">
                <input type="text" placeholder="Procurar">
            </div>
            <span>👤 🛒</span>
        </div>
    </header>

    <div class="carousel">
        <div class="slides">
            <img src="\imagens\banner1.jpg" alt="carrosel 1">
            <img src="\imagens\banner2.jpg" alt="carrosel 2">
            <img src="\imagens\banner3.jpg" alt="carrosel 3">
        </div>
    </div>

    <!-- meio -->
    <main>
        <h1>bem vindo!</h1>
        <p>novidades e lançamentos.</p>
        <section class="produtos">
            <div class="produto">
                <img src="imagens/roupa1.jpg" alt="produto 1">
                <h3>Tênis Nike Macacation</h3>
                <p>R$ 79,90</p>
            </div>

            <div class="produto">
                <img src="imagens/roupa2.jpg" alt="produto 2">
                <h3>Camisa Travis Escroto</h3>
                <p>R$ 129,90</p>
            </div>

            <div class="produto">
                <img src="imagens/roupa3.jpg" alt="produto 3">
                <h3>Calça Angelical</h3>
                <p>R$ 199,90</p>
            </div>
            
            <div class="produto">
                <img src="imagens/roupa4.jpg" alt="produto 4">
                <h3>Skibidi</h3>
                <p>R$ 99,90</p>
            </div>
            
            <div class="produto">
                <img src="imagens/roupa5.jpg" alt="produto 5">
                <h3>Toilet</h3>
                <p>R$ 59,90</p>
            </div>

            <div class="produto">
                <img src="imagens/roupa6.jpg" alt="produto 6">
                <h3>Playtv</h3>
                <p>R$ 149,90</p>
            </div>
            
        </section>
    </main>

    <!-- footer -->
    <footer>
        <div>
            <h4>SOBRE</h4>
            <a href="#">Quem Somos</a>
            <a href="#">Perguntas Frequentes</a>
        </div>
        <div>
            <h4>MEUS DADOS</h4>
            <a href="#">Minha Conta</a>
            <a href="#">Meus Pedidos</a>
            <a href="#">Lista de Desejos</a>
        </div>
        <div>
            <h4>POLÍTICAS</h4>
            <a href="#">Trocas e Devoluções</a>
            <a href="#">Entrega e Frete</a>
            <a href="#">Pagamento</a>
            <a href="#">Privacidade</a>
            <a href="#">Termos de Uso</a>
        </div>
        <div>
            <h4>CONTATO</h4>
            <a href="#">Fale Conosco</a>
            <a href="#">(XX) XXXXX-XXXX</a>
            <a href="mailto:atendimento@loja.com.br">sematecloja@fatec.com.br</a>
            <div class="icones" style="margin-top: 10px;">
                <!-- icones -->
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" width="24">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="24">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" width="24">
            </div>
        </div>
    </footer>

</body>

<script>

</script>

</html>