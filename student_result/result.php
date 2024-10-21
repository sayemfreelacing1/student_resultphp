<?php

function calculateResult($marks) {
    // Invalid marks loop
    foreach($marks as $mark){ 
        if ($mark<0 || $mark>100){
            echo "Mark range is invalid.\n";
            return;
        }
    }
    // Fail in the exam
    foreach($marks as $mark){
        if($mark < 33){
            echo "You failed in the exam.\n";
            return;
        }
    }   
    $totalMarks=array_sum($marks);
    $totalSubject=count($marks);
    $averageMark=$totalMarks / $totalSubject;

    // Grade calculation using switch case
    // $grade='';
    switch (true) {
        case ($averageMark >= 80):
            $grade = 'A+';
            break;

        case ($averageMark >= 70 && $averageMark < 80):
            $grade = 'A-';
            break;

        case ($averageMark >= 60 && $averageMark < 70):
            $grade = 'B+';
            break;

        case ($averageMark >= 50 && $averageMark < 60):
            $grade = 'B-';
            break;

        case ($averageMark >= 40 && $averageMark < 50):
            $grade = 'C';
            break;

        case ($averageMark >= 33&& $averageMark < 40):
            $grade = 'D';
            break;

        default:
            $grade = 'F';
            break;   

    }

    // Output Result:
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMark\n";
    echo "Grade: $grade\n";
}
// Example input marks for 5 subjects
$marks=[85,80,75,65,78]; // Feel free to change these marks for testing

// Calculate and display the result
calculateResult($marks);