<?php
class db
{

    function __construct()
    {
    }

    public function connect($dbname)
    {
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check if database exists
        $result = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'");
        if (mysqli_num_rows($result) == 0) {
            // Create database
            $sql = "CREATE DATABASE $dbname";
            mysqli_query($conn, $sql);
        }

        // Select database
        mysqli_select_db($conn, $dbname);

        // Check connection
        return $conn;
    }
    public function insert($conn, $table_name, $user_data)
    {

        // Check if table exists
        $table_name = "customers";
        $result = mysqli_query($conn, "SHOW TABLES LIKE '$table_name'");
        if (mysqli_num_rows($result) == 0) {
            // Create table
            $sql = "CREATE TABLE $table_name (
                    id INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(255),
                    email VARCHAR(255) unique,
                    password VARCHAR(255),
                    roomNumber VARCHAR(255),
                    picture VARCHAR(255)
                )";
            mysqli_query($conn, $sql);
        }

        $query = "SELECT * FROM customers WHERE email='" . $user_data['email'] . "'";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if (!$result) {
            die("Error executing query: " . mysqli_error($conn));
        }

        if (mysqli_fetch_assoc($result) == NULL) {
            // Insert data into database
            $sql = "INSERT INTO $table_name (name, email, password, roomNumber, picture)
                    VALUES ('$user_data[name]', '$user_data[email]', '$user_data[password]', '$user_data[roomNumber]', '$user_data[profile_picture]')";
            $conn->query($sql);

            header("location:displayusers.php");
        } else {
            header("location:index.php");
        }
    }

    public function edit($conn, $tname, $id, $name, $email, $roomNumber, $picture)
    {
        // Get the customer record from the database
        $sql = "SELECT * FROM $tname WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // Update the customer record in the database
        $sql = "UPDATE $tname SET name='$name', email='$email', roomNumber='$roomNumber', picture='$picture' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            header("location:displayusers.php");
        }
    }


    public function delete($conn, $tname, $id)
    {
        // Construct the DELETE statement and execute it
        $sql = "DELETE FROM $tname WHERE id = $id";
        (mysqli_query($conn, $sql));
        // Close the connection to the MySQL database
        mysqli_close($conn);

        header("location:displayusers.php");
    }
}
