<?php
session_start();

include "../src/header.php";

$produtos = new produtos;

if(!isset($_SESSION["cesta"])){
    $_SESSION['cesta'] = array();
}
$dados = json_decode(file_get_contents('php://input'), true);

if (isset($_POST['retirar'])) {
    foreach ($_SESSION['cesta'] as $key => $valor) {
        if ($valor['id'] == $dados['id']) {
            if($_SESSION['cesta'][$key]['qtd'] > 1){
                $_SESSION['cesta'][$key]['qtd'] = -1;
            }else{
                unset($_SESSION['cesta'][$key]);
            }
        }
    }
}else if(isset($_POST['pegar_qtd'])) {
    $dados = ["qtd" => count($_SESSION['cesta'])];
}else if(isset($_POST['pegar'])) {
    $dados = $produtos->buscar();
}else if(isset($_POST['adicionar'])) {
    if(isset($_SESSION['cesta'][$dados['id']])){
        $_SESSION['cesta'][$dados['id']]['qtd']++;
    }else{
        $_SESSION['cesta'][$dados['id']] = [
            "qtd" => 1,
            "nome" => $produtos->buscar(['id' => $dados['id']])['nome']
        ];
    }
}
echo json_encode($dados);
?>