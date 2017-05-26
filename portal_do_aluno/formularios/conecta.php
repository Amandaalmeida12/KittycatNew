<?php
$servidor= "localhost";
$usuario="root";
$senha="";
$dbname="cadastro";

$conexao= mysqli_connect($servidor,$usuario,$senha,$dbname);
if (! $conexao) {

	die("Falha na conexão :" .mysqli_connect_error());
	# code...
}else{
	
}





?>