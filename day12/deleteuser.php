<?php
$first_name = $_GET['first_name'];
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
header("Location:home.php");
