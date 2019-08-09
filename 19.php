<?php 
/*
	Chico tem 1,50m e cresce 2 centímetros por
		ano, enquanto Juca tem 1,10m e cresce 3
		centímetros por ano. Construir um algoritmos
		que calcule e imprima quantos anos serão
		necessários para que Juca seja maior que
		Chico
*/
$chico = array(
	'nome' => "Chico",
	'altura' => 1.50,
	'cresce' => 0.02
);

$juca = array(
	'nome' => "Juca",
	'altura' => 1.10,
	'cresce' => 0.03
);
?>


<pre><?= print_r($chico) ?></pre>
<pre><?= print_r($juca) ?></pre>

<?php
$num = 0;
while ($juca['altura'] < $chico['altura']) {
	$num += 1;
	//echo $num." Ano <br>";
	//echo "Juca altura: ".number_format($juca['altura'], 2, ",", ".")." m <br>";
	$juca['altura'] += $juca['cresce'];
	$chico['altura'] += $chico['cresce'];
	//echo "Chico altura: ".number_format($chico['altura'], 2, ",", ".")." m <br>";
}
echo $num." Anos <br>";
echo "Juca altura: ".number_format($juca['altura'], 2, ",", ".")." m <br>";
echo "Chico altura: ".number_format($chico['altura'], 2, ",", ".")." m <br>";

 ?>
<pre><?= print_r($chico) ?></pre>
<pre><?= print_r($juca) ?></pre>