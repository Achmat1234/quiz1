<?php


if (!isset($_POST['btn'])) {
    header('Location: error.php?e=1');
    exit;
    //if no button was clicked then go to error page
}


$totalMarks = 0; // Do not edit, initialisation of variable
$totalQues = 7; //Enter total number of questions here


//first value can be anything as array initialise with 0
$ans = array(
    'undef',
    'A',
    'B',
    'A',
    'A',
    'D',
    'D',
    'D',

);


for ($i = 1; $i <= $totalQues; $i++) {
    if (isset($_POST['answer-' . $i])) {
        if ($_POST['answer-' . $i] == $ans[$i]) {
            $totalMarks++;
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Result for Quiz</title>

    <!--    meta-->
    <meta name="author" content="Achmat Armien">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Achmat, Armien, Free, Quiz, Open-Source, PHP">

    <!--    styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <header>
        <h1>Quiz</h1>
    </header>
    <hr>
    <div id="result">
        <p>Result:
            <strong style="font-size:1.5em;"><?= $totalMarks; ?></strong>/<?= $totalQues; ?></p>
    </div>

</body>


</html>

<html>

<head>

    <title>DIC - Online Quiz Example Using PHP</title>

</head>


<body>
    <?php
    function readAnswerKey($filename)
    {

        $answerKey = array();


        // If the answer key exists and is readable, read it into an array.

        if (file_exists($filename) && is_readable($filename)) {

            $answerKey = file($filename);
        }



        return $answerKey;
    }
    // Read the questions file and return an array of arrays (questions and choices)
    // Each element of $displayQuestions is an array where first element is the question
    // and second element is the choices.
    function readQuestions($filename)
    {
        $displayQuestions = array();
        if (file_exists($filename) && is_readable($filename)) {
            $questions = file($filename);

            // Loop through each line and explode it into question and choices
            foreach ($questions as $key => $value) {
                $displayQuestions[] = explode(":", $value);
            }
        } else {
            echo "Error finding or reading questions file.";
        }
        return $displayQuestions;
    }

        // Take our array of exploded questions and choices, show the question and loop through the choices.
    function displayTheQuestions($questions)
    {
        if (count($questions) > 0) {
            foreach ($questions as $key => $value) {
                echo "<b>$value[0]</b><br/><br/>";
                // Break the choices appart into a choice array
                $choices = explode(",", $value[1]);