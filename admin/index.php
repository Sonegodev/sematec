<head>
    <link rel="icon" type="image/png" href="includes/imagens/logo.png">
</head>
<?php include 'includes/header.php'; ?>
<main class="dashboard">
    <h1>Bem-vindo ao Painel Administrativo</h1>

    <div class="dashboard-cards">
        <div class="card">
            <h2>Usuários</h2>
            <p>Gerencie todos os usuários cadastrados na loja.</p>
            <a href="users.php" class="btn">Acessar</a>
        </div>
        <div class="card">
            <h2>Produtos</h2>
            <p>Visualize, adicione e edite os produtos da loja.</p>
            <a href="produtos.php" class="btn">Acessar</a>
        </div>
        <div class="card">
            <h2>Relatórios</h2>
            <p>Verifique relatórios de vendas e estoque.</p>
            <a href="reports.php" class="btn">Acessar</a>
        </div>
        <div class="card">
            <h2>Configurações</h2>
            <p>Altere as configurações do sistema.</p>
            <a href="settings.php" class="btn">Acessar</a>
        </div>
    </div>
</main>
<style>
    main {
        font-family: Arial, sans-serif;
    }
    .dashboard {
        padding: 20px;
        text-align: center;
    }

    .dashboard h1 {
        margin-bottom: 20px;
        font-size: 2em;
    }

    .dashboard-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h2 {
        margin: 0 0 10px;
        font-size: 1.5em;
    }

    .card p {
        margin: 10px 0 15px;
        color: #666;
    }

    .btn {
        background-color: #007bff;
        color: white;
        text-decoration: none;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
<?php include 'includes/footer.php'; ?>