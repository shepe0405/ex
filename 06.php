<?php 
/*

Construir um algoritmo que leia 2 números e
	efetue a adição. Caso o valor somado seja
	maior que 20, este deverá ser apresentado
	somando-se a ele mais 8; caso o valor
	somado seja menor ou igual a 20, este deverá
	ser apresentado subtraindo-se 5
*/
?>

<?php 
$num01 = 10;
$num02 = 11;
$soma = $num02 + $num01;

if ($soma > 20) {
	$soma += 8;
} elseif ($soma <= 20) {
	$soma -= 5;
} else {
	echo "erro";
}

echo $soma;



?>
