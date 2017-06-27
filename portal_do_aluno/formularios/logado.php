


<?php include("../header.php");?>
<?php
require_once 'conexao.php';

@session_start();

if (isset($_SESSION['usuario'])) {
	

$loggedUser = $_SESSION['usuario'];
 
$logado = $pdo->query("SELECT * FROM users WHERE email = '$loggedUser'" );
$fetch = $logado->fetchAll(); 

header("location:conecta.php");


}
?>
<?php include("../footer.php");?>

