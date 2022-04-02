<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "registration";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    //     echo "Successfully";
    // } else {
    die("Error" . mysqli_connect_error());
}