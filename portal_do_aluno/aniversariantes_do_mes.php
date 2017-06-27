  <?php
include("header.php");
include 'calendario.php';
include './formularios/conexao.php';
$info=array(
	'tabela '=>'users',
	'data_de_nascimento'=>'data_de_nascimento',
	'nome'=>'nome'
);
?>
<section>
	<div class="calendario">
		<?php 
		$eventos=montaEventos($info);
		montaCalendario($eventos); 
	?>
	</div>
</section>
  <?php
include("footer.php");

?>