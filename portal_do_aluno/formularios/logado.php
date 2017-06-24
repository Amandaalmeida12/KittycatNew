


<?php include("../header.php");?>
<?php
require_once 'conexao.php';

@session_start();

if (isset($_SESSION['usuario']) && (time() - $_SESSION['usuario'] > 1000)) {
	session_unset();    
    session_destroy(); 

$loggedUser = $_SESSION['usuario'];
 
$logado = $pdo->query("SELECT * FROM users WHERE email = '$loggedUser'" );
$fetch = $logado->fetchAll(); 

header("location:conecta.php");


}
$_SESSION['usuario'] = time();
?>
<?php include("../footer.php");?>

