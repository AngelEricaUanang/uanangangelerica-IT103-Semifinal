<?php
$studentName = "Angel Erica L. Uanang";
$courseCode = "BSIT-1A";
$quizScores = array(20, 19, 18, 19, 20); // Scores out of 20
$examScores = array(50, 48, 49); // Scores out of 50
$quizTotal = array_sum($quizScores);$quizAverage = $quizTotal / count($quizScores);
$examTotal = array_sum($examScores);$examAverage = $examTotal / count($examScores);$weightedQuizScore = $quizAverage * 0.4;$weightedExamScore = $examAverage * 0.6;$finalGrade = $weightedQuizScore + $weightedExamScore;echo "Student Name: $studentName\n";echo "Course Code: $courseCode\n";echo "Final Grade: $finalGrade\n";

?>