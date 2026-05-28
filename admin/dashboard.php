<?php
include '../config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

</head>

<body>

<div class="container py-5">



    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <div>
            <h1 class="fw-bold mb-1">
                Manage Slides
            </h1>

            <p class="text-muted">
                WPoets Premium Admin Dashboard
            </p>
        </div>

        <div class="d-flex gap-2">

            <a href="../index.php" class="btn btn-dark px-4">
                <i class="fa fa-home me-2"></i>
                Back To Home
            </a>

            <a href="create.php" class="btn btn-primary px-4">
                <i class="fa fa-plus me-2"></i>
                Add Slide
            </a>

        </div>

    </div>

    <table class="table table-bordered">

        <thead>

            <tr>

                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>

            </tr>

        </thead>

        <tbody>

        <?php

        $query = "SELECT * FROM slides";

        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result)){
        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td>
                <img src="../uploads/<?php echo $row['image']; ?>" width="80">
            </td>

            <td><?php echo $row['title']; ?></td>

            <td><?php echo $row['category']; ?></td>

          <td>

    <a 
    href="edit.php?id=<?php echo $row['id']; ?>" 
    class="btn btn-warning btn-sm"
    >
        Edit
    </a>

    <a 
    href="../ajax/delete.php?id=<?php echo $row['id']; ?>" 
    class="btn btn-danger btn-sm"
    onclick="return confirm('Are you sure you want to delete this slide?')"
    >
        Delete
    </a>

</td>

        </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>