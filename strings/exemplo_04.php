<?php

$frase = "A repetição é a mãe da repetição";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

?>