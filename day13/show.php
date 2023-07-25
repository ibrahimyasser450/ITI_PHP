<?php
$errors = array();
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];
$passwordRegex = "/^[a-z0-9_]{8,}$/";
$email = $_POST['email'];
$pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

//image
if (isset($_FILES['image']) and !empty($_FILES['image']['name'])) {
    $nameimg = $_FILES['image']['name'];
    $pathimg = $_FILES['image']['tmp_name'];
    $extimg = pathinfo($nameimg)['extension'];
    $newnameimg = "images/" . time() . "." . $extimg;
    if (in_array($extimg, array('png', 'jpg', 'jpeg'))) {
        move_uploaded_file($pathimg, $newnameimg);
    } else {
        $errors['image'] = 'Profile Picture is Required';
    }
} else {
    $errors['image'] = 'Profile Picture is Required';
}


//first_name
if (!isset($_POST['first_name']) || trim($_POST['first_name']) === '') {
    $errors['first_name'] = 'First_name is Required';
}

//last_name
if (!isset($_POST['last_name']) || trim($_POST['last_name']) === '') {
    $errors['last_name'] = 'Last_name is Required';
}

//username
if (!isset($_POST['username']) || trim($_POST['username']) === '') {
    $errors['username'] = 'Username is Required';
}

//pssword
if (!isset($_POST['password']) || trim($_POST['password']) === '') {
    $errors['password'] = 'Password is Required';
}
// only 8 chars and doesn't allow special chars only underscore allowed and doesn't accept capital characters
elseif (!preg_match($passwordRegex, $password)) {
    $errors['password'] = 'Password is Invalid';
}
// Check if the password matches password_confirmation
elseif ($password !== $password_confirmation) {
    $errors['password_confirmation'] = 'password_confirmation do not match';
}

//email
if (!isset($_POST['email']) || trim($_POST['email']) === '') {
    $errors['email'] = 'Email is Required';
}
// Method 1: Using filter_var() function
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email is Invalid';
}
// Method 2: Using regular expressions
elseif (!preg_match($pattern, $email)) {
    $errors['email'] = 'Email is Invalid';
}


//insert
if (empty($errors)) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $country = $_POST['country'];
    $room = $_POST['room'];
    $image = $newnameimg;

    $file = fopen('data.txt', 'a');
    $data = "$first_name:$last_name:$username:$password:$password_confirmation:$email:$country:$room:$image\n";
    fwrite($file, $data);
    fclose($file);

    // header('Location:home.php');
}
$formErrors = json_encode($errors);
header("Location:index.php?errors=$formErrors");
