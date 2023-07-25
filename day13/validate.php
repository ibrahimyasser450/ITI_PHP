<?php

$errors = array();
$username = $_POST['username'];
$password = $_POST['password'];

$data = file("data.txt");
$loggedin = false;
foreach ($data as $value) {
    $user = explode(":", $value);
    if ($username === $user[2] && $password === $user[3]) {
        $loggedin = true;
        break;
    } elseif ($username === $user[2] && $password !== $user[3]) {
        $errors['password'] = 'The password you entered is incorrect';
        break;
    } elseif ($username !== $user[2] && $password === $user[3]) {
        $errors['username'] = 'The username you entered is incorrect';
    }
}

if ($loggedin) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['logged'] = true;
    header('Location: home.php');
    exit;
} else {
    if (isset($errors['username']) && !isset($errors['password'])) {
        $formErrors = json_encode($errors);
        header("Location:login.php?errors=$formErrors");
        exit;
    } elseif (!isset($errors['username']) && isset($errors['password'])) {
        $formErrors = json_encode($errors);
        header("Location:login.php?errors=$formErrors");
        exit;
    } else {
        $errors['username'] = 'The username you entered is incorrect';
        $errors['password'] = 'The password you entered is incorrect';
        $formErrors = json_encode($errors);
        header("Location:login.php?errors=$formErrors");
        exit;
    }
}
