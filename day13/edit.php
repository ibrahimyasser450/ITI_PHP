<?php
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$username = $_GET['username'];
$password = $_GET['password'];
$password_confirmation = $_GET['password_confirmation'];
$email = $_GET['email'];
$country = $_GET['country'];
$room = $_GET['room'];
$image = $_GET['image'];


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

// Delete the image from the server
if (!empty($image)) {
    if (file_exists($image)) {
        unlink($image);
    }
}

header("Location:index.php?first_name=$first_name&last_name=$last_name&username=$username&password=$password&password_confirmation=$password_confirmation&email=$email&country=$country&room=$room");
