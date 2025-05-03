<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Durk</title>
    <link rel="icon" type="image/png" href="imagens\logoAba.png">
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
   
    <?php include 'frontend/includes/header.php'; ?>

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

    <?php include 'frontend/includes/footer.php'; ?>

</body>

<script>

</script>

</html>