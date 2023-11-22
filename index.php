<?php
include("connect.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between my-5">
            <h1>Book List</h1>
            <a href="create.php" class="btn btn-primary">Add Book</a>
        </div>


        <?php

        if (isset($_SESSION["create"])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php
                echo $_SESSION["create"];
                unset($_SESSION["create"]);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

            </div>
        <?php
        }
        ?>

        <?php

        if (isset($_SESSION["update"])) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php
                echo $_SESSION["update"];
                unset($_SESSION["update"]);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php
        }
        ?>

        <?php

        if (isset($_SESSION["delete"])) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php
                echo $_SESSION["delete"];
                unset($_SESSION["delete"]);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

            </div>
        <?php
        }
        ?>

        <div class="my-5">
            <table class="table table-responsive table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM books";
                    $res = mysqli_query($conn, $sql); //query the database

                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"]; ?> </td>
                            <td><?php echo $row["title"]; ?> </td>
                            <td><?php echo $row["author"]; ?> </td>
                            <td><?php echo $row["type"]; ?> </td>
                            <td class="d-flex justify-content-between">
                                <a href="read.php?id=<?php echo $row["id"]; ?>" class="btn btn-info mx-2">Read More</a>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning mx-2">Edit</a>
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger mx-2">Delete</a>
                            </td>


                        </tr>

                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</body>

</html>