<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "pizzatime";

$conn = new mysqli($servername, $username, $password, $dbname);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

