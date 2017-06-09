 <?php
include("../header.php");
?>
<div class="deslogar" >
<a href="deslogar.php" class ="link1">Sair</a>
</div>
<?php 
require_once 'conexao.php';

$email = $_POST['email'];
 $ret = $pdo->query("SELECT * FROM users WHERE email = '$email' ");
 $result = $ret->fetchAll();
 if($result[0]['senha'] == $senha){
        $_SESSION['usuario'] = $email;
       echo $email;
   }
   ?>

<?php
   include("../footer.php");
?>