<script type="text/javascript">
	var count=new Number();
	var count=1200;
	function start(){
		if ((count-1)>=0) {
			var min = parseInt(count/60);
			var seg=count%60;
			count=count-1;
			if (min<10) {
				min="0"+min;
				min=min.substr(0,2);
			}
			if(seg<=9){
				seg="0"+seg;
			}
			horaImprimivel='00:'+min+':'+seg;
			$("#tempo").html(horaImprimivel);
			setTimeout('start()',1000);
			count--;
		}else{

			alert('Sessão  encerrada!');window.location.href='./formularios/deslogar.php';
		}
		
	}
	star();

</script>