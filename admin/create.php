<?php
include '../config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Slide</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f1f5f9;">

<div class="container py-5">

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-body p-5">

            <h2 class="mb-4">
                Add New Slide
            </h2>

            <form action="../ajax/insert.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">

                    <label class="form-label">
                        Title
                    </label>

                    <input type="text" name="title" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Description
                    </label>

                    <textarea name="description" rows="5" class="form-control" required></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Category
                    </label>

                    <input type="text" name="category" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Upload Image
                    </label>

                    <input type="file" name="image" class="form-control" required>

                </div>

                <button class="btn btn-primary px-5">
                    Save Slide
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>