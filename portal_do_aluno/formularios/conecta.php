<?php include ("../header.php"); ?>

<?php
require_once 'conexao.php';
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = sha1($senha);


$array = array();
$array['email'] = $email;
$array['senha'] = $senha;

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND senha = :senha ");
$stmt->execute($array);
$result = $stmt->fetchAll();


if($result[0]['senha'] == $senha){
	$_SESSION['usuario'] = $email;
	header("location:../pagina_usuario.php");
	die();

} else {
	echo"<script language='javascript' type='text/javascript'>alert('Email ou senha incorretos!');window.location.href='../index.php';</script>";
}



include ("../footer.php");
?>
