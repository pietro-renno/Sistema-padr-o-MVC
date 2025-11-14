<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ============================================================== -->
    <!-- ORDEM CORRETA: CONTAINER DA LISTA DE PRODUTOS VEM PRIMEIRO -->
    <!-- ============================================================== -->
    <div class="container">
        <h1>Lista de Produtos</h1>
        
        <a href="index.php?controller=produto&action=adicionar" class="btn link-adicionar">Adicionar Novo Produto</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($produtos)): ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">Nenhum produto cadastrado.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= htmlspecialchars($produto['id']) ?></td>
                        <td><?= htmlspecialchars($produto['nome']) ?></td>
                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                        <td><?= htmlspecialchars($produto['categoria']) ?></td>
                        <td>
                            <a href="index.php?controller=produto&action=editar&id=<?= $produto['id'] ?>">Editar</a>
                            <a href="index.php?controller=produto&action=excluir&id=<?= $produto['id'] ?>" 
                            onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- ========================================================= -->
    <!-- ORDEM CORRETA: CONTAINER DA GALERIA VEM DEPOIS -->
    <!-- ========================================================= -->
    <div class="gallery-container">
        <h2>Conheça a Loja</h2>
        <div class="image-gallery">
            <div class="gallery-item">
                <img src="assets/images/local-1.png" alt="Cena do café pixel art">
            </div>
            <div class="gallery-item">
                <img src="assets/images/local-2.png" alt="Detalhe do balcão do café">
            </div>
            <div class="gallery-item">
                <img src="assets/images/local-3.png" alt="Mesas externas do café">
            </div>
            <div class="gallery-item">
                <img src="assets/images/local-4.png" alt="Sinal de neon do café">
            </div>
        </div>
    </div>

</body>
</html>