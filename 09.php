<?php /*Exercicios - 09
	Entrar com 3 números e imprimi-los em
	ordem decrescente (suponha números
	diferentes)*/
	/*
		JS PARA NÃO DEIXAR NUMERO IGUAIS
		IMPRIMIR NUMEROS NA ORDER COM BTN FLOATING
	*/
	 ?>

<?php 
	$num01 = 1;
	$num02 = 15;
	$num03 = 11;

	if ($num01 > $num02 && $num01 > $num03) {
		echo $num01."<br>";
		if ($num03 > $num02) {
				echo $num03."<br>";
				echo $num02."<br>";
		} else {
				echo $num02."<br>";
				echo $num03."<br>";
		}
	} elseif ($num02 > $num01 && $num02 > $num03) {
		echo $num02."<br>";
		if ($num03 > $num01) {
				echo $num03."<br>";
				echo $num01."<br>";
		} else {
				echo $num01."<br>";
				echo $num03."<br>";
		}
	} elseif ($num03 > $num02 && $num03 > $num01) {
		echo $num03."<br>";
		if ($num01 > $num02) {
				echo $num01."<br>";
				echo $num02."<br>";
		} else {
				echo $num02."<br>";
				echo $num01."<br>";
		}
	} else {
		echo "Erro";
	}
	
?>


