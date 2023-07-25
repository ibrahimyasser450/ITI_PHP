<?php

session_start();

if (!$_SESSION['logged']) {
    header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Square+Peg&amp;display=swap" rel="stylesheet" />
    <title>sign up</title>
</head>

<body>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php

try {
    echo "
<table class='table'>
 <tr>
 <td>First_name</td>
 <td>Last_name</td>
 <td>User_name</td>
 <td>Password</td>
 <td>Password_Confirmation</td>
 <td>Email</td>
 <td>Country</td>
 <td>Room No</td>
 <td>Image</td>
 <td>Edit</td>
 <td>Delete</td>
 <td>Logout</td>
 </tr>";
    $data = file("data.txt");
    foreach ($data as $value) {
        $user = explode(":", $value);
        echo "<tr>";
        // var_dump($user);
        foreach ($user as $key => $value) {
            if ($key < 8) {
                echo "<td>$value</td>";
            }
        }
        echo "<td> <img src='$user[8]' width='50px' height='60px'></td>";
        echo "<td> <a class='btn btn-warning' href='edit.php?first_name={$user[0]}&last_name={$user[1]}&username={$user[2]}&password={$user[3]}&password_confirmation={$user[4]}&email={$user[5]}&country={$user[6]}&room={$user[7]}&image={$user[8]}'> Edit </a></td>";
        echo "<td> <a class='btn btn-danger' href='delete.php?first_name={$user[0]}&image={$user[8]}'> Delete </a></td>";
        echo "<td> <a class='btn btn-dark' href='logout.php'> Logout </a></td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (Exception $e) {
    echo $e->getMessage();
}

?>