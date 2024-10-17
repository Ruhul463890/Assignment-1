<?php

function calculateTotalMarks(...$marks){
    $totalMarks = 0;

    for( $i = 0; $i < count($marks); $i++ ){
        
        $totalMarks += $marks[$i];
    }
        
    return $totalMarks;
}


function calculateAverageMarks(...$marks){
    $totalMarks = 0;

    for( $i = 0; $i < count($marks); $i++ ){
        $totalMarks += $marks[$i];
    } 
    $averageMarks = $totalMarks / count($marks);
    return $averageMarks;
}

$avgMarks= calculateAverageMarks(45,34,64,34,542);


function gradeCalculation($avgMarks){
    if( $avgMarks < 0 || $avgMarks > 100){
        echo "failed \n";
    }

}

