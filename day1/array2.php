<?php 

$greeting = array();

$greeting["the"] = "quick";
$greeting["brown"] = "fox";
$greeting["jump"] = "over";
$greeting["the"] = "lazy";
$greeting["dog"] = true;
header('Content-type: application/json');
echo json_encode($greeting);

?>