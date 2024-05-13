<?php

// Establish a database connection
$servername = "db";
$username = "root";
$password = "lionPass";
$database = "booksite";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}