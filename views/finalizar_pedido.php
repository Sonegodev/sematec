<?php
include '../admin/includes/auth.php';
include '../includes/header.php';
include '../backend/db.php';

$usuario_id = $_SESSION['usuario_id'];

$sql_endereco = "SELECT * FROM enderecos WHERE user_id = $usuario_id LIMIT 1";
$res_end = mysqli_query($conn, $sql_endereco);
$endereco = ($res_end && mysqli_num_rows($res_end) > 0) ? mysqli_fetch_assoc($res_end) : null;

$produtos = [];

if (isset($_GET['produto_id'])) {
    $produto_id = $_GET['produto_id'];
    $quantidade = $_GET['quantidade'] ?? 1;
    $sql_produto = "SELECT id, nome, preco FROM produtos WHERE id = $produto_id";
    $res = mysqli_query($conn, $sql_produto);
    if ($res && mysqli_num_rows($res) > 0) {
        $produto = mysqli_fetch_assoc($res);
        $produto['quantidade'] = $quantidade;
        $produtos[] = $produto;
    }
} elseif (isset($_POST['selecionados']) && is_array($_POST['selecionados'])) {
    $ids = implode(',', array_map('intval', $_POST['selecionados']));
    $sql = "SELECT p.nome, p.preco, ic.quantidade FROM itens_carrinho ic JOIN produtos p ON ic.produto_id = p.id WHERE ic.id IN ($ids)";
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $produtos[] = $row;
        }
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container py-5">
    <h1 class="mb-4 text-center display-5 fw-bold">Finalizar Pedido</h1>

    <div class="alert alert-info text-center" role="alert">
        <strong>Atenção:</strong> Esta é uma simulação acadêmica. Nenhum dado de pagamento será processado ou armazenado.
    </div>

    <div class="card mb-4">
        <div class="card-header fw-semibold">Resumo dos Produtos</div>
        <ul class="list-group list-group-flush">
            <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $item): ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div><?php echo htmlspecialchars($item['nome']); ?> (x<?php echo $item['quantidade']; ?>)</div>
                        <span class="fw-bold text-success">R$ <?php echo number_format($item['preco'] * $item['quantidade'], 2, ',', '.'); ?></span>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item text-danger">Nenhum produto selecionado.</li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="card mb-4">
        <div class="card-header fw-semibold">Endereço de Entrega</div>
        <div class="card-body">
            <?php if ($endereco): ?>
                <p class="mb-0">
                    <?php echo $endereco['rua'] . ', Nº ' . $endereco['numero']; ?>
                    <?php if (!empty($endereco['complemento'])) echo ' - ' . $endereco['complemento']; ?>,
                    <?php echo $endereco['bairro'] . ', ' . $endereco['cidade'] . ' - ' . $endereco['estado'] . ', ' . $endereco['cep'] . ', ' . $endereco['pais']; ?>
                </p>
            <?php else: ?>
                <p class="text-warning">Nenhum endereço encontrado. <button class="btn btn-sm btn-outline-primary" onclick="document.getElementById('modalEndereco').classList.remove('d-none')">Cadastrar Endereço</button></p>
            <?php endif; ?>
        </div>
    </div>

    <form id="formPedido" action="#" method="post" onsubmit="simularConfirmacao(event)">
        <div class="card mb-4">
            <div class="card-header fw-semibold">Forma de Pagamento (simulação)</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pagamento" id="pix" value="pix" checked>
                    <label class="form-check-label" for="pix">Pix</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pagamento" id="cartao" value="cartao">
                    <label class="form-check-label" for="cartao">Cartão de Crédito</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pagamento" id="boleto" value="boleto">
                    <label class="form-check-label" for="boleto">Boleto</label>
                </div>

                <div id="dados-cartao" class="mt-3 d-none">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="numero_cartao" placeholder="Número do Cartão" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nome_cartao" placeholder="Nome no Cartão" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="validade" placeholder="Validade (MM/AA)" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="cvv" placeholder="CVV" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success btn-lg">Confirmar Pedido</button>
        </div>
    </form>
</div>

<script>
    const pagamentoRadios = document.querySelectorAll('input[name="pagamento"]');
    const dadosCartao = document.getElementById('dados-cartao');
    pagamentoRadios.forEach(radio => {
        radio.addEventListener('change', () => {
            dadosCartao.classList.toggle('d-none', document.getElementById('cartao').checked === false);
        });
    });

    function simularConfirmacao(e) {
        e.preventDefault();
        Swal.fire({
            icon: 'success',
            title: 'Pedido Confirmado!',
            text: 'Seu pedido foi registrado com sucesso (simulação).',
            confirmButtonText: 'OK'
        });
    }
</script>

<?php include '../includes/footer.php'; ?>
