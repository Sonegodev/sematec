<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="imagens/logo.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 255, 255);
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
        }

        .Info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .login {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            font-family: Arial, sans-serif;
        }

        input[type="email"],
        input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 17px;
            outline: none;
            width: 100%;
            box-sizing: border-box;
            
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #202020;
            box-shadow: 0 0 8px rgba(255, 0, 0, 0.3);
        }

        input::placeholder {
            color: #aaa;
        }

        button {
            background-color:#202020;
            color: white;
            font-size: 16px;
            padding: 12px;
            border: none;
            border-radius: 17px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:rgb(73, 73, 73);
        }

        button:focus {
            outline: none;
        }
    </style>
</head>

<body>

    <?php include '../includes/header.php'; ?>

    <form action="" method="post">
        <div class="Info">
            <h1 class="login">Login</h1>
            <input type="email" id="email" name="email" placeholder="email">

            <input type="password" id="senha" name="senha" placeholder="senha">

            <p>não tem cadastro? <a href="../views/cadastro.php">clique aqui</a></p>

            <button type="submit">entrar</button>
        </div>
    </form>

    <?php include '../includes/footer.php'; ?>
</body>

</html>