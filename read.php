<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        .book-details {
            background: #f5f5f5;
            padding: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1 class="text-info">Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>

        <div class="book-details my-4">
            <?php
            //echo $_GET['id'];
            if (isset($_GET["id"])) { //getting id of selected book
                $id = $_GET["id"];
                include('connect.php');
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                //fetching only one row. 
            }
            ?>
            <h2>Title</h2>
            <p><?php echo $row["title"]; ?></p>

            <h2>Description</h2>
            <p><?php echo $row["description"]; ?></p>

            <h2>Type</h2>
            <p><?php echo $row["type"]; ?></p>

            <h2>Author</h2>
            <p><?php echo $row["author"]; ?></p>

        </div>
    </div>
</body>

</html>