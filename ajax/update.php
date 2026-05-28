<?php

include '../config/db.php';

$id = $_POST['id'];

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];




if($_FILES['image']['name'] != ""){

    $imageName = time() . "_" . $_FILES['image']['name'];

    $tmpName = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmpName, "../uploads/".$imageName);

    $query = "UPDATE slides 
    SET 
    title='$title',
    description='$description',
    category='$category',
    image='$imageName'
    WHERE id='$id'";

}else{

    $query = "UPDATE slides 
    SET 
    title='$title',
    description='$description',
    category='$category'
    WHERE id='$id'";

}

mysqli_query($conn, $query);

header("Location: ../admin/dashboard.php");

?>