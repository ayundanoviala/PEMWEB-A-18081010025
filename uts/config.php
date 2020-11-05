<?php
$host = "localhost";
$user = "root";
$pw = "";
$dbname = "barokah_minimarket";

$mysqli = mysqli_connect($host, $user, $pw, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
