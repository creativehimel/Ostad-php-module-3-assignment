<?php
$grades = [85, 92, 78, 88, 95];
function getSortedGrades($grades){
    rsort($grades);
    echo "<pre>";
    print_r($grades);
    echo "</pre>";
}

getSortedGrades($grades);