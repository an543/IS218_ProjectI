<?php

// Get values from users 

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthday = $_POST['birthday'];
$email = $_POST["email"];
$password = $_POST["password"];
// Checking all val input
checkFirstName($firstName);
checkLastName($lastName);
checkBirthday($birthday);
checkEmail($email);
checkPassword($password);

function checkFirstName($data) {
    if (empty($data)) {
        echo "Please Enter Your First Name.<br>";
    }
    else {
        echo "First Name: ".$data."<br>";
    }
}

function checkLastName($data) {
    if (empty($data)) {
        echo "Please Enter Your Last Name.<br>";
    }
    else {
        echo "Last Name: ".$data."<br>";
    }
}

function checkBirthday($data) {
    if (empty($data)) {
        echo "Please Enter Your Birthday.<br>";
    }
    else {
        echo "Birthday: ".$data."<br>";
    }
}

function checkEmail($data) {
    $valEmail = true;
    if (empty($data)) {
        echo "Please Enter an Email Address.<br>";
        $valEmail = false;
    }
    if (strpos($data, '@') == false) {
        if (strlen($data) == 0) {
            echo "example@domain.com<br>";
            $valEmail = false;
        }
        else {
            echo "example@domain.com : Your entry: ".$data."<br>";
            $valEmail = false;
        }
    }
    if ($valEmail == true) {
        echo "Email: ".$data."<br>";
    }
}

function checkPassword ($data) {
    $valPassword = true;
    if (empty($data)) {
        echo "Please Enter a Password.<br>";
        $valPassword = false;
    }
    if (strlen($data) < 8) {
        if (strlen($data) == 0) {
            echo "Please Enter a Password that has at least 8 characters. Your entry is ".strlen($data)." characters long.<br>";
        }
        else {
            echo "Please Enter a Password that has at least 8 characters. Your entry '".$data."' is ".strlen($data)." characters long.<br>";
        }
        $valPassword = false;
    }
    if ($valPassword == true) {
        echo "Password: ".$data."<br>";
    }
}
?>