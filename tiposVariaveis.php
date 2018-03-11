<?php

/*
Tipos básicos de variáveis.
*/
$nome = "Marcio";

$site = 'www.hcode.com.br';

$ano = 1985;
$salarop = 5500.99;
$bloqueado = false;


/*
Criando um array simples.
*/
$frutas = array("Abacaxi","Laranja","Manga");
echo $frutas[1];
///////////////////////////////////////////////////////

$nascimento = new DateTime();
echo "<br>";
var_dump($nascimento);
//////////////////////////////////


$arquivo = fopen("tiposVariaveis.php","r");
echo "<br>";
var_dump($arquivo);
echo "<br>";

/////////////////////////////////
$nulo = NULL;

?>