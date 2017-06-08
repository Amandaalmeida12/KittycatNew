<?php

   require_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $senha = sha1($senha);

    
    $ret = $pdo->query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha' ");
    $result = $ret->fetchAll();
    if($result[0]['senha'] == $senha){
        $_SESSION['usuario'] = $email;
        echo"<script language='javascript' type='text/javascript'>alert('Bem-Vindo!');window.location.href='logado.php';</script>";
        die();

    } else {
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../index.php';</script>";
    }

?>