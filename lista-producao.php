<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Clientes</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = 'SELECT  pr.ProducaoID, p.Nome AS ProdutoNome, c.Nome AS ClienteNome,pr.ProdutoID, pr.DataProducao
          FROM producao AS pr
          INNER JOIN produtos AS p ON p.ProdutoID = pr.ProdutoID
          INNER JOIN clientes AS c ON c.clienteID = pr.ClienteID';
          $resultado = mysqli_query($conexao, $sql);
          if (mysqli_num_rows($resultado) > 0) {
              while ($row = mysqli_fetch_assoc($resultado)) {
                  echo '<tr>';
                  echo '<td>' . $row['ProducaoID'] . '</td>';
                  echo '<td>' . $row['ProdutoNome'] . '</td>';
                  echo '<td>' . $row['ClienteNome'] . '</td>';
                  echo '<td>' . $row['DataProducao'] . '</td>';
                  echo '<td>
                  <a href="salvar-producao.php?id=' . $row['ProducaoID'] . '" class="btn btn-edit">Editar</a>
                  <a href="acoes-producao.php?acao=excluir&id=' . $row['ProducaoID'] . '" class="btn btn-delete" onclick="return confirm(\'Deseja realmente excluir esta produção?\')">Excluir</a>
                     </td>';
                  echo '</tr>';
              }
          }
          ?>
            
          </tbody>
        </table>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>