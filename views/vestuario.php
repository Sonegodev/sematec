<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestuário</title>
    <link rel="icon" type="image/png" href="../views/imagens/logo.png">
    <style>
        .produtos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px;
        }

        .produto {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .produto:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .produto img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .produto h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .produto p {
            margin: 5px 0;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
        }

        .msgIndex {
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .subTexto {
            font-family: Arial, sans-serif;
        }

    </style>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <div class="msgIndex">
            <h1>Vestuário</h1>
            <p class="subTexto">todos nossos produtos</p>
        </div>
        

        <div class="produtos">
            <?php
            // include '../backend/db.php';

            // $query = "
            //     SELECT p.nome, p.preco, c.nome AS categoria, ip.url_imagem 
            //     FROM produtos p
            //     JOIN categorias c ON p.categoria_id = c.id
            //     LEFT JOIN imagens_produto ip ON p.id = ip.produto_id 
            //     GROUP BY p.id
            //     ORDER BY p.nome ASC;
            // ";
            // $result = mysqli_query($conn, $query);

            // if ($result && mysqli_num_rows($result) > 0) {
            //     while ($produto = mysqli_fetch_assoc($result)) {
            //         echo '<div class="produto">';
            //         echo '<img src="../views/imagens/' . htmlspecialchars($produto['url_imagem']) . '" alt="' . htmlspecialchars($produto['nome']) . '">';
            //         echo '<h3>' . htmlspecialchars($produto['nome']) . '</h3>';
            //         echo '<p>Categoria: ' . htmlspecialchars($produto['categoria']) . '</p>';
            //         echo '<p>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>';
            //         echo '<button>Comprar</button>';
            //         echo '</div>';
            //     }
            // } else {
            //     echo '<p>Nenhum produto disponível no momento.</p>';
            // }

            // mysqli_close($conn);
            ?>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>