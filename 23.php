<?php /*Exercicios - 23
	Criar 2 vetores com 10 números inteiros
	cada. Gerar e imprimir um vetor dos números
	não comuns aos e vetores*/ 

$numeros = array(15,12,3,1,4,5,6,7,8,9);
$arrayName = array(11,12,1,14,15,16,9,18,19,20);
$result = array_diff($numeros, $arrayName);
$teste = array_diff($arrayName, $numeros);
$final = array_merge($result, $teste);
echo "<pre>";
print_r($final);
echo "</pre>";






?>