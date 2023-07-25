<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="logo">logo</div>
        <ul class="nav-items">
            <li><a href="displayusers.php">Show All Users</a></li>
            <li><a href="index.php">Registration</a></li>
        </ul>
    </nav>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Room Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
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

        // Construct a SELECT statement to fetch all data from a table
        $sql = "SELECT * FROM customers";

        // Execute the SELECT statement and retrieve the result set into a variable
        $result = mysqli_query($conn, $sql);

        // Check if the SELECT statement was successful
        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        // Fetch all the rows from the result set into an array
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Close the connection to the MySQL database
        mysqli_close($conn);



        foreach ($rows as $row) {
            echo "<tr>";

            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["roomNumber"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'><button class='editButton'>Edit</button></a></td>";
            echo "<td><a href='delete.php?id=" . $row["id"] . "'><button class='deleteButton'>Delete</button></a></td>";
            echo "</tr>";
        }

        if (count($rows) == 0) {
            header("location:index.php");
        }
        ?>
    </table>
</body>

</html>