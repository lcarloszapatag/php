<?php

$qualSuaIdade = 45;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ( $qualSuaIdade < $idadeCrianca){
	echo "Criança.";
}else if ( $qualSuaIdade < $idadeMaior ){
	echo "Adoscelente";
}else if ( $qualSuaIdade < $idadeMelhor){
	echo "Adulto";
}else{
	echo "Idoso";
}


echo "<br>";

?>