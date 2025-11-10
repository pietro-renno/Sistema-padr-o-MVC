<?php
$controller_nome = $_GET['controller'] ?? 'produto';
$action_nome = $_GET['action'] ?? 'listar';
$controller_arquivo = 'controllers/' . ucfirst($controller_nome) . 'Controller.php';

if (file_exists($controller_arquivo)) {
    require_once $controller_arquivo;
    $controller_classe = ucfirst($controller_nome) . 'Controller';

    if (class_exists($controller_classe)) {
        $controller_instancia = new $controller_classe();
        
        if (method_exists($controller_instancia, $action_nome)) {
            $controller_instancia->$action_nome();
        } else {
            echo "Erro: Ação '$action_nome' não encontrada no controller '$controller_classe'.";
        }
    } else {
        echo "Erro: Classe '$controller_classe' não encontrada no arquivo.";
    }
} else {
    echo "Erro: Controller '$controller_nome' não encontrado.";
}