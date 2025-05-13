<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(255, 255, 255);
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

    .cadastro {
        text-align: center;
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
        font-family: Arial, sans-serif;
    }

    input[type="email"],
    input[type="name"],
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
    input[type="name"]:focus,
    input[type="password"]:focus {
        border-color: #202020;
        box-shadow: 0 0 8px rgba(255, 0, 0, 0.3);
    }

    input::placeholder {
        color: #aaa;
    }

    button {
        background-color: #202020;
        color: white;
        font-size: 16px;
        padding: 12px;
        border: none;
        border-radius: 17px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: rgb(73, 73, 73);
    }

    button:focus {
        outline: none;
    }
</style>

<body>
    <?php include '../includes/header.php'; ?>

    <form action="" method="post">
        <div class="Info">
            <h1 class="cadastro">Cadastro</h1>

            <input type="name" id="nome" name="nome" placeholder="nome">

            <input type="email" id="email" name="email" placeholder="email">

            <input type="password" id="senha" name="senha" placeholder="senha">

            <input type="password" id="confSenha" name="senha" placeholder="confirme a senha">

            <button type="submit">cadastrar</button>
        </div>
    </form>

    <?php include '../includes/footer.php'; ?>
</body>

</html>