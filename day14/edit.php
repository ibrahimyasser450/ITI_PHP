<?php
// Set up a connection to the MySQL database
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "iti_php";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    header("location:displayusers.php");
}
// Get the customer record from the database
$sql = "SELECT * FROM customers WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



// Check if a customer ID is provided in the URL
if (!isset($_GET['id'])) {
    die("No customer ID provided");
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $roomNumber = $_POST['roomNumber'];
    $picture = $_POST['picture'];

    // Update the customer record in the database
    $sql = "UPDATE customers SET name='$name', email='$email', roomNumber='$roomNumber', picture='$picture' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("location:displayusers.php");
    }
}
// Close the connection to the MySQL database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Customer</title>
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

    <div class="container">
        <h1>Edit Customer Record</h1>
        <form method="post" action="#">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required value="<?php echo $row['email'] ?>">
                <span class="error" id="email_error"><?php echo isset($_SESSION['email_error']) ? $_SESSION['email_error'] : ''; ?></span>
            </div>

            <div class="form-group">
                <label for="room_number">Room Number:</label>
                <select class="app_input" id="roomNumber" name="roomNumber" required value="<?php echo $row['roomNumber'] ?>">
                    <option value="Application1">Application1</option>
                    <option value="Application2">Application2</option>
                    <option value="Cloud">Cloud</option>
                </select>
            </div>

            <div class="form-group">
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" id="profile_picture" name="picture" accept="image/*" value="<?php echo $row['picture'] ?>" required>
                <span class="error"><?php echo isset($_SESSION['profile_picture_error']) ? $_SESSION['profile_picture_error'] : ''; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" value="edit">
            </div>
        </form>
    </div>
</body>

</html>