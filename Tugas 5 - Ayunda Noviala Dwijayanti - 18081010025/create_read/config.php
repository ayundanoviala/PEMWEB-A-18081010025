<?php
$host = "localhost";
$user = "root";
$pw = "";
$dbname = "crud";

$mysqli = mysqli_connect($host, $user, $pw, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
