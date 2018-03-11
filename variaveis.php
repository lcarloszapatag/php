<?php

//Variaveis.
 $nome = "Marcio";

echo $nome . "<br>";
var_dump($nome);

//Tipos de Variaveis.
$anoNascimento = 1985;
$nomeCompleto = "Marcio Carolino.";


//Mostra o tipo da variavel.
var_dump($nomeCompleto);

//Limpa a variavel da memória.
//unset($nomeCompleto);

//Verifica se a variavel esta vazia com isset, se não estiver ele mostra
if(isset($nomeCompleto)){
	echo "<br>". "Nome.: " . $nomeCompleto;
}

?>
