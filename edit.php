<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-3">
            <h1>Edit Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-dark">Back</a>
            </div>
        </header>

        <?php
        if (isset($_GET["id"])) { //getting id of book selected
            $id = $_GET["id"];

            include("connect.php");
            $sql = "SELECT * FROM books WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

        ?>

            <form action="process.php" method="post" class="my-4">
                <div class="form-element mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $row["title"]; ?>" placeholder="title">
                </div>

                <div class="form-element mb-3">
                    <label for="">Author</label>
                    <input type="text" class="form-control" name="author" value="<?php echo $row["author"]; ?>" placeholder="author name">
                </div>

                <div class="form-element mb-3">
                    <label for="">Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="">Select Book Type</option>
                        <!--code to check if any of the type $row['type'] is selected -->
                        <option value="Adventure" <?php if ($row['type'] == "Adventure") {
                                                        echo "selected";
                                                    } ?>>Adventure</option>
                        <option value="Sci Fi" <?php if ($row['type'] == "Sci Fi") {
                                                    echo "selected";
                                                } ?>>Sci Fi</option>
                        <option value="Fantasy" <?php if ($row['type'] == "Fantasy") {
                                                    echo "selected";
                                                } ?>>Fantasy</option>
                        <option value="Horror" <?php if ($row['type'] == "Horror") {
                                                    echo "selected";
                                                } ?>>Horror</option>


                    </select>
                </div>

                <div class="form-element mb-4">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" value="<?php echo $row["description"]; ?>" placeholder="description">

                </div>

                <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <!-- collects row id and to be used in process.php -->

                <div class="d-flex justify-content-between">
                    <div class="form-element mb-3">

                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </div>

                    <div>
                        <input type="reset" value="Clear" class="btn btn-warning">
                    </div>
                </div>

            </form>

        <?php
        }
        ?>

    </div>
</body>

</html>