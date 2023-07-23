<?php
$firstname = $_GET['first_name'];
$lastname = $_GET['last_name'];
$username = $_GET['username'];
$password = $_GET['password'];
$password_confirmation = $_GET['password_confirmation'];
$email = $_GET['email'];
$country = $_GET['country'];
$room = $_GET['room'];

$users = file("data.txt");
foreach ($users as $key => $value) {
    $userData = explode(":", $value);
    if ($first_name == $userData[0]) {
        unset($users[$key]);
        break;
    }
}

$userFile = fopen("data.txt", "w");
foreach ($users as $key => $value) {
    fwrite($userFile, $value);
}
fclose($userFile);
header("Location:index.php?first_name=$firstname&last_name=$lastname&username=$username&password=$password&password_confirmation=$password_confirmation&email=$email&country=$country&room=$room");
