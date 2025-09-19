<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Categorias</h1>
        <a href="./salvar-categorias.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
          $sql = 'SELECT * FROM categorias';
          $resultado = mysqli_query($conexao, $sql);
          if (mysqli_num_rows($resultado) > 0) {
              while ($row = mysqli_fetch_assoc($resultado)) {
                  echo "<tr>";
                  echo "<td>" . $row['CategoriaID'] . "</td>";
                  echo "<td>" . $row['Nome'] . "</td>";
                  echo "<td>
                          <a href='salvar-cartegoria.php?id=" . $row['CategoriaID'] . "' class='btn btn-edit'>Editar</a>
                             <a href='./action/categorias.php?acao=excluir&id=" . $row['CategoriaID'] . "' class='btn btn-delete'>Excluir</a>
                        </td>";
                  echo "</tr>";
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