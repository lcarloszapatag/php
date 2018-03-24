<?php

$valorProduto = 14500.00;
$desconto = 5;


if ($valorProduto > 10000){
	echo "Valor do Desconto = " . $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
}else{
	echo "Sem Desconto";
}

?>