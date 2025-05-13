<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Painel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .admin-header {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo1 img {
            height: 60px;
            width: auto;
        }

        .logo h1 {
            margin: 0;
            font-size: 1.5em;
        }

        .admin-nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .admin-nav li {
            display: inline;
        }

        .admin-nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .admin-nav a:hover {
            color: #ddd;
        }

        .logout-btn {
            background-color: #ff4d4d;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
        }

        .logout-btn:hover {
            background-color: #e60000;
        }
    </style>
</head>

<body>
    <header class="admin-header">
        <div class="logo-group">
            <div class="logo1">
                <img src="../views/imagens/logoAba.png" alt="Durk Logo">
            </div>
            <div class="logo">
                <h1>Admin</h1>
            </div>
        </div>
        <nav class="admin-nav">
            <ul>
                <li><a href="../views/index.php">Dashboard</a></li>
                <li><a href="index.php">Painel</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>
