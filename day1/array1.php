<?php 

$greeting = array();

$greeting[] = "the";
$greeting[] = "quick";
$greeting[] = "brown";
$greeting[] = "fox";
$greeting[] = "jump";
$greeting[] = "over";
$greeting[] = "the";
$greeting[] = "lazy";
$greeting[] = "dog";
header('Content-type: application/json');
echo json_encode($greeting);

?>