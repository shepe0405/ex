<?php /*Exercicios - 07
	Entrar com um número e informar se ele é
	divisível por 10, por 5, por 2 ou se não é
	divisível por nenhum destes*/ ?>

	<?php  

	$num = 10;

	if (($num % 10) == 0) {
		echo "Numero ".$num." divisivel por 10<br>";
	} else {
		echo "Numero ".$num." não é divisivel por nehuma das opçoes";
	}
	if (($num % 5) == 0) {
		echo "Numero ".$num." divisivel por 5<br>";
	} else {
		echo "Numero ".$num." não é divisivel por nehuma das opçoes";
	}
	if (($num % 2) == 0) {
		echo "Numero ".$num." divisivel por 2";
	} else {
		echo "Numero ".$num." não é divisivel por nehuma das opçoes";
	}
	


	?>