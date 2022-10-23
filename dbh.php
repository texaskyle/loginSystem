<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "loginSystem";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("connection to the database error");
}