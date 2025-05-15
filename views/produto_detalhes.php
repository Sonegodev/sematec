<?php include '../includes/header.php'; ?>
<?php include '../backend/db.php'; ?>
<?php
if (!isset($_GET['id'])) {
  echo "<p>Produto não especificado.</p>";
  exit;
}
$id = intval($_GET['id']);
$query = "
  SELECT p.*, c.nome AS categoria, m.nome AS marca
  FROM produtos p
  JOIN categorias c ON p.categoria_id = c.id
  JOIN marcas m ON p.marca_id = m.id
  WHERE p.id = $id
";
$result = mysqli_query($conn, $query);
$produto = mysqli_fetch_assoc($result);
if (!$produto) {
  echo "<p>Produto não encontrado.</p>";
  exit;
}
$imagens = mysqli_query($conn, "SELECT url_imagem FROM imagens_produto WHERE produto_id = $id");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($produto['nome']); ?> | Loja Durk</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-gray-50">
<main class="max-w-7xl mx-auto px-6 py-10 animate__animated animate__fadeIn">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
    <div class="space-y-4" data-aos="fade-right">
      <?php if ($img = mysqli_fetch_assoc($imagens)) {
        echo '<img src="../' . htmlspecialchars($img['url_imagem']) . '" class="rounded-xl w-full max-h-[480px] object-contain bg-white shadow" alt="Imagem do produto">';
      }
      echo '<div class="flex gap-3 overflow-x-auto scrollbar-hide">';
      while ($img = mysqli_fetch_assoc($imagens)) {
        echo '<img src="../' . htmlspecialchars($img['url_imagem']) . '" class="w-20 h-20 object-contain bg-white rounded-lg shadow cursor-pointer">';
      }
      echo '</div>';
      ?>
    </div>

    <div class="space-y-6" data-aos="fade-left">
      <h1 class="text-3xl font-bold text-gray-900"><?php echo htmlspecialchars($produto['nome']); ?></h1>
      <p class="text-sm text-gray-500">
        Categoria: <strong><?php echo htmlspecialchars($produto['categoria']); ?></strong> | Marca: <strong><?php echo htmlspecialchars($produto['marca']); ?></strong>
      </p>
      <p class="text-4xl font-extrabold text-green-600">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
      <p class="text-gray-700 leading-relaxed">
        <?php echo nl2br(htmlspecialchars($produto['descricao'] ?? 'Produto sem descrição detalhada.')); ?>
      </p>

      <div class="flex gap-4 flex-wrap pt-4">
        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg text-lg font-semibold transition shadow">
          <i class="fa-solid fa-cart-shopping mr-2"></i> Adicionar ao carrinho
        </button>
        <button class="flex items-center justify-center w-14 h-14 rounded-lg border border-gray-300 hover:border-red-500 hover:text-red-500 transition">
          <i class="fa-solid fa-heart text-xl"></i>
        </button>
        <button class="flex-1 bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg text-lg font-semibold transition shadow">
          <i class="fa-solid fa-bolt mr-2"></i> Comprar agora
        </button>
      </div>
    </div>
  </div>
</main>
<script>AOS.init();</script>
<?php include '../includes/footer.php'; ?>
</body>
</html>
