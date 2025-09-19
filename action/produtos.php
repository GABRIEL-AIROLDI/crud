<?php

include_once '../include/logado.php';
include_once '../include/conexao.php';


$acao = $_GET['acao'] ?? '';
$id = $_GET['id'] ?? '';

// executa a ação
switch ($acao) {
    case 'excluir':
        if (!empty($id)) {
            $id = intval($id);
            $sql = 'DELETE FROM produtos WHERE ProdutoID = ' . $id;
            mysqli_query($conexao, $sql);
        }
        header('Location: ../lista-produtos.php'); 
        break;

    default:
        header('Location: ../lista-produtos.php');
        break;
}
?>
