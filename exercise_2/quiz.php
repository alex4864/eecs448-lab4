<?php
$question1 = $_POST["question-1"];
$question2 = $_POST["question-2"];
$question3 = $_POST["question-3"];
$question4 = $_POST["question-4"];
$question5 = $_POST["question-5"];

$questionsCorrect = 0;

echo "Question 1: Which country has the largest population?<br>";
echo "Your answer: " . $question1 . "<br>";
echo "Correct answer: Brazil<br><br>";
if($question1 == "Brazil"){
  $questionsCorrect++;
}

echo "Question 2: Which country has the largest landmass?<br>";
echo "Your answer: " . $question2 . "<br>";
echo "Correct answer: Argentina<br><br>";
if($question2 == "Argentina"){
  $questionsCorrect++;
}

echo "Question 3: Which country has the lowest ratio of olympic medals to population?<br>";
echo "Your answer: " . $question3 . "<br>";
echo "Correct answer: India<br><br>";
if($question3 == "India"){
  $questionsCorrect++;
}

echo "Question 4: How many countries does Russia share a land border with?<br>";
echo "Your answer: " . $question4 . "<br>";
echo "Correct answer: 14<br><br>";
if($question4 == "14"){
  $questionsCorrect++;
}

echo "Question 5: Is a hotdog a sandwhich?<br>";
echo "Your answer: " . $question5 . "<br>";
echo "Correct answer: No<br><br>";
if($question5 == "No"){
  $questionsCorrect++;
}

echo "Questions answered correctly: " . $questionsCorrect . "<br>";

$percentCorrect = ($questionsCorrect / 5) * 100;

echo "Percentage: " . $percentCorrect . "%";

?>
