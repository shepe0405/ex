<?php 
/*
	Entrar com 20 números e imprimir a soma
	dos positivos e o total de números negativos
*/

$array = array(0,1,2,3,4,5,6,7,8,9,10,-11,12,13,14,15,16,17,18,-19,-20);
$soma = 0;
$negativo = 0;
for ($i = 0; $i < sizeof($array); $i++) {
	if ($array[$i] > 0) {
		$soma += $i;
	}
	if ($array[$i] < 0) {
		$negativo += 1;
	}
}
echo "soma ".$soma;
echo "<br> Negativos: ".$negativo;
?>
