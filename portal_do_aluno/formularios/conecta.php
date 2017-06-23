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
  $_SESSION['timeout']=time(); ?>
  <div class="nome_user"><i class="fa fa-user" aria-hidden="true"></i><?php echo $email;?></div>
 <div class="deslogar" ><a href="deslogar.php" class ="link1">Sair</a></div>
<?php
}else{
 

}
?>
<?php 
include ("../footer.php");
?>