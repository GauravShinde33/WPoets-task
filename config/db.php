<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "wpoets_task";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>