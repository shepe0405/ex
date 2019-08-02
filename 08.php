<?php /*Exercicios - 08
	Entrar com nome, sexo e idade de uma
	pessoa. Se a pessoa for do sexo feminino e
	tiver menos que 25 anos, imprimir nome e a
	a mensagem: ACEITA. Caso contrário,
	imprimir nome e a mensagem: NÃO ACEITA.*/
	/*CRIAR FORM RECEBENDO */
?>

<?php 
	$nome = "Sheila";
	$sexo = "F";
	$idade = "20";

	if ($sexo == "F" && $idade < 25 ) {
		echo $nome." Aceita<br>";
	} else {
		echo $nome." Não Aceita<br>";
	}

?>
