<?php 

/*
	Exercicios - 03
	imprimir impares
Exercicios - 04
	imprimir pares
Exercicios - 05
	melhorar para fazer igual ao 2 mas com o 3 e 4

	form com dois campos semelhante a contagem
	campos pedem dois numeros inicio e fim
	e select com mostrar par ou impar
	mostra a sequencia do mesmo modo que a contagem regressiva

*/

	for ($i=0; $i <= 10; $i++) { 
		if (($i % 2) != 0) {
			echo $i."<br>";
		}
	}
echo "<br>";
	for ($i=0; $i <= 10; $i++) { 
		if (($i % 2) == 0) {
			echo $i."<br>";
		}
	}

?>