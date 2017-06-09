 <?php
include("../header.php");
?>
<div class="deslogar" >
<a href="deslogar.php" class ="link1">Sair</a>
</div>
<?php 
require_once 'conexao.php';

@session_start();

if (isset($_SESSION['usuario'])) {
	

$loggedUser = $_SESSION['usuario'];


$logado = $pdo->query("SELECT * FROM users WHERE email = '$loggedUser'" );
$fetch = $logado->fetchAll();

}

 ?>
<?php
   include("../footer.php");
?>