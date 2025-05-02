<?php
$host = "localhost"; // Endereço do servidor
$dbname = "durk"; // Nome do banco de dados

try {
    // Cria a conexão
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", null, null);
    
    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mensagem de sucesso
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Se houver erro na conexão, ele será capturado aqui
    echo "Erro de conexão: " . $e->getMessage();
}
?>
