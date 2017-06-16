<?php
include("header.php");
?>
<?php 
require_once('./formularios/conexao.php');
?>
<?php
$data_de_nascimento='data_de_nascimento';
$ret=$pdo->query("SELECT * FROM users where  MONTH(data_de_nascimento) = MONTH(NOW()) ORDER BY data_de_nascimento ");


?>
 <h2 align="center">Aniversariantes do Mês</h2>
<table class="table">
  <thead>
    <tr>
      
      <th>Nome</th>
      <th>Data</th>
    </tr>
  </thead>
  <?php foreach ($ret as $row): ?>
	 <thead>
       <tr>
       
        <td><?= $row['nome'];?> </td>
        <td><?= date("d/m/Y" , strtotime($row['data_de_nascimento']));?></td>
       
      </tr>
     </thead>
  <?php endforeach ?>
	</table>
	
<?php
include("footer.php");
?>
