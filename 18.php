<?php 
/*
	Ler vários números e informar quantos
		números entre 100 e 200 foram digitados. Se
		o valor 0 for lido encerrar a execução
*/

$array = array(10,300,0,199,5,6,19,50);
$num = 0;
$msg = "<br> Numeros entre 100 e 200: ".$num;

for ($i=0; $i < sizeof($array); $i++) {
	if ($array[$i] == 0) {
		$msg = "<br> Erro foi lido um Valor Zero";
		break;
	} else {
		if ($array[$i] >= 100 && $array[$i] <= 200) {
				$num += 1;
		}
	}
}
echo sizeof($array)." Números digitados";
echo $msg;
