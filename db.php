<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Kamuiru_High_School-main";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}