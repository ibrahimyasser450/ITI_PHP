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
 <td>Address</td>
 <td>Country</td>
 <td>Gender</td>
 <td>Skills</td>
 <td>User_name</td>
 <td>Password</td>
 <td>Email</td>
 <td>Department</td>
 <td>Edit</td>
 <td>Delete</td>
 </tr>";
    $data = file("data.txt");
    foreach ($data as $value) {
        $user = explode(":", $value);
        echo "<tr>";
        foreach ($user as $value) {
            echo "<td>$value</td>";
        }
        echo "<td> <a class='btn btn-warning' href='editdelete.php?first_name=$user[0]&last_name=$user[1]&address=$user[2]&country=$user[3]&gender=$user[4]&skills=$user[5]&username=$user[6]&password=$user[7]&email=$user[8]&department=$user[9]'> Edit </a></td>";
        echo "<td> <a class='btn btn-danger' href='deleteuser.php?first_name=$user[0]'> Delete </a></td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (Exception $e) {
    echo $e->getMessage();
}

?>