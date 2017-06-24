<?php include ("../header.php"); ?>
<?php
require_once 'conexao.php';
$email = $_POST['email'];
 $senha = $_POST['senha'];
 $senha = sha1($senha);
 $ret = $pdo->query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ");
 $result = $ret->fetchAll();
 if($result[0]['senha'] == $senha){
 $_SESSION['usuario'] = $email;
   $tempolimite=10;
   $_SESSION['registro'] = time();
   $_SESSION['limite']=$tempolimite;
  header("location:../pagina_usuario.php");
  
}else{
 

}
?>
<?php 
include ("../footer.php");
?>