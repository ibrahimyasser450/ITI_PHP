<?php

$errors = array();
if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors'], true);
}

$first_name = '';
$last_name = '';
$address = '';
$country = '';
$gender = '';
$skills = [];
$username = '';
$password = '';
$email = '';
$department = '';

if (isset($_GET['first_name'])) {
    $first_name = $_GET['first_name'];
}
if (isset($_GET['last_name'])) {
    $last_name = $_GET['last_name'];
}
if (isset($_GET['address'])) {
    $address = $_GET['address'];
}
if (isset($_GET['country'])) {
    $country = $_GET['country'];
}
if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
}
if (isset($_GET['skills'])) {
    $skills = explode(',', $_GET['skills']);
}
if (isset($_GET['username'])) {
    $username = $_GET['username'];
}
if (isset($_GET['password'])) {
    $password = $_GET['password'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (isset($_GET['department'])) {
    $department = $_GET['department'];
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
            <form method="POST" action="show.php" id="user-form" class="signin-form">
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
                    <label class="label" for="address">Address</label>
                    <textarea id="address" name="address" class="form-control-address" rows="4" cols="50" style="overflow-y: scroll;" required value="<?php echo $address; ?>"></textarea>
                </div>
                <div class="form-group">
                    <label class="label" for="country">Country</label>
                    <select class="form-control" id="counrty" name="country" required>
                        <option value="" disabled selected>select counrty</option>
                        <option value="cairo">Cairo</option>
                        <option value="alex">Alex</option>
                        <option value="matrouh">Matrouh</option>
                        <option value="aswan">Aswan</option>
                    </select>
                </div>
                <div class="form-group-gender">
                    <label class="label">Gender:</label>
                    <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>>
                    <label class="special1" for="male">Male</label>
                    <input type="radio" id="female" name="Gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
                    <label class="special2" for="female">Female</label>
                    <span class="danger"><?php if (isset($errors['gender'])) {
                                                echo $errors['gender'];
                                            } ?></span>
                </div>
                <div class="form-group-skills">
                    <label class="label">Skills:</label>
                    <input type="checkbox" id="php" name="skills[]" value="php" <?php if (in_array('php', $skills)) echo 'checked'; ?>>
                    <label class="special" for="php">PHP</label>
                    <input type="checkbox" id="js" name="skills[]" value="js" <?php if (in_array('js', $skills)) echo 'checked'; ?>>
                    <label class="special" for="js">JS</label>
                    <input type="checkbox" id="mysql" name="skills[]" value="mysql" <?php if (in_array('mysql', $skills)) echo 'checked'; ?>>
                    <label class="special" for="mysql">MYSQL</label>
                    <input type="checkbox" id="laravel" name="skills[]" value="laravel" <?php if (in_array('laravel', $skills)) echo 'checked'; ?>>
                    <label class="special" for="laravel">Laravel</label>
                </div>
                <div class="form-group">
                    <label class="label" for="name">username</label>
                    <input type="text" class="form-control" placeholder="username" id="username" name="username" required value="<?php echo $username; ?>" />
                </div>
                <div class="form-group">
                    <label class="label" for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required value="<?php echo $password; ?>" />
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" />
                    <span class="danger"><?php if (isset($errors['email'])) {
                                                echo $errors['email'];
                                            } ?></span>
                </div>
                <div class="form-group">
                    <label class="label" for="department">Department</label>
                    <input type="text" id="department" name="department" class="form-control" placeholder="department" required value="<?php echo $department; ?>" />
                </div>
                <!-- captcha
                <div class="form-group">
                    <h2 id="code">Mb12ds</h2>
                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="please insert the code" required>
                </div> -->
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