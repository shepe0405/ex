<?php 
/*
	Criar um algoritmos que entre com uma
	palavra e imprima conforme o exemplo
	◦ Palavra: sonho
	◦ SONHO
	◦ SONHO SONHO
	◦ SONHO SONHO SONHO
	◦ SONHO SONHO SONHO SONHO
*/
$palavra = "Php";
echo "Palavra: ".$palavra."<br>";
$novo = $palavra;
for ($i=0; $i <= 3 ; $i++) {
	echo $novo."<br>";
	$novo .= " ".$palavra;
}