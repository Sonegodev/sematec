<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado e se é admin
if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'admin') {
    // Redireciona para o site público (index da views)
    header('Location: ../../views/index.php');
    exit();
}
?>
