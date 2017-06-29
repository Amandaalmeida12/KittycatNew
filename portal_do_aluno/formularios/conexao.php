<?php 
 
 $dbname = "portal_aluno_db";
 $port = "3306";
 $host = "localhost";
 $username = "root";
 $password = "";
 
 $dns = "mysql:dbname=$dbname;port=$port;host=$host";
 
 $pdo = new PDO($dns, $username, $password);
 
  ?>