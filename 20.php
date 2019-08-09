<?php 
/*
	Na usina de Angra dos Reis, os técnicos
		analisam a perda de massa de um material
		radioativo. Sabendo-se que este perde 25%
		de sua massa a cada 30 segundos, criar um
		algoritmos que imprima o tempo necessário
		para que a massa desse material seja menor
		que 0.10
*/


$massa = 80;
$perde = 0.25;
$tempo = .30;
$final = .10;
$num = 0;
$teste = 0;

	while ($massa >= $final) {
		$num += 1;
		$teste = $massa*$perde;
		$massa -= $teste;
	}
	
	$novo = $num/2;

	if (is_float($novo)) {
		echo "<br>".intval($novo)." Minutos e Meio";
	} else {
		echo "<br>".$novo." Minutos";
	}
