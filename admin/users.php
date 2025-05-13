<?php
include 'includes/auth.php';
include '../backend/db.php';
?>

<?php include 'includes/header.php'; ?>

<main class="bg-gray-100 min-h-screen p-8">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow-md">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-gray-800 flex items-center gap-2">👥 Gerenciar Usuários</h1>
      <a href="usuario_adicionar.php"
         class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-4 py-2 rounded transition">
         ➕ Adicionar Usuário
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left border border-gray-200">
        <thead class="bg-gray-100 text-gray-700 uppercase tracking-wide">
          <tr>
            <th class="px-4 py-3 border-b">ID</th>
            <th class="px-4 py-3 border-b">Nome</th>
            <th class="px-4 py-3 border-b">Email</th>
            <th class="px-4 py-3 border-b">Telefone</th>
            <th class="px-4 py-3 border-b">Tipo</th>
            <th class="px-4 py-3 border-b text-center">Ações</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <?php
          $usuarios = $conn->query("SELECT * FROM users ORDER BY id DESC");
          while ($usuario = $usuarios->fetch_assoc()):
          ?>
            <tr class="hover:bg-gray-50 border-b">
              <td class="px-4 py-3"><?= $usuario['id'] ?></td>
              <td class="px-4 py-3"><?= htmlspecialchars($usuario['nome']) ?></td>
              <td class="px-4 py-3"><?= htmlspecialchars($usuario['email']) ?></td>
              <td class="px-4 py-3"><?= htmlspecialchars($usuario['telefone']) ?></td>
              <td class="px-4 py-3 capitalize"><?= htmlspecialchars($usuario['tipo_usuario']) ?></td>
              <td class="px-4 py-3 text-center space-x-2">
                <a href="usuario_editar.php?id=<?= $usuario['id'] ?>"
                   class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition text-xs">
                   ✏️ Editar
                </a>
                <a href="usuario_excluir.php?id=<?= $usuario['id'] ?>"
                   onclick="return confirm('Tem certeza que deseja excluir este usuário?');"
                   class="inline-block bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded transition text-xs">
                   🗑️ Excluir
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>



<?php include 'includes/footer.php'; ?>