var div1;
var div2;
var div3;
var div4;
var div5;
var div6;
var div7;
window.onload=function(){
     div1=document.getElementById("div1");
     div2=document.getElementById("div2");
     div3=document.getElementById("div3");
     div4=document.getElementById("div4");
     div5=document.getElementById("div5");
     div6=document.getElementById("div6");
     div7=document.getElementById("div7");

     var matricula=document.getElementById("matricula");
     matricula.onclick=mostrarDiv1;
     var trancamento=document.getElementById("trancamento");
     trancamento.onclick=mostrarDiv2;
     var transferencia=document.getElementById("transferencia");
     transferencia.onclick=mostrarDiv3;
     var jubilamento=document.getElementById("jubilamento");
     jubilamento.onclick=mostrarDiv4;
     var faltas=document.getElementById("faltas");
     faltas.onclick=mostrarDiv5;
     var notas=document.getElementById("notas");
     notas.onclick=mostrarDiv6;
     var avaliacoes=document.getElementById("avaliacoes");
     avaliacoes.onclick=mostrarDiv7;

     div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv1(){
      div1.classList.remove("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");
}
function mostrarDiv2(){
      div1.classList.add("escondido");
     div2.classList.remove("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv3(){
      div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.remove("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv4(){
      div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.remove("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv5(){
      div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.remove("escondido");
     div6.classList.add("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv6(){
      div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.remove("escondido");
     div7.classList.add("escondido");

}
function mostrarDiv7(){
      div1.classList.add("escondido");
     div2.classList.add("escondido");
     div3.classList.add("escondido");
     div4.classList.add("escondido");
     div5.classList.add("escondido");
     div6.classList.add("escondido");
     div7.classList.remove("escondido");

}

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
  