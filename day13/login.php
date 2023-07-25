<?php

$errors = array();
if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors'], true);
}

$username = '';
$password = '';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
}
if (isset($_GET['password'])) {
    $password = $_GET['password'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Square+Peg&amp;display=swap" rel="stylesheet" />
    <title>sign up</title>
</head>

<body>
    <main class="main-section">
        <div class="login-wrap">
            <div class="Sign-up">
                <h1>Log in</h1>
            </div>
            <form method="POST" action="validate.php" id="user-form" class="signin-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="label" for="name">username</label>
                    <input type="text" class="form-control" placeholder="username" id="username" name="username" />
                    <span class="danger"><?php if (isset($errors['username'])) {
                                                echo $errors['username'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" />
                    <span class="danger"><?php if (isset($errors['password'])) {
                                                echo $errors['password'];
                                            } ?></span>
                </div>
                <div>
                    <button type="submit" id="btn-login">submit</button>
                </div>

            </form>

        </div>
    </main>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>