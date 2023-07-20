<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="mystyle.css" />
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
            <form method="POST" action="home.php" id="user-form" class="signin-form">
                <div class="form-group">
                    <label class="label" for="first-name">First Name</label>
                    <input type="text" class="form-control" placeholder="first-name" id="first-name" name="first_name" required />
                </div>
                <div class="form-group">
                    <label class="label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="last_name" required />
                </div>
                <div class="form-group">
                    <label class="label" for="address">Address</label>
                    <textarea id="address" name="address" class="form-control-address" rows="4" cols="50" style="overflow-y: scroll;" required></textarea>
                </div>
                <div class="form-group">
                    <label class="label" for="country">country</label>
                    <select class="form-control" id="counrty" name="country" required>
                        <option value="" disabled selected>select counrty</option>
                        <option value="cairo">Cairo</option>
                        <option value="alex">Alex</option>
                        <option value="matrouh">Matrouh</option>
                        <option value="aswain">Aswan</option>
                    </select>
                </div>
                <div class="form-group-gender">
                    <label class="label">Gender:</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label class="special1" for="male">Male</label>
                    <input type="radio" id="female" name="Gender" value="female">
                    <label class="special2" for="female">Female</label>
                </div>
                <div class="form-group-skills">
                    <label class="label">Skills:</label>
                    <input type="checkbox" id="php" name="Skills[]" value="php">
                    <label class="special" for="php">PHP</label>
                    <input type="checkbox" id="js" name="Skills[]" value="js">
                    <label class="special" for="js">JS</label>
                    <input type="checkbox" id="mysql" name="Skills[]" value="mysql">
                    <label class="special" for="mysql">MYSQL</label>
                    <input type="checkbox" id="laravel" name="Skills[]" value="laravel">
                    <label class="special" for="laravel">Laravel</label>
                </div>
                <div class="form-group">
                    <label class="label" for="name">username</label>
                    <input type="text" class="form-control" placeholder="username" required id="username" name="user_name" />
                </div>
                <div class="form-group">
                    <label class="label" for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required />
                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer"></i>
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
                </div>
                <div class="form-group">
                    <label class="label" for="department">Department</label>
                    <input type="text" id="department" name="department" class="form-control-department" placeholder="computer science" readonly />
                </div>
                <!-- captcha -->
                <div class="form-group">
                    <h2 id="code">Mb12ds</h2>
                    <input type="text" name="captcha" id="captcha" class="form-control" placeholder="please insert the code" required>
                </div>
                <div>
                    <button type="submit" id="btn">submit</button>
                    <button type="reset" id="btn2">Reset</button>
                </div>

            </form>

        </div>
    </main>
    <script src="myjs.js">
    </script>
</body>

</html>