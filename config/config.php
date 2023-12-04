<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "digital_madarsa_1.0";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>