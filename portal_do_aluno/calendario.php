<?php
function num($num){
	return($num<10)?'0'.$num:$num;

}
function montaEventos($info){
	 global $pdo;
	
	 $nome = $info['nome'];
	 $data_de_nascimento = $info['data_de_nascimento'];
	 $now=date('Y-m-d');

	 $eventos=$pdo->prepare("SELECT * FROM users WHERE '".$data_de_nascimento."' >= NOW()");
	 $eventos->execute();
	 $retorno=array(); 
	 while ($row =$eventos->fetchObject()) {
	 	$dataArr=date('Y-m-d',strtotime($row->{$data_de_nascimento}));
	 	$retorno[$dataArr]=array(
	 		'data_de_nascimento'=>$row->{$data_de_nascimento},
	 		'nome'=>$row->{$nome}
	 		

	 		);
	 }
	 return $retorno;


}
function diasMeses(){
	$retorno=array();
	for ($i=1; $i <=12 ; $i++) { 
		$retorno[$i]=cal_days_in_month(CAL_GREGORIAN ,$i, date('Y'));

	}
	return $retorno;
}

function montaCalendario($eventos=array()){
	$daysWeek=array(
		'su',
		'Mon',
		'Tue',
		'Wed', 
		'Thu',
		'Fri',
		'Sat'

		);
	$diasSemana=array(
		'Dom',
		'Seg',
		'Ter',
		'Qua', 
		'Qui',
		'Sex',
		'Sab'

		);
	$arrayMes=array(
		1 =>'Janeiro',
		2 =>'Fevereiro',
		3 =>'Março',
		4 =>'Abril',
		5 =>'Maio',
		6 =>'Junho',
		7 =>'Julho',
		8 =>'Agosto',
		9 =>'Setembro',
		10 =>'Outubro',
		11 =>'Novembro',
		12 =>'Dezembro',

		);
	$diasMeses=diasMeses();
	for ($i=1; $i <=12 ; $i++) { 
		$arrayRetorno[$i]=array();
		for ($n=1; $n <= $diasMeses[$i] ; $n++) { 
			$dayMonth= GregorianToJD($i, $n, date('Y'));
			$weekMonth=substr(JDDayOfWeek($dayMonth,1), 0,3);
			if ($weekMonth=='Mun')  $weekMonth='Mon';
			$arrayRetorno[$i][$n]=$weekMonth;


		}
	}
	echo '<a href="#" id="volta">&laquo;</a><a href="#" id="vai">&raquo;</a>';

	echo '<table border="0" width="100%">';
	foreach ($arrayMes as $num => $mes) {
		echo '<tbody id="mes_'.$num.'" class="mes">';
		echo '<tr class="mes_title"><td colspan="7">'.$mes.'</td></tr>';
		echo'<tr class="dias_title">';
		foreach ($diasSemana as $i => $day) {
			echo '<td>'.$day.'</td>';
		}
		echo '</tr><tr>';
		$y=0;
		foreach ($arrayRetorno[$num] as $numero => $dia) {
			$y++;
			if ($numero==1) {
				$qtd=array_search($dia, $daysWeek);
				for ($i=1; $i <= $qtd; $i++) { 
					echo '<td></td>';
					$y+=1;
				}
			}
			if (count($eventos)>0) {
				$month=num($num);
				$dataNow=num($numero);
				$date=date('Y').'-'.$month.'-'.$dataNow;
				if (in_array($date, array_keys($eventos))) {
					$evento=$eventos[$date];
					echo '
    <td class="eventos"  title="'.$evento['data_de_nascimento'].'" type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">'.$numero.'</td>';?>
    
    
    	
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Aniversariantes</h4>
        </div>
        <div class="modal-body">
          <p><?= $evento['nome'];?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


					<?php

					}else{
					echo '<td>'.$numero.'</td>';
				}
			}else{
				echo '<td>'.$numero.'</td>';
			}	
			if ($y==7) {
				$y=0;
				echo '</tr><tr>';
			}
		}

		echo '</tr></tbody>';
	}
	echo '</table>';
	
}
?>
