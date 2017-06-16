<?php 

$dbname = "portal_aluno_db";

$host = "localhost";
$username = "root";
$password = "";

$dns = "mysql:dbname=$dbname;host=$host";

$pdo = new PDO($dns, $username, $password);

 ?>