<?php
    include("header.php");
?>

<section>

  <h2 align="center" id="cadastro">Cadastro de Alunos</h2>

<div class="cadastar">
   <form action="./formularios/processa.php" method="POST">
     <div class="iconInput">
     <i class="fa fa-user-circle" aria-hidden="true"></i>
     <label>Nome:<input  type="text" name="nome" id="nome"  placeholder="Nome"></label><br>
     </div>
     <br>
     <div class="iconInput">
     <i class="fa fa-calendar" aria-hidden="true" placeholder="Data de Nascimento"></i>
     <label>Data de Nascimento<input type="date" name="data_de_nascimento" id="data_de_nascimento"  placeholder="Data de Nascimento"></label><br>
     </div>
     <br>
     <div class="iconInput">
     <i class="fa fa-keyboard-o" aria-hidden="true"></i>
     <label>Matrícula <br><input type="text" name="matricula" id="Matricula"  placeholder="Matricula"></label><br>
     </div>
     <br>
     <div class="iconInput">
     <i class="fa fa-envelope" aria-hidden="true"></i>
     <label>Email:<input type="email" name="email" id="email"  placeholder="Email"></label><br>
     </div>
     <div class="iconInput">
     <i class="fa fa-unlock-alt" aria-hidden="true"></i>
     <label>Senha<input type="password" name="senha" id="password" placeholder="senha"></label><br>
     <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
	  </div>
    </form>
</div>
</section>    
<?php
   include("footer.php");
?>

