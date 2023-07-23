<?php

$username = $_POST['username'];
$password = $_POST['password'];

$data = file("data.txt");
foreach ($data as $value) {
    $user = explode(":", $value);
    $loggedin = false;
    foreach ($user as $value) {
        if ($username === $user[2] and $password === $user[3]) {
            $loggedin = true;
        }
    }
}

if ($loggedin) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['logged'] = true;
    header('Location:home.php');
} else {
    header('Location:login.php?error=Incorrect');
}
