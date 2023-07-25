<?php
    $user_id = $_GET["id"];
            // Set up a connection to the MySQL database
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "iti_php";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


    // Construct the DELETE statement and execute it
    $sql = "DELETE FROM customers WHERE id = $user_id";
    (mysqli_query($conn, $sql));
    // Close the connection to the MySQL database
    mysqli_close($conn);

    header("location:displayusers.php");
