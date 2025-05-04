<?php
$servername = "localhost";
$username = "root"; // geralmente é root no XAMPP
$password = "";     // normalmente sem senha no XAMPP
$database = "durk";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexão
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
