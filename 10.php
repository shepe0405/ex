<?php /*Exercicios - 10
	Ler 3 números, os possíveis lados de um
	triângulo, e imprimir a classificação de
	acordo com tamanho dos lados - procurar tamanho dos trinagulos
		
	Triângulo Equilátero: é todo triângulo que apresenta os três lados com a mesma medida. Nesse caso dizemos que os três lados são congruentes.

	Triângulo Isósceles: é todo triângulo que apresenta dois lados com a mesma medida, ou seja, dois lados de tamanhos iguais.

	Triângulo Escaleno: é todo triângulo que apresenta os três lados com medidas diferentes, ou seja, três lados de tamanhos diferentes.

	*/ ?>

	<?php 

		$num01 = 15;
		$num02 = 10;
		$num03 = 15;

		if ($num01 == $num02 && $num01 == $num03 && $num02 == $num03) {
			echo "Triângulo Equilátero<br>";
		} elseif ($num01 == $num02 || $num01 == $num03 || $num02 == $num03) {
			echo "Triângulo Isósceles<br>";
		} elseif ($num01 != $num02 || $num01 != $num03 || $num02 != $num03) {
			echo "Triângulo Escaleno<br>";
		} else {
			echo "Erro";
		}

	?>
