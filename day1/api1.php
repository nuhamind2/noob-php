<?php

$text = $_GET["text"];
$type = $_GET["type"];


if($type === "meme"){
    $upper = false;
    $temp = str_split($text);
    for ($i = 0; $i < strlen($text); $i++){

        if($text[$i] !== " "){
            if($upper){
                $text[$i] = strtoupper($text[$i]);
            }
            else{
                $text[$i] = strtolower($text[$i]);
            }
            $upper = !$upper;
        }
    }
}
elseif($type === "upper"){
    $text = strtoupper($text);
}
elseif($type === "lower"){
    $text = strtolower($text);
}
else{
    http_response_code(400);
    $text = "";
}
echo $text;
?>