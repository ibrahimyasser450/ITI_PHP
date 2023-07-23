<?php
$errors = array();
$skills = implode(',', $_POST['skills']);
$captcha = $_POST["captcha"];



if ($captcha === "Mb12ds") {

    if (!isset($_POST['first_name']) or empty($_POST['first_name'])) {
        $errors['first_name'] = 'First_name is Required';
    } elseif (!isset($_POST['last_name']) or empty($_POST['last_name'])) {
        $errors['last_name'] = 'Last_name is Required';
    } elseif (!isset($_POST['gender']) or empty($_POST['gender'])) {
        $errors['gender'] = 'Gender is Required';
    } elseif (!isset($_POST['email']) or empty($_POST['email'])) {
        $errors['email'] = 'Email is Required';
    } else {
        $data = $_POST['first_name'] . ':' . $_POST['last_name'] . ':' . $_POST['address'] . ':' . $_POST['country'] . ':' . $_POST['gender'] . ':' . $skills . ':' . $_POST['username'] . ':' . $_POST['password'] . ':' . $_POST['email'] . ':' . $_POST['department'] . "\n";
        file_put_contents('data.txt', $data, FILE_APPEND);
        // header('Location:home.php');
    }
    $formErrors = json_encode($errors);
    header("Location:index.php?errors=$formErrors");
} else {
    echo "Captcha not correct";
}
