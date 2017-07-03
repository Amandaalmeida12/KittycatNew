<?php
require_once("./formularios/conexao.php");
$ret = $pdo->query("SELECT * FROM users");

?>
<?php
include("header.php");
?>

<section>
	<h2 align="center">Usuários Cadastrados</h2>
	<div class="table-responsive">          
		<table class="table">
			<thead>
				<tr>
					<th width="5%" height="5%">Nome</th>
					<th width="5%" height="5%">Data de Nascimento</th>
					<th width="5%" height="5%">Email</th>
					
				</tr>
			</thead>
			<?php foreach ($ret as $row): ?>
				<tbody>
					<tr class="nada">
						<td width="5%" height="5%"><?= $row["nome"] ?></td>
						<td width="5%" height="5%"><?= date("d/m/Y" , strtotime($row['data_de_nascimento']));?></td>
						<td width="5%" height="5%"><?= $row["email"] ?></td>
						
					</tr>
					
				<?php endforeach ?>
				<tbody>
				</table>
			</section>
			<?php
			include("footer.php");
			?>