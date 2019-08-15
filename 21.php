<?php /*Armazenar 15 números inteiros em um vetor
	e imprimir uma mensagem contendo o
	número e uma das mensagens: par ou ímpar*/ 


$numeros = array(15,1,2,3,4,5,6,7,5,9,10,11,12,13,14);

for ($i=0; $i < sizeof($numeros); $i++) {
	if (($numeros[$i] % 2) == 0) {
		echo $numeros[$i]." é par <br>";
	} else {
		echo $numeros[$i]." é impar <br>";
	}
	
}








?>