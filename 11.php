<?php /*Ler um número inteiro entre 1 e 12 e escrever
	o mês correspondente. Caso o número seja
	fora desse intervalo, informar que não existe
	mês com este número
		
		js não deixando ser letra ou numero maior que 12 ou menor q 1
		
		ex12 esta no codeigniter


	*/?>


	<?php 
		$num = 8;
		$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
		switch ($num) {
			case 1:
				echo $meses[1];
				break;
			case 2:
				echo $meses[2];
				break;
			case 3:
				echo $meses[3];
				break;
			case 4:
				echo $meses[4];
				break;
			case 5:
				echo $meses[5];
				break;
			case 6:
				echo $meses[6];
				break;
			case 7:
				echo $meses[7];
				break;
			case 8:
				echo $meses[8];
				break;
			case 9:
				echo $meses[9];
				break;
			case 10:
				echo $meses[10];
				break;
			case 111:
				echo $meses[11];
				break;
			case 12:
				echo $meses[12];
				break;
			default:
				echo "Não existe mês com este número";
				break;
		}
	?>
