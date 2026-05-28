<?php

include '../config/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];

$image = $_FILES['image']['name'];

$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "../uploads/".$image);

$query = "INSERT INTO slides(title,description,category,image)
VALUES('$title','$description','$category','$image')";

mysqli_query($conn,$query);

header("Location: ../admin/dashboard.php");

?>