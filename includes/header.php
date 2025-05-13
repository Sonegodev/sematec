<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<head>
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 40px;
            border-bottom: 1px solid #ccc;
            font-family: Arial, sans-serif;
        }

        .headerEsq {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .logo a {
            text-decoration: none;
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

        nav a:hover {
            color: rgb(174, 0, 255);
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
    </style>
</head>

<header>
    <div class="headerEsq">
        <div class="logo">
            <a href="../views/index.php">
                <img src="../views/imagens/logo.png" alt="Logo Durk">
            </a>
        </div>
        <nav>
            <a href="../views/vestuario.php">Vestuário</a>
            <a href="#">Acessórios</a>
            <a href="#">Lançamentos</a>
        </nav>
    </div>

    <div class="headerDir">
        <div class="pesquisa">
            <form action="../views/busca.php" method="GET" class="flex items-center">
                <input type="text" name="q" placeholder="Procurar"
                    class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-gray-800" required>
            </form>
        </div>
        <a href="../views/favoritos.php">🖤</a>
        <a href="<?= isset($_SESSION['usuario_id']) ? '../views/minhaconta.php' : '../views/login.php' ?>" title="Minha Conta">
            👤
        </a>
        <a href="../views/carrinho.php">🛒</a>
    </div>
</header>