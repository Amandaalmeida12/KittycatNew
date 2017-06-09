 <?php
include("../header.php");
?>
<?php

   require_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $senha = sha1($senha);

    
    $ret = $pdo->query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ");
    $result = $ret->fetchAll();
    ?>
    <?php if($result[0]['senha'] == $senha){
        $_SESSION['usuario'] = $email;?>
        <div class="nome_user"><i class="fa fa-user" aria-hidden="true"></i><?php echo $email;?></div>
        <div class="deslogar" ><a href="deslogar.php" class ="link1">Sair</a></div>

   <?php  } else {
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../index.php';</script>";
    }

?>
<?php
   include("../footer.php");
?>