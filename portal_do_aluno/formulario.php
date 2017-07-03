<?php
include("header.php");
?>

<section>

   <br>
   <legend id="cadastro">Cadastro de Alunos</legend>
   <br>
   <div class="cadastrar">
       <form action="./formularios/processa.php" method="POST">

        <label id="legenda">Nome:</label>
        <div class="iconInput">
         <i class="fa fa-user-circle" aria-hidden="true"></i>
         <input  type="text" name="nome" id="nome"><br>
     </div>
     <br>

     <label id="legenda">Data de Nascimento:</label>
     <div class="iconInput">
         <i class="fa fa-calendar" aria-hidden="true"> </i>
         <input type="date" name="data_de_nascimento" id="data_de_nascimento"><br>
     </div>
     <br>

     <label id="legenda">Matrícula:</label>
     <div class="iconInput">
         <i class="fa fa-keyboard-o" aria-hidden="true"></i>
         <input type="text" name="matricula" id="c_matricula"><br>
     </div>
     <br>

     <label id="legenda">E-mail:</label>
     <div class="iconInput">
         <i class="fa fa-envelope" aria-hidden="true"></i>
         <input type="email" name="email" id="email"><br>
     </div>
     <br>

     <label id="legenda">Senha:</label>
     <div class="iconInput">
         <i class="fa fa-unlock-alt" aria-hidden="true"></i>
         <input type="password" name="senha" id="password"><br>
         <br>
         <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar">
     </div>
 </form>
</div>
</section>    
<?php
include("footer.php");
?>

