<?php
/*

Escopo de variavel.

*/


$nome = "Márcio Carolino";

//Criando uma função.
function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	global $nome;
	echo "<br>" . $nome . ", agora no teste 2."; 
}


teste();
teste2();
?>