<?php
// includes necessários
include_once './include/logado.php';
include_once './include/conexao.php';

// captura os dados da URL
$acao = $_GET['acao'] ?? '';
$id = $_GET['id'] ?? '';

// validação e execução
switch ($acao) {
    case 'excluir':
        if (!empty($id)) {
            $sql = 'DELETE FROM producao WHERE ProducaoID = ' . intval($id);
            mysqli_query($conexao, $sql);
        }
        header('Location: lista-producao.php');
        break;

    default:
        // ação desconhecida
        header('Location: lista-producao.php');
        break;
}
?>
