<?php

$errors = array();
if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors'], true);
}

$first_name = '';
$last_name = '';
$username = '';
$password = '';
$password_confirmation = '';
$email = '';
$country = '';
$room = '';


if (isset($_GET['first_name'])) {
    $first_name = $_GET['first_name'];
}
if (isset($_GET['last_name'])) {
    $last_name = $_GET['last_name'];
}
if (isset($_GET['username'])) {
    $username = $_GET['username'];
}
if (isset($_GET['password'])) {
    $password = $_GET['password'];
}
if (isset($_GET['password_confirmation'])) {
    $password_confirmation = $_GET['password_confirmation'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (isset($_GET['room'])) {
    $room = $_GET['room'];
}
if (isset($_GET['country'])) {
    $country = $_GET['country'];
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
                <h1>Sign up</h1>
            </div>
            <form method="POST" action="show.php" id="user-form" class="signin-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="label" for="first_name">First Name</label>
                    <input type="text" class="form-control" placeholder="first_name" id="first_name" name="first_name" value="<?php echo $first_name; ?>" />
                    <span class="danger"><?php if (isset($errors['first_name'])) {
                                                echo $errors['first_name'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="last_name" value="<?php echo $last_name; ?>" />
                    <span class="danger"><?php if (isset($errors['last_name'])) {
                                                echo $errors['last_name'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="name">username</label>
                    <input type="text" class="form-control" placeholder="username" id="username" name="username" required value="<?php echo $username; ?>" />
                </div>
                <div class="form-group">
                    <label class="label" for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required value="<?php echo $password; ?>" />
                    <span class="danger"><?php if (isset($errors['password'])) {
                                                echo $errors['password'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="password_confirmation">password_confirmation</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="password_confirmation" required value="<?php echo $password_confirmation; ?>" />
                    <span class="danger"><?php if (isset($errors['password_confirmation'])) {
                                                echo $errors['password_confirmation'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" />
                    <span class="danger"><?php if (isset($errors['email'])) {
                                                echo $errors['email'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="country">Country</label>
                    <select class="form-control" id="counrty" name="country" required>
                        <option value="" disabled>select counrty</option>
                        <option value="cairo" <?php if ($country == 'cairo') echo 'selected'; ?>>Cairo</option>
                        <option value="alex" <?php if ($country == 'alex') echo 'selected'; ?>>Alex</option>
                        <option value="matrouh" <?php if ($country == 'matrouh') echo 'selected'; ?>>Matrouh</option>
                        <option value="aswan" <?php if ($country == 'aswan') echo 'selected'; ?>>Aswan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label" for="room">Room no</label>
                    <select class="form-control" id="room" name="room" required>
                        <option value="" disabled>select room</option>
                        <option value="application1" <?php if ($room == 'application1') echo 'selected'; ?>>Application1</option>
                        <option value="application2" <?php if ($room == 'application2') echo 'selected'; ?>>Application2</option>
                        <option value="cloud" <?php if ($room == 'cloud') echo 'selected'; ?>>cloud</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label" for="image">Profile picture</label>
                    <input type="file" id="image" name="image" class="form-control" />
                    <span class="danger"><?php if (isset($errors['image'])) {
                                                echo $errors['image'];
                                            } ?></span>
                </div>
                <div>
                    <button type="submit" id="btn">submit</button>
                    <button type="reset" id="btn2">Reset</button>
                </div>

            </form>

        </div>
    </main>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>