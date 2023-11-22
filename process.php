<?php

include("connect.php");

if (isset($_POST["create"])) { //if the Add Book button is clicked

    //use of real escape string toprevent sql injection.
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    $sql = "INSERT INTO books(title, author, type, description) values('$title', '$author', '$type', '$description')";
    $res = mysqli_query($conn, $sql);
    if ($res) {

        session_start();
        $_SESSION["create"] = "Book added successfully";
        header("Location: index.php");
    } else {
        die();
    }
}


if (isset($_POST["update"])) {
    //use of real escape string toprevent sql injection.
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    //pick id sent from edit.php
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sql = "UPDATE books SET title='$title', author='$author', type='$type', description='$description'  WHERE id=$id";
    if (mysqli_query($conn, $sql)) {

        session_start();
        $_SESSION["update"] = "Book updated successfully";
        header("Location: index.php");
    } else {
        die("something went wrong");
    }
}
