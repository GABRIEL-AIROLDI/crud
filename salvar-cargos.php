<?php
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
<main>
<?php
// criar as variaveis vazias
$id = '';
$nome = '';
$tetoSalarial = '';
 
// valida se foi passado o ID na url
if ( isset($_GET['id']) ) {
  // captura o ID da url
  $id = $_GET['id'];
  // monta o SQL
  $sql = "SELECT * FROM cargos WHERE CargoID = $id";
  // executar o sql
  $resultado = mysqli_query($conexao,$sql);
  // converter os dados em array
  $dados = mysqli_fetch_assoc($resultado);
  // preenche os dados das variaveis
  $nome = $dados['Nome'];
  $tetoSalarial = $dados['TetoSalarial'];
}
?>
 
       <!-- Telas CRUD -->
   <div id="cargos" class="tela">
    <form class="crud-form" action="./action/cargos.php" method="post">
      <h2>Cadastro de Cargos</h2>
      <input type="text" placeholder="Nome do Cargo"  value="<?php echo $nome;?>">
      <input type="number" placeholder="Teto Salarial" value="<?php echo $tetoSalarial;?>">
      <button type="submit">Salvar</button>
    </form>
  </div>
 
 
 
 
  <?php
  // include dos arquivox
  include_once './include/footer.php';
  ?>
</main>
 