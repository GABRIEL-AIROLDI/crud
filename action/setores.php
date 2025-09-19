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
            $sql = 'DELETE FROM setor WHERE SetorID = ' . $id;
            mysqli_query($conexao, $sql);
        }
        header('Location: ../lista-setores.php'); 
        break;

    default:
        header('Location: ../lista-setores.php');
        break;
}
?>
