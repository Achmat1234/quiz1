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
