<?php
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$address = $_GET['address'];
$country = $_GET['country'];
$gender = $_GET['gender'];
$skills = $_GET['skills'];
$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];
$department = $_GET['department'];

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
header("Location:index.php?first_name=$first_name&last_name=$last_name&address=$address&country=$country&gender=$gender&skills=$skills&username=$username&password=$password&email=$email&department=$department");
