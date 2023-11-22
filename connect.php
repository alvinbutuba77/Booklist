<?php

$hostname = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "booklist";

$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die();
}
