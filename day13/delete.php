<?php
$first_name = $_GET['first_name'];
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

header("Location:home.php");
