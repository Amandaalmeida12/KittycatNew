 <?php
include("../header.php");
?>
<a href="deslogar.php">Log Out</a>

<?php 
require_once 'conexao.php';

@session_start();

if (isset($_SESSION['usuario'])) {
	

$loggedUser = $_SESSION['usuario'];


$logado = $pdo->query("SELECT * FROM users WHERE email = '$loggedUser'" );
$fetch = $ler->fetchAll();

}

 ?>
<?php
   include("../footer.php");
?>