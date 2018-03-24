<?php

$pessoas = array();

array_push($pessoas, array(
	 'nome' => 'Marcio',
	  'idade'=>'32'				
));

array_push($pessoas, array(
	 'nome' => 'Carolino',
	  'idade'=>'33'				
));


echo json_encode($pessoas);

?>
