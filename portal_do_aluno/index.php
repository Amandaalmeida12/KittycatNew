<?php
include("header.php");
?>
<script type="text/javascript">
   $(document).ready(function(){
         $('#matricula').click(function(event){
            event.preventDefault();
            $("#div1").hide("slow");
           
         })
         $('#trancamento').click(function(event){
            event.preventDefault();
            $("#div2").hide("slow");
           
         })
         $('#transferencia').click(function(event){
            event.preventDefault();
            $("#div3").hide("slow");
           
         })
         $('#jubilamento').click(function(event){
            event.preventDefault();
            $("#div4").hide("slow");
           
         })
          $('#faltas').click(function(event){
            event.preventDefault();
            $("#div5").hide("slow");
           
         })
          $('#notas').click(function(event){
            event.preventDefault();
            $("#div6").hide("slow");
           
         })
           $('#avaliacoes').click(function(event){
            event.preventDefault();
            $("#div7").hide("slow");
           
         })
      });
</script>
        
      <section>
         <h1>Manual do Estudante</h1>
      

<button  id="bt7">Avaliações</button>
<button   id="bt1">Matrícula</button>
<button  id="bt8">Dúvidas</button>
<button  id="bt10">Frequência</button>
<button  id="bt6">Notas</button>
<button  id="bt2">Trancamento</button>
<button  id="bt5">Faltas</button>
<button  id="bt4">Jubilamento</button>
<button  id="bt3">Transferência</button>
<button  id="bt9">Horários</button>
<br><br>
<div id="div1" >
<span id="matricula" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>
<h3 a name="matricula"> Matrícula</h3>
<p class="paragrafos">O período da matrícula dos candidatos classificados em processo de seleção será publicado em edital especifico e a matrícula  será efetuada pela codernação do registro acadêmico  dos campi equivalentes.Os candidatos classificados em processo de seleção serão matrículados  obrigatoriamente em todos os componentes curriculares do módulo  e programado para o 1° período  letivo.</p>
</div>
<div id="div2">
<span  id="trancamento" a href="#"><i class="fa fa-times" aria-hidden="true"></i></span>
   <h3 a name="trancamento">Trancamento de Matrícula</h3>
   <p class="paragrafo">O estudante regulamente matrículado no curso do IFPE será concedido o trancamento de matrícula do curso quando solicitado através de requerimento dirigido a Direção de Ensino.O trancamento  de matrícula  deverá ser efetivado no período  definido  no calendário acadêmico de cada campus  , exceto  em casos excepcionais devidamente comprovados , a serem autorizados pela Direção de Ensino.O transcamentos de matrícula do curso ou de componente  curricular do estudante menor de idade  só poderá ser realizado por seu responsável legal.O prazo concedido para o trancamento do curso  do IFPE de forma contínua ou alternada , não poderá ultrapassar 2(dois)anos.</p>
         
</div>
<div id="div3">
<span id="transferencia" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>

<h3 a name="transferencia">Transfêrencia de Estudantes</h3>
   <p class="paragrafos"> O IFPE expedirá a transferência  do estudante para outras instituições de ensino,mediante requerimento,em qualquer época do ano .A solicitação de transfrência deverá ser feita pelo estudante  maior de idade  ou pelo representante  legal do estudante menor de idade.</p>
         
</div>
<div id="div4">
 <span id="jubilamento" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>

   <h3 a name="jubilamento">Da Integralização  ao Jubilamento</h3>
      <p class="paragrafos"> O prazo minímo de Integralização  será estabelecido  no projeto pedagógico do curso  e o prazo máximo correspondente a 5(cinco)anos, conforme legislação vigente.<br> O jubilamento  é o desligamento do estudante da Instituição por meio de recusaa da matrícula acadêmica do estudante no curso ao qual será vinculado.O jubilamento será efetivado , quando o esgotado o prazi máximo de integralização do curso , conforme estabelecido pela legislação pertinentte e nos termos desta Organização Acadêmica.</p>
        
</div>
<div id="div5">
<span id="faltas" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>
    <h3  a name="faltas">Da Ausência Justificada</h3>
         <p class="paragrafos">Será permitida ao estudante requerer, por escrito no Registro Acadêmico e em um formulário próprio , justificativa de ausência em atividade acadêmca no prazo de 05(cinco)dias úteis após a data do afastamento desde que fique comprovado o impedimento do estudante por um dos seguintes motivos:</p>
         <ol class="lista">
            <li>Serviço militar;</li>
            <li>Flecimento de parente em primeiro e segundo grau;</li>
            <li>Licença gestação;</li>
            <li>Doença</li>
            <li>Internamento hospitalar;</li>
            <li>Acompanhamento em internamento hospitalar do filho(a),cônjugue e genitor(a);</li>
            <li>Convocação judicial;</li>
            <li>Força maior.</li>
         </ol>
