<?php

session_id('2bqabc5dm3i5iq53la1gdscrpm');

require_once("config.php");


session_regenerate_id();


echo session_id();

echo "<br>";

var_dump($_SESSION);

?>