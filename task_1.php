<?php
$text = "The quick brown fox jumps over the lazy dog.";
function modifiedString($text){
    $search = "brown";
    $replace = "red";
    $lower   = strtolower($text);
    $modifiedText = str_replace($search, $replace, $lower);
    echo $modifiedText;
}

modifiedString($text);



