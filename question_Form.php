<?php

// Get values from users
$questionName = $_POST['questionName'];
$questionBody = $_POST['questionBody'];
$questionSkills = $_POST['questionSkills'];

checkQuestionName($questionName);
checkQuestionBody($questionBody);
checkQuestionSkills($questionSkills);

function checkQuestionName ($data) {
    $valQuestionName = true;
    if (empty($data)) {
        echo "Please Enter a Question Name.<br>";
        $valQuestionName = false;
    }
    if (strlen($data) < 3) {
        if (strlen($data) == 0) {
            echo "Please Enter a Question Name has at least 3 characters. Your entry is ".strlen($data)." characters long.<br>";
        }
        else {
            echo "Please Enter a Question Name has at least 3 characters. Your entry '".$data."' is ".strlen($data)." characters long.<br>";
        }
        $valQuestionName= false;
    }
    if ($valQuestionName == true) {
        echo "Question Name: ".$data."<br>";
    }
}

function checkQuestionBody ($data) {
    $valQuestionBody = true;
    if (empty($data)) {
        echo " Please Enter a Question Body.<br>";
        $valQuestionBody = false;
    }
    if (strlen($data) >= 500) {
        echo "Please enter a question body has less than 500 characters long. Entry has ".strlen($data)." characters long.<br>";
        $valQuestionBody = false;
    }
    if ($valQuestionBody == true) {
        echo "Question body: ".$data."<br>";
    }
}

function checkQuestionSkills($data) {
    $data = str_replace(' ',' ', $data);
    $data = explode(',', $data);

    if(count($data) < 2) {
        echo "Question skills error: please enter at least 2 question skills.<br>";
    }
    else {
        echo "Question skills.<br>";
    }

    print_r($data);
}
?>