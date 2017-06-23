<?php
include("header.php");
?>
<?php 
require_once('./formularios/conexao.php');
?>
<?php
$data_de_nascimento='data_de_nascimento';
$ret=$pdo->query("SELECT * FROM users where MONTH(data_de_nascimento) = MONTH(NOW())");


?>
 <h2 align="center">Usuários Cadastrados</h2>
	<table border="1">
	<tr>
		<th width="5%" height="5%">Nome</th>
		<th width="5%" height="5%">Aniversariante</th>
		
		
	</tr>
		<?php foreach ($ret as $row): ?>
			<tr class="nada">

				 <td width="5%" height="5%"><?= $row["nome"]; ?></td>
				 <td width="5%" height="5%"><?= $row["data_de_nascimento"]; ?></td>
				 
			</tr>
           
        <?php endforeach ?>
	</table>
<?php
include("footer.php");
?>
