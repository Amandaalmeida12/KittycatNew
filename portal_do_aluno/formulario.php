<?php
    include("header.php");
?>
<section>

  <h2 align="center" id="cadastro">Cadastro de Alunos</h2>

   <form action="./formularios/processa.php" method="POST">
     <label>Nome:<input  type="text" name="nome" id="nome" placeholder="Nome"></label><br>
     <label>Data de Nascimento:<input type="date" name="data_de_nascimento" id="data_de_nascimento" placeholder="Data de nascimento"></label><br>
     <label>Matrícula:<input type="text" name="matricula" id="Matricula" placeholder="Matrícula"></label><br>
     <label>E-mail:<input type="email" name="email" id="email" placeholder="E-mail"></label><br>
     <label>Senha:<input type="password" name="senha" id="password" placeholder="Senha"></label><br>
     <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
	
    </form>
</section>    
<?php
   include("footer.php");
?>

