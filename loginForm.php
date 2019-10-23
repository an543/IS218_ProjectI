
<?php

//get values 

$email = $_POST["email"];
$password = $_POST["password"];

checkEmail($email);
checkPassword($password);

function checkEmail($data) { //Not empty 
    $valEmail = true;
    if (empty($data)) {
       echo "Please Enter an valid Email Address.";
       $valEmail = false;
    }
    if (strpos($data, '@') == false) {
        if (strlen($data) == 0) { // This field should mentions @ required
            echo "Please use format: example@domain.com<br>";
            $valEmail = false;
        }
        else {
            echo "Please use format: example@domain.com. Your entry: ".$data."<br>";
            $valEmail = false;
        }
    }
    if ($valEmail == true) {
        echo "Email: " .$data."<br>";
    }
}

function checkPassword($data) {
    $valPassword = true;
    if (empty($data)) {
        echo "Please Enter Your Password.<br>";
        $valPassword = false;
    }
    if (strlen($data) < 8) { // At least 8 characters
        if (strlen($data) == 0) {
            echo "Please Enter a Password that has at least 8 characters. Your entry is ".strlen($data)." characters long.<br>";
        }
        else {
            echo "Please Enter a Password that has at least 8 characters. Your entry '".$data."' is ".strlen($data)." characters long.<br>";
        }
        $valPassword = false;
    }
    if ($valPassword == true) {
        echo "Password: " .$data."<br>";
    }
}
?>