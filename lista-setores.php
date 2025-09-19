<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
<main>
  <div class="container">
    <h1>Lista de Setores</h1>
    <a href="./salvar-setores.php" class="btn btn-add">Incluir</a>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Andar</th>
          <th>Cor</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = 'SELECT * FROM setor';
        $resultado = mysqli_query($conexao, $sql);

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['SetorID'] . "</td>";
            echo "<td>" . $row['Nome'] . "</td>";
            echo "<td>" . $row["Andar"] . "</td>";
            echo "<td>" . $row["Cor"] . "</td>";
            echo "<td>
                    <a href='salvar-setor.php?id=" . $row['SetorID'] . "' class='btn btn-edit'>Editar</a>
                    <a href='action/setores.php?acao=excluir&id=" . $row['SetorID'] . "' class='btn btn-delete' onclick=\"return confirm('Deseja realmente excluir este setor?')\">Excluir</a>
                  </td>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</main>

<?php 
include_once './include/footer.php';
?>
