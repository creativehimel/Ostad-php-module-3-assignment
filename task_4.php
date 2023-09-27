<?php
$studentGrades = [
    ["Math"=> 88, "English"=>75, "Science"=>95],
    ["Math"=> 65, "English"=>98, "Science"=>71],
    ["Math"=> 80, "English"=>60, "Science"=>84]
];
function getAverage($studentGrades){

    foreach ($studentGrades as $id=>$subjectGrade){
        $gpaSum = 0;
        $totalSubject = count($subjectGrade);
        foreach ($subjectGrade as $value){
            $gpaSum += $value;
        }
        $gpaAvg = round(($gpaSum / $totalSubject),2);
        if($gpaAvg>= 80 && $gpaAvg <= 100){
            echo "The student ".($id+1). " has been getting an aveage mark of $gpaAvg  and a GPA of A+.<br>";
        }elseif ($gpaAvg>= 70 && $gpaAvg < 80){
            echo "The student ".($id+1). " has been getting an aveage mark of $gpaAvg  and a GPA of A.<br>";
        }elseif ($gpaAvg>= 60 && $gpaAvg < 70) {
            echo "The student " . ($id + 1) . " has been getting an aveage mark of $gpaAvg  and a GPA of A-.<br>";
        }elseif ($gpaAvg>= 50 && $gpaAvg < 60) {
            echo "The student " . ($id + 1) . " has been getting an aveage mark of $gpaAvg  and a GPA of B.<br>";
        }elseif ($gpaAvg>= 40 && $gpaAvg < 50) {
            echo "The student " . ($id + 1) . " has been getting an aveage mark of $gpaAvg  and a GPA of C.<br>";
        }elseif ($gpaAvg>= 33 && $gpaAvg < 40) {
            echo "The student " . ($id + 1) . " has been getting an aveage mark of $gpaAvg  and a GPA of C.<br>";
        }
    }
}
getAverage($studentGrades);