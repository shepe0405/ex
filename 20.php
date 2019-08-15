<?php 
/*
	Na usina de Angra dos Reis, os técnicos
		analisam a perda de massa de um material
		radioativo. Sabendo-se que este perde 25%
		de sua massa a cada 30 segundos, criar um
		algoritmos que imprima o tempo necessário
		para que a massa desse material seja menor
		que 0.10
*/


$massa = 80;
$perde = 0.25;
$tempo = .30;
$final = .10;
$num = 0;
$teste = 0;

	while ($massa >= $final) {
		$num += 1;
		$teste = $massa*$perde;
		$massa -= $teste;
	}

	$novo = $num/2;

	if (is_float($novo)) {
		echo "<br>".intval($novo)." Minutos e Meio";
	} else {
		echo "<br>".$novo." Minutos";
	}

?>


 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	$.ajax({
    url: "ajax.php",
    type: "POST",
    data: "campo1=dado1&campo2=dado2&campo3=dado3",
    dataType: "html"

	}).done(function(resposta) {
	    console.log(resposta);

	}).fail(function(jqXHR, textStatus ) {
	    console.log("Request failed: " + textStatus);

	}).always(function() {
	     console.logs("completou");
	});
</script>