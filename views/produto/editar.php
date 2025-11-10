<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Produto</h1>
        
        <form action="index.php?controller=produto&action=atualizar" method="POST">
            <!-- Campo oculto para enviar o ID do produto -->
            <input type="hidden" name="id" value="<?= htmlspecialchars($produto['id']) ?>">
            
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required>
            
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" value="<?= htmlspecialchars($produto['preco']) ?>" required>
            
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" value="<?= htmlspecialchars($produto['categoria']) ?>" required>
            
            <button type="submit">Atualizar Produto</button>
        </form>
    </div>
</body>
</html>