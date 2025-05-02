<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Loja de Roupas</title>
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

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            margin: 0 12px;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .right-header {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .search-box input {
            padding: 6px;
            border: 1px solid #aaa;
            border-radius: 4px;
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

        .social-icons img {
            height: 24px;
            margin-right: 10px;
        }
    </style>



</head>

<body>

    <!-- header -->
    <header>
        <div class="logo">Sematec</div>
        <nav>
            <a href="#">Vestuário</a>
            <a href="#">Acessórios</a>
            <a href="#">Lançamentos</a>
        </nav>
        <div class="right-header">
            <div class="search-box">
                <input type="text" placeholder="Procurar">
            </div>
            <span>👤 🛒</span>
        </div>
    </header>

    <div class="carousel">
        <div class="slides">
            <img src="banner1.jpg" alt="carrosel 1">
            <img src="banner2.jpg" alt="carrosel 2">
            <img src="banner3.jpg" alt="carrosel 3">
        </div>
    </div>

    <!-- meio -->
    <main style="padding: 40px; text-align: center;">
        <h1>bem vindo!</h1>
        <p>novidades e lançamentos.</p>
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
            <div class="social-icons" style="margin-top: 10px;">
                <!-- icones -->
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" width="24">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="24">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" width="24">
            </div>
        </div>
    </footer>

</body>

</html>