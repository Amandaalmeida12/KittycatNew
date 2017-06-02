<?php

    $dbName = 'portal_aluno_db';
    $host = 'localhost';
    $user = 'root';

    $dsn = "mysql:dbname=$dbName;host=$host";

    $pdo = new PDO($dsn, $user);

    $matricula = $_POST['matricula'];
    
    $ret = $pdo->query("SELECT * FROM users WHERE matricula = '$matricula' ");
    $result = $ret->fetchAll();
    if (count($result) > 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Bem-Vindo!');window.location.href='../pagina_usuario.php';</script>";
        die();

    } else {
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../index.php';</script>";
    }

?>