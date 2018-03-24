<?php


$json = '[{"nome":"Marcio","idade":"32"},{"nome":"Carolino","idade":"33"}]';

$data = json_decode($json, true);

var_dump($data);

?>