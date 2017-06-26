  <?php
include("header.php");
include 'calendario.php';
include './formularios/conexao.php';
$info=array(
	'tabela '=>'users'
,
	'data_de_nascimento'=>'data_de_nascimento',
	'nome'=>'nome'


	);

?>
<div class="calendario">
	<?php 
	$eventos=montaEventos($info);
	montaCalendario($eventos); 
	?>
</div>
  <?php
include("footer.php");

?>