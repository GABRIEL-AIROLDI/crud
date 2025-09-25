<?php
// includes necessários
include_once './include/logado.php';
include_once './include/conexao.php';


$acao = $_GET['acao'] ?? '';
$id = $_GET['id'] ?? '';


switch ($acao) {
    case 'excluir':
        if (!empty($id)) {
            $sql = 'DELETE FROM producao WHERE ProducaoID = ' . intval($id);
            mysqli_query($conexao, $sql);
        }
        header('Location: lista-producao.php');
        break;

    default:
        
        header('Location: lista-producao.php');
        break;
}
?>
