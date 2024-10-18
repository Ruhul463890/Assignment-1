<?php

$subject1 = 85;
$subject2 = 15;
$subject3 = 35;
$subject4 = 45;
$subject5 = 79;

function checkValidation()
{
    global $subject1, $subject2, $subject3, $subject4, $subject5;

    if ($subject1 > 100 || $subject2 > 100 || $subject3 > 100 || $subject4 > 100 || $subject5 > 100) {
        return false;
    } else if ($subject1 < 0 ||  $subject2 < 0 || $subject3 < 0 || $subject4 < 0 || $subject5 < 0) {
        return false;
    } else {
        return true;
    }
}


function CalculateTotalMarks()
{
    global $subject1, $subject2, $subject3, $subject4, $subject5;

    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;

    return $totalMarks;
}

function averageMarks(): float
{

    $averageMarks = CalculateTotalMarks() / 5;

    return $averageMarks;
}


function grading()
{
    if (averageMarks() >= 80 && averageMarks() <= 100) {
        echo "You got grade A+";
    } else if (averageMarks() >= 70 && averageMarks() < 80) {
        echo "You got grade A";
    } else if (averageMarks() >= 60 && averageMarks() < 70) {
        echo "You got grade A-";
    } else if (averageMarks() >= 50 && averageMarks() < 60) {
        echo "You got grade B";
    } else if (averageMarks() >= 40 && averageMarks() < 50) {
        echo "You got grade C";
    } else if (averageMarks() >= 33 && averageMarks() < 40) {
        echo "You got grade D";
    } else {
        echo "You got grade F";
    }
}

if (checkValidation() == false) {
    echo "mark range is invalid.\n";
} else {
    if (averageMarks() < 33) {
        grading();
        echo PHP_EOL;
    } else {
        echo "Your total marks is " . CalculateTotalMarks() .",";
        echo PHP_EOL;
        printf("Average marks is %.2f, ", averageMarks());
        echo PHP_EOL;
        grading();
        echo PHP_EOL;
    }
}
