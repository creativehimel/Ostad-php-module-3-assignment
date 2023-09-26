<?php
$studentGrades = [
    ["Math"=> 88, "English"=>75, "Science"=>95],
    ["Math"=> 65, "English"=>98, "Science"=>71],
    ["Math"=> 93, "English"=>60, "Science"=>84]
];
function getAverage($studentGrades){

    foreach ($studentGrades as $id=>$subjectGrade){
        $gpaSum = 0;
        $totalSubject = count($subjectGrade);
        foreach ($subjectGrade as $value){
            $gpaSum += $value;
        }
        $gpaAvg = $gpaSum / $totalSubject;
        echo "The student ".($id+1). " average GPA is : $gpaAvg <br>";
    }
}
getAverage($studentGrades);