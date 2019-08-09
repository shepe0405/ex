<?php 
/*
	Criar um algoritmos que imprima a tabuada
	de um número
*/

$num = 30;

for ($i = 0; $i <= 10 ; $i++) { 
	$prod = $num * $i;
	echo $num." x ".$i." = ".$prod."<br>";
}