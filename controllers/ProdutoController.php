<?php
require_once 'models/Produto.php';
require_once 'conexao.php';

class ProdutoController {

    public function listar() {
        global $pdo;
        $produtoModel = new Produto($pdo);
        $produtos = $produtoModel->listar();
        require_once 'views/produto/listar.php';
    }

    public function adicionar() {
        require_once 'views/produto/adicionar.php';
    }
    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            global $pdo;
            $produtoModel = new Produto($pdo);
            
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $categoria = $_POST['categoria'];
            if ($produtoModel->salvar($nome, $preco, $categoria)) {
                header('Location: index.php?controller=produto&action=listar');
                exit();
            } else {
                echo "Erro ao salvar o produto.";
            }
        }
    }
public function excluir() {
    $id = $_GET['id'] ?? null;

    if ($id) {
        global $pdo;
        $produtoModel = new Produto($pdo);

        if ($produtoModel->excluir($id)) {
            header('Location: index.php?controller=produto&action=listar');
            exit();
        } else {
            echo "Erro ao excluir o produto.";
        }
    } else {
        echo "ID do produto não especificado.";
        exit();
    }
}
public function editar() {
    $id = $_GET['id'] ?? null;
    if (!$id) {
        echo "ID não fornecido.";
        exit;
    }

    global $pdo;
    $produtoModel = new Produto($pdo);
    $produto = $produtoModel->buscarPorId($id);
    require_once 'views/produto/editar.php';
}
public function atualizar() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        global $pdo;
        $produtoModel = new Produto($pdo);

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $categoria = $_POST['categoria'];

        if ($produtoModel->atualizar($id, $nome, $preco, $categoria)) {
            header('Location: index.php?controller=produto&action=listar');
            exit();
        } else {
            echo "Erro ao atualizar o produto.";
        }
    }
}
}