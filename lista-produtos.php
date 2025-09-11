<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<main>

  <div class="container">
      <h1>Lista de Produtos</h1>
      <a href="./salvar-produtos.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $sql = 'SELECT c.Nome AS CategoriaNome, pr.ProdutoID, pr.Nome, pr.Preco
          FROM produtos AS pr
          INNER JOIN categorias AS c ON c.CategoriaID = pr.ProdutoID';  
 
          $retorno = mysqli_query($conexao, $sql);
 
          while($linha = mysqli_fetch_assoc($retorno) ){
            echo '
            <tr>
            <td>'.$linha['ProdutoID'].'</td>
            <td>'.$linha['Nome'].'</td>
            <td>'.$linha['CategoriaNome'].'</td>
            <td>'.$linha['Preco'].'</td>
            <td>
              <a href="salvar-cargos.php?id=" class="btn btn-edit">Editar</a>
              <a href="#" class="btn btn-delete">Excluir</a>
            </td>
            </tr>';
          }
        ?>
 

        </tbody>
      </table>
    </div>

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>