<?php
$numbers =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function getOddNumbers($numbers){
    function odd($n){
        return $n % 2 == 1;
    }
    $newArray = array_filter($numbers, "odd");
    echo "<pre>";
    print_r($newArray);
}
getOddNumbers($numbers);