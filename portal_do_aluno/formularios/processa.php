<link rel="stylesheet" type="text/css" href="style1.css">
<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$matricula = $_POST['matricula']; 
$email = $_POST['email']; 
$senha = $_POST['senha'];

$senha = sha1($senha);

$ret = $pdo->query("INSERT INTO users(nome,data_de_nascimento,matricula,email,senha) VALUES ('$nome','$data_de_nascimento','$matricula','$email','$senha')");
header("location:../formulario.php");

?>