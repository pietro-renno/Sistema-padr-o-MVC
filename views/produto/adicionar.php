<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Novo Produto</h1>
        
        <form action="index.php?controller=produto&action=salvar" method="POST">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>
            
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" required>
            
            <button type="submit">Salvar Produto</button>
        </form>
    </div>
</body>
</html>