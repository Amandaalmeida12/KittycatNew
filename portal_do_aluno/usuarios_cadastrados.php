<?php
$dbName = 'cadastro';
 $host = 'localhost';
 $user = 'root';
 $dsn = "mysql:dbname=$dbName;host=$host";
 $pdo = new PDO($dsn, $user);
 $ret = $pdo->query("SELECT * FROM user");

?>
<?php
include("header.php");
?>
        
<section>
 <h2 align="center">Usuários Cadastrados</h2>
	<table border="1">
	<tr>
		<th width="5%" height="5%">Nome</th>
		<th width="5%" height="5%">Data de Nascimento</th>
	    <th width="5%" height="5%">Email</th>
		
	</tr>
		<?php foreach ($ret as $row): ?>
			<tr class="nada">
				 <td width="5%" height="5%"><?= $row["nome"] ?></td>
				 <td width="5%" height="5%"><?= $row["data_de_nascimento"] ?></td>
				 <td width="5%" height="5%"><?= $row["email"] ?></td>
				 
			</tr>
           
        <?php endforeach ?>
	</table>
</section>
 <?php
    include("footer.php");
 ?>