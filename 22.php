<?php 
/*
	Exercicios - 22
	Criar um vetor com 20 elementos inteiros.
	Imprimir o maior e o menor, sem ordenar, o
	percentual de números pares e média dos
	elementos do vetor
*/

$numeros = array(1,1,3,1,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$pares = 0;
rsort($numeros);

for ($i=0; $i < sizeof($numeros); $i++) { 
	if (($numeros[$i] % 2) == 0) {
		$pares += 1;
	}
}
echo "Menor numero: ".end($numeros)."<br>";
echo "Maior numero: ".$numeros[0]."<br>";
$novo = array_sum($numeros);
$tamanho = (sizeof($numeros)-1);
$media = $novo/$tamanho;
echo "A media é: ".number_format($media, 2)."<br>";
echo (($pares/$tamanho)*100)."% dos numeros são pares<br>";


