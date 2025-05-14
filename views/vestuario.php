<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestuário</title>
    <link rel="icon" type="image/png" href="../views/imagens/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-gray-100">
<?php include '../includes/header.php'; ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-900">🛍️ Vestuário</h1>
        <p class="text-gray-500 mt-2">Todos nossos produtos disponíveis</p>
    </div>

    <div class="flex flex-col md:flex-row gap-8">
        <!-- Filtros -->
        <aside class="md:w-64 space-y-4 bg-white p-6 rounded-xl shadow-md">
            <form method="GET" class="space-y-4">
                <?php include '../backend/db.php'; ?>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Categoria</label>
                    <select name="categoria" class="w-full border border-gray-300 rounded px-4 py-2">
                        <option value="">Todas</option>
                        <?php
                        $categorias = $conn->query("SELECT id, nome FROM categorias ORDER BY nome");
                        while ($c = $categorias->fetch_assoc()) {
                            echo '<option value="' . $c['id'] . '">' . htmlspecialchars($c['nome']) . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Marca</label>
                    <select name="marca" class="w-full border border-gray-300 rounded px-4 py-2">
                        <option value="">Todas</option>
                        <?php
                        $marcas = $conn->query("SELECT id, nome FROM marcas ORDER BY nome");
                        while ($m = $marcas->fetch_assoc()) {
                            echo '<option value="' . $m['id'] . '">' . htmlspecialchars($m['nome']) . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tamanho</label>
                    <select name="tamanho" class="w-full border border-gray-300 rounded px-4 py-2">
                        <option value="">Todos</option>
                        <?php
                        $tamanhos = $conn->query("SELECT id, descricao FROM tamanhos ORDER BY descricao");
                        while ($t = $tamanhos->fetch_assoc()) {
                            echo '<option value="' . $t['id'] . '">' . htmlspecialchars($t['descricao']) . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Gênero</label>
                    <select name="genero" class="w-full border border-gray-300 rounded px-4 py-2">
                        <option value="">Todos</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="unissex">Unissex</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Preço até</label>
                    <input type="text" name="preco" placeholder="R$" class="w-full border border-gray-300 rounded px-4 py-2" />
                </div>
                <div class="pt-2">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded">
                        Aplicar Filtros
                    </button>
                </div>
            </form>
        </aside>

        <!-- Produtos -->
        <section class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $filtros = [];
            if (!empty($_GET['categoria'])) $filtros[] = "p.categoria_id = " . intval($_GET['categoria']);
            if (!empty($_GET['marca'])) $filtros[] = "p.marca_id = " . intval($_GET['marca']);
            if (!empty($_GET['genero'])) $filtros[] = "p.genero = '" . $conn->real_escape_string($_GET['genero']) . "'";
            if (!empty($_GET['preco'])) $filtros[] = "p.preco <= " . floatval(str_replace(',', '.', str_replace('R$', '', $_GET['preco'])));
            if (!empty($_GET['tamanho'])) {
                $filtros[] = "EXISTS (SELECT 1 FROM produto_tamanhos pt WHERE pt.produto_id = p.id AND pt.tamanho_id = " . intval($_GET['tamanho']) . ")";
            }

            $where = count($filtros) ? "WHERE " . implode(" AND ", $filtros) : "";

            $query = "
                SELECT p.id, p.nome, p.preco, c.nome AS categoria, MIN(ip.url_imagem) AS imagem
                FROM produtos p
                JOIN categorias c ON p.categoria_id = c.id
                LEFT JOIN imagens_produto ip ON p.id = ip.produto_id
                $where
                GROUP BY p.id
                ORDER BY p.nome ASC;
            ";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($produto = mysqli_fetch_assoc($result)) {
                    echo '<div class="bg-white rounded-lg shadow group hover:shadow-md transition overflow-hidden flex flex-col w-full max-w-xs mx-auto">';
                    echo '<img src="../' . htmlspecialchars($produto['imagem']) . '" alt="' . htmlspecialchars($produto['nome']) . '" class="w-full h-48 object-cover">';
                    echo '<div class="p-4 flex flex-col justify-between flex-grow">';
                    echo '<h3 class="text-sm font-medium text-gray-900 line-clamp-2">' . htmlspecialchars($produto['nome']) . '</h3>';
                    echo '<p class="text-xs text-gray-500">' . htmlspecialchars($produto['categoria']) . '</p>';
                    echo '<p class="text-green-600 font-bold text-md mt-1">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>';
                    echo '<div class="mt-2 flex justify-start gap-4 text-xl text-gray-500">';
                    echo '<button title="Adicionar ao carrinho" class="hover:text-gray-800 transition">🛒</button>';
                    echo '<button title="Favoritar" class="hover:text-red-500 transition">❤️</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="col-span-full text-center text-gray-600">Nenhum produto encontrado com os filtros selecionados.</p>';
            }

            mysqli_close($conn);
            ?>
        </section>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
</body>

</html>
