<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create or Add</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-3">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-dark">Back</a>
            </div>
        </header>

        <form action="process.php" method="post" class="my-4">
            <div class="form-element mb-3">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" placeholder="title">
            </div>

            <div class="form-element mb-3">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author" placeholder="author name">
            </div>

            <div class="form-element mb-3">
                <label for="">Type</label>
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Sci Fi">Sci Fi</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Horror">Horror</option>


                </select>
            </div>

            <div class="form-element mb-4">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description" placeholder="description">

            </div>

            <div class="d-flex justify-content-between">
                <div class="form-element mb-3">
                    <input type="submit" name="create" value="Add Book" class="btn btn-primary">
                </div>

                <div>
                    <input type="reset" value="Clear" class="btn btn-warning">
                </div>
            </div>

        </form>
    </div>
</body>

</html>