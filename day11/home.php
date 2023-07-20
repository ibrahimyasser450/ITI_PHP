<?php

$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$address = $_POST["address"];
$country = $_POST["country"];
$gender = $_POST["gender"];
$skills = $_POST["Skills"];
$userName = $_POST["user_name"];
$password = $_POST["password"];
$email = $_POST["email"];
$department = $_POST["department"];
$captcha = $_POST["captcha"];

$gender = ($gender == "male") ? "Mr" : "Miss";

if ($captcha == "Mb12ds") {
    echo "Thanks $gender $firstName $lastName<br>";
    echo "Review Your Information<br>";
    echo "Name: $userName<br>";
    echo "Address: $address<br>";
    echo "Your skills: ";
    foreach ($skills as $key => $value) {
        echo "$value<br>";
    }
    echo "Department: $department";
} else {
    echo "Captcha not correct";
}
