<html>
<?php

session_start();
if (isset($_SESSION["usuario"])){
  if ((time()-$_SESSION['timeout'] >900)) {
    header("location:index.php");
    
  }else{

    $_SESSION['timeout']=time(); ?>
    
    <div class="nome_user"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION["usuario"];?></div>
 <div class="deslogar" ><a href="./formularios/deslogar.php" class ="link1">Sair</a></div>
  <?php

  }

} 


 ?>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="./css/forms.css">
  <link rel="stylesheet" type="text/css" href="../css/forms.css">
  <link rel="stylesheet" type="text/css" href="./css/css_balls.css">
</head>
<body>

<div class="container">
   <ul>
        <li>IFPE</li>
    <h1 class ="portal" ><a href="http://www.ifpe.edu.br" class ="link1">Instituto Federal  de Pernambuco</a></h1>
    <li>Campus Igarassu</li>
   </ul>
  </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      
     <li><a href='index.php'><i class="fa fa-home" aria-hidden="true" "></i> Inicio</a></li>
     <li><a href='../tutoriais.php'><i class="fa fa-pencil" aria-hidden="true"></i> Tutoriais</a></li>
     <li><a href='../wiki.php'><i class="fa fa-wordpress" aria-hidden="true"></i> Mediawiki</a></li>
     <li><a href='../usuarios_cadastrados.php'><i class="fa fa-user" aria-hidden="true"></i> Usuários Cadastrados</a></li>
     <li><a href='../aniversariantes_do_mes.php'><i class="fa fa-user" aria-hidden="true"></i> Aniversariantes do Mês</a></li>
    </ul>
  </div>
</nav>
