<?php

include '../config/db.php';

$id = $_GET['id'];

$query = "SELECT * FROM slides WHERE id='$id'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Slide</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f1f5f9;">

<div class="container py-5">

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-body p-5">

            <h2 class="mb-4">
                Edit Slide
            </h2>

            <form action="../ajax/update.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-3">

                    <label class="form-label">
                        Title
                    </label>

                    <input 
                    type="text" 
                    name="title" 
                    class="form-control"
                    value="<?php echo $row['title']; ?>"
                    required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea 
                    name="description" 
                    class="form-control"
                    rows="5"
                    required
                    ><?php echo $row['description']; ?></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Category
                    </label>

                    <input 
                    type="text"
                    name="category"
                    class="form-control"
                    value="<?php echo $row['category']; ?>"
                    required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Current Image
                    </label>

                    <br>

                    <img 
                    src="../uploads/<?php echo $row['image']; ?>"
                    width="120"
                    class="rounded"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        New Image
                    </label>

                    <input 
                    type="file"
                    name="image"
                    class="form-control"
                    >

                </div>

                <button class="btn btn-primary px-5">
                    Update Slide
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>