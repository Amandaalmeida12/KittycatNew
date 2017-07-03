<?php include("../header.php");?>

<?php 

require_once 'conexao.php';

@session_start();

if (isset($_SESSION['usuario'])) {
	

	$loggedUser = $_SESSION['usuario'];

	$array = array($loggedUser);

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? ");
	$stmt->execute($array);

	$result = $stmt->fetchAll(); 
	header("location:conecta.php");


}
?> 

<?php include("../footer.php");?>

