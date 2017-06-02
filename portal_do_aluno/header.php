<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="./css/forms.css">
<link rel="stylesheet" type="text/css" href="../css/forms.css">
<link rel="stylesheet" type="text/css" href="./css/css_balls.css">
<link rel="stylesheet" type="text/css" href="../css/css_balls.css">
<link rel="stylesheet" type="text/css" href="./css/panels.css">
<link rel="stylesheet" type="text/css" href="../css/panels.css">
<script src="./css/panels.js"></script>
<script src="../css/panels.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" href="./font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="../font-awesome/css/font-awesome.css">


</head>
<body>
<header >
 <div class= "cabecalho">
  <ul>
   <li>IFPE</li>
    <h1 class ="portal" ><a href="http://www.ifpe.edu.br" class ="link1">Instituto Federal  de Pernambuco</a></h1>
    <li>Campus Igarassu</li>
  </ul>
  <form  class="formulario" method="POST" action="./formularios/conecta.php" >
    <input type="text" name="matricula" id="MATRICULA" placeholder="Matrícula"><br>
   
    <input type="submit" value="Entrar" id="entrar"  name="entrar"><br>
    <a href="formulario.php"  class ="link1">Cadastre-se</a>
  </form>
 </div> 
         
</header>
            
<div id="opcoes">

 <ul>
  <li><a href='index.php'><i class="fa fa-home" aria-hidden="true" "></i>Inicio</a></li>
  <li><a href='tutoriais.php'><i class="fa fa-pencil" aria-hidden="true"></i>Tutoriais</a></li>
  <li><a href='wiki.php'><i class="fa fa-wordpress" aria-hidden="true"></i>Mediawiki</a></li>
  <li><a href='usuarios_cadastrados.php'><i class="fa fa-user" aria-hidden="true"></i>Usuários Cadastrados</a></li>
  
 </ul>
</div>

