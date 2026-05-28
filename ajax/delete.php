<?php

include '../config/db.php';

$id = $_GET['id'];




$query = "SELECT * FROM slides WHERE id='$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);



$imagePath = "../uploads/" . $row['image'];

if(file_exists($imagePath)){

    unlink($imagePath);

}



$deleteQuery = "DELETE FROM slides WHERE id='$id'";

mysqli_query($conn, $deleteQuery);

header("Location: ../admin/dashboard.php");

?>