<?php
include("dbsql.php");
if ($_GET['id']) {
    $id = $_GET['id'];
} else {
    header("location:displayusers.php");
}

$dbconn = new db();
$conn = $dbconn->connect("iti_php");

$dbconn->delete($conn, "customers", $id);