</div>
<div id="div6">
<span id="notas" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>
   <h3 a name="notas">Da Aprovação</h3>
        <p class="paragrafos"> Estará bem aprovado no curso ,o estudante que obtiver frequência igual ou superior a 75%  em cada componente  curricular e média 6,0 (seis) em cada componente curricular que acompanha  a matriz do curso.</p>
         
</div>
<div id="div7">
<span  id="avaliacoes" a href="#" ><i class="fa fa-times" aria-hidden="true"></i></span>
   <h3 a name="exames_finais">Exames Finais</h3>
      <p class="paragrafos"> Terá o direito de realizar o exame final o estudante  que obtiver , no mínimo  média 2,0(dois) e frequência igual ou superior a 75%  no cômputo de carga horária  total dos componentes curriculares.Será considerado aprovado , após os exames finais . o estudante  cuja média aritmética final for igual ou superior a 6,0(seis).</p>
         <img src="http://i63.tinypic.com/295u3dg.jpg" align="center">
</div>
         <div class="horarios">
            <h3 a name="horarios" class="horarios" >Horários</h3>
         </div>
         <h4>INFORMÁTICA 1°-TARDE-SALA 01</h4>
         <br> 
         <br>
         <br>
         <table  class="disciplinas" border="1">
            <tr>
               <th>HORÁRIO</th>
               <th>SEGUNDA</th>
               <th>TERÇA</th>
               <th>QUARTA</th>
               <th>QUINTA</th>
               <th>SEXTA</th>
            </tr>
            <tr>
               <td id="celula1">12:50h-13:35h</td>
               <td id="celula1"><a href="ementas/seguranca.php"  class="link2">Segurança do Trabalho</a></td>
               <td id="celula1"><a href="ementas/ingles.php"  class="link2">Inglês Instrumental</a></td>
               <td id="celula1"><a href="ementas/fundamentos.php"  class="link2">Fundamentos da Informática</a></td>
               <td id="celula1"> </td>
               <td id="celula1"><a href="ementas/logica.php" class="link2">Lógica de Programação e <br>Estrutura de dados</a></td>
            </tr>
            <tr>
               <td id="celula1">13:35h-14:20h</td>
               <td id="celula1"><a href="ementas/seguranca.php" class="link2">Segurança do Trabalho</a></td>
               <td id="celula1"><a href="ementas/ingles.php" class="link2">Inglês Instrumental</a></td>
               <td id="celula1"><a href="ementas/fundamentos.php" class="link2">Fundamentos da Informática</a></td>
               <td id="celula1"><a href="ementas/matematica.php" class="link2">Matemática Aplicada</a></td>
               <td id="celula1"><a href="ementas/logica.php" class="link2">Lógica de Programação e <br>Estrutura de dados</a></td>
            </tr>
            <tr>
               <td id="celula1">14:20h-15:05h</td>
               <td id="celula1"><a href="ementas/redes.php" class="link2"> Redes de Computadores</a></td>
               <td id="celula1"><a href="ementas/matematica.php" class="link2">Matemática Aplicada</a></td>
               <td id="celula1"><a href="ementas/fundamentos.php" class="link2">Fundamentos da Informática</a></td>
               <td id="celula1"> <a href="ementas/matematica.php" class="link2">Matemática Aplicada</a></td>
               <td id="celula1"><a href="ementas/logica.php" class="link2">Lógica de Programação e <br>Estrutura de dados</a></td>
            </tr>
            <tr>
               <td id="celula1">15:25h-16:10h</td>
               <td id="celula1"><a href="ementas/redes.php" class="link2"> Redes de Computadores</a></td>
               <td id="celula1">Matemática-PROIFPE</td>
               <td id="celula1"><a href="ementas/redes.php" class="link2"> Redes de Computadores</a></td>
               <td id="celula1"><a href="ementas/portugues.php" class="link2">Português Instrumental</a> </td>
               <td id="celula1"></td>
            </tr>
            <tr>
               <td id="celula1">16:10h-16:55h</td>
               <td id="celula1"></td>
               <td id="celula1"><a href="ementas/logica.php" class="link2">Lógica de Programação e <br>Estrutura de dados</a></td>
               <td id="celula1"><a href="ementas/redes.php" class="link2"> Redes de Computadores</a></td>
               <td id="celula1"><a href="ementas/portugues.php" class="link2">Português Instrumental</a> </td>
               <td id="celula1"><a href="ementas/matematica.php" class="link2">Matemática Aplicada</a></td>
            </tr>
            <tr>
               <td id="celula1">16:55h-17:40h</td>
               <td id="celula1"></td>
               <td id="celula1"><a href="ementas/logica.php" class="link2">Lógica de Programação e <br>Estrutura de dados</a></td>
               <td id="celula1"></td>
               <td id="celula1"> </td>
               <td id="celula1"><a href="ementas/matematica.php" class="link2">Matemática Aplicada</a></td>
            </tr>
         </table>
         <br> 
         <br>
         <br>
         <h4>INFORMÁTICA 2°-MANHÃ-SALA 01</h4>
         <br>
         <br> 
         <br>
         <table  class="disciplinas" border="1">
            <tr>
               <th>HORÁRIO</th>
               <th>SEGUNDA</th>
               <th>TERÇA</th>
               <th>QUARTA</th>
               <th>QUINTA</th>
               <th>SEXTA</th>
            </tr>
            <tr>
               <td id="celula1">07:00h-07:45h</td>
               <td id="celula1"></td>
               <td id="celula1"></td>
               <td id="celula1"></td>
               <td id="celula1"></td>
               <td id="celula1"></td>
            </tr>
            <tr>
               <td id="celula1">07:45h-08:30h</td>
               <td id="celula1"></td>
               <td id="celula1"><a href="ementas/desenvolvimento1.php"  class="link2">Desenvolvimento Web I</a></td>
               <td id="celula1"><a href="ementas/segurancasistemas.php" class="link2">Segurança de Sistemas <br>para Internet</a></td>
               <td id="celula1"><a href="ementas/poo.php" class="link2" >Programação Orientada<br>à Objetos</a> </td>
               <td id="celula1"></td>
            </tr>
            <tr>
               <td id="celula1">08:30h-09:15h</td>
               <td id="celula1"><a href="ementas/desenvolvimento1.php"  class="link2">Desenvolvimento Web I</a></td>
               <td id="celula1"><a href="ementas/desenvolvimento1.php" class="link2">Desenvolvimento Web I</a></td>
               <td id="celula1"><a href= "ementas/segurancasistemas.php" class="link2">Segurança de Sistemas <br>para Internet</a></td>
               <td id="celula1"><a href="ementas/poo.php" class="link2" > Programação Orientada<br>à Objetos</a></td>
               <td id="celula1"><a href="ementas/projeto1.php"  class="link2">Projeto e Prática I</a></td>
            </tr>
            <tr>
               <td id="celula1">09:15h-10:00h</td>
               <td id="celula1"><a href="ementas/desenvolvimento1.php" class="link2" >Desenvolvimento Web I</a></td>
               <td id="celula1"><a href="ementas/sistemas.php" class="link2" >Sistemas Operacionais</a></td>
               <td id="celula1"><a href="ementas/segurancasistemas.php"  class="link2">Segurança de Sistemas <br>para Internet</a></td>
               <td id="celula1"><a href="ementas/poo.php" class="link2" >Programação Orientada<br>à Objetos</a></td>
               <td id="celula1"><a href= "ementas/projeto1.php" class="link2">Projeto e Prática I</a></td>
            </tr>
            <tr>
               <td id="celula1">10:20-11:05h</td>
               <td id="celula1"><a href="ementas/banco.php" class="link2">Banco de Dados</a></td>
               <td id="celula1"><a href="ementas/sistemas.php" class="link2">Sistemas Operacionais</a></td>
               <td id="celula1"><a href="ementas/etica.php" class="link2">Ética Pofissional<br>e Cidadania</a></td>
               <td id="celula1"><a href= "ementas/banco.php" class="link2">Banco de Dados </a></td>
               <td id="celula1"><a href="ementas/projeto1.php" class="link2">Projeto e Prática I</a></td>
            </tr>
            <tr>
               <td id="celula1">11:05h-11:50h</td>
               <td id="celula1"><a href="ementas/banco.php" class="link2">Banco de Dados</a></td>
               <td id="celula1"><a href="ementas/sistema.php" class="link2">Sistemas Operacionais</a></td>
               <td id="celula1"><a href="ementas/etica.php" class="link2">Ética Pofissional<br>e Cidadania</a></td>
               <td id="celula1"><a href="ementas/banco.php" class="link2" >Banco de Dados</a> </td>
               <td id="celula1"><a href="ementas/projeto1.php" class="link2" >Projeto e Prática I</a></td>
            </tr>
         </table>
         <br> 
         <br>
         <br>
         <h4>INFORMÁTICA 3°-TARDE-SALA 09</h4>
         <br> 
         <br>
         <br>
         <table  class="disciplinas" border="1">
            <tr>
               <th>HORÁRIO</th>
               <th>SEGUNDA</th>
               <th>TERÇA</th>
               <th>QUARTA</th>
               <th>QUINTA</th>
               <th>SEXTA</th>
            </tr>
            <tr>
               <td id="celula1">12:50h-13:35h</td>
               <td id="celula1"><a href="ementas/Implantaçãoe.php"  class="link2">Implantação e Administração<br> de Serviços Web </a></td>
               <td id="celula1">
                  <a href= "ementas/projeto2.php" class="link2">
                  Projeto e Prática II</a>
               </td>
               <td id="celula1"><a href= "ementas/Implantaçãoe.php" class="link2">Implantação e Administração<br> de Serviços Web </a></td>
               <td id="celula1"><a href="ementas/engenharia.php" class="link2">Engenharia de Software</a></td>
               <td id="celula1"></td>
            </tr>
            <tr>
               <td id="celula1">13:35h-14:20h</td>
               <td id="celula1"><a href= "ementas/Implantaçãoe.php" class="link2">Implantação e Administração<br> de Serviços Web </a></td>
               <td id="celula1"><a href="ementas/projeto2.php" class="link2" >Projeto e Prática II</a></td>
               <td id="celula1"><a href="ementas/Implantaçãoe.php"  class="link2">Implantação e Administração<br> de Serviços Web </a></td>
               <td id="celula1"><a href="ementas/engenharia.php"  class="link2">Engenharia de Software</a> </td>
               <td id="celula1"><a href="ementas/desenvolvimento2.php" class="link2" >Desenvolvimento Web II</a></td>
            </tr>
            <tr>
               <td id="celula1">14:20h-15:05h</td>
               <td id="celula1"><a href="ementas/engenharia.php" class="link2" >Engenharia de Software</a></td>
               <td id="celula1"><a href="ementas/interacao.php" class="link2">Interação Humano-Computador</a></td>
               <td id="celula1"><a href="ementas/Implantaçãoe.php" class="link2" >Implantação e Administração<br> de Serviços Web   </a></td>
               <td id="celula1"><a href="ementas/desenvolvimento2.php" class="link2">Desenvolvimento Web II</a></td>
               <td id="celula1"><a href= "ementas/projeto2.php" class="link2">Projeto e Prática II</a></td>
            </tr>
            <tr>
               <td id="celula1">15:25h-16:10h</td>
               <td id="celula1"><a href= "ementas/engenharia.php" class="link2">Engenharia de Software</a></td>
               <td id="celula1"><a href= "ementas/interacao.php" class="link2">Interação Humano-Computador</a></td>
               <td id="celula1"><a href="ementas/empreendedorismo.php"  class="link2">Empreendedorismo</a></td>
               <td id="celula1"><a href="ementas/desenvolvimento2.php" class="link2" >Desenvolvimento Web II</a></td>
               <td id="celula1"><a href= "ementas/projeto2.php" class="link2">Projeto e Prática II</a></td>
            </tr>
            <tr>
               <td id="celula1">16:10h-16:55h</td>
               <td id="celula1"></td>
               <td id="celula1"><a href="ementas/interacao.php" class="link2">Interação Humano-Computador</a></td>
               <td id="celula1"><a href="ementas/empreendedorismo.php" class="link2" >Empreendedorismo</a></td>
               <td id="celula1"></td>
               <td id="celula1"><a href= "ementas/projeto2.php" class="link2">Projeto e Prática II</td>
            </tr>
            <tr>
               <td id="celula1">16:55h-17:40h</td>
               <td id="celula1"></td>
               <td id="celula1"></td>
               <td id="celula1"></td>
               <td id="celula1"> </td>
               <td id="celula1"><a href= "ementas/projeto2.php" class="link2">Projeto e Prática II</td>
            </tr>
         </table>
      </section>
      <?php
      include("footer.php");
      ?>
 

