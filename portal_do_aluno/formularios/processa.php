<link rel="stylesheet" type="text/css" href="style1.css">
<?php

require_once 'conexao.php';

$nome = $_POST['nome'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$matricula = $_POST['matricula']; 
$email = $_POST['email']; 
$senha = $_POST['senha'];

$senha = sha1($senha);

$array = array($nome, $data_de_nascimento, $matricula, $email, $senha);

$stmt = $pdo->prepare("INSERT INTO users(nome,data_de_nascimento,matricula,email,senha) VALUES (?, ?, ?, ?, ?)");

$stmt->execute($array);
header("location:../formulario.php");

?>