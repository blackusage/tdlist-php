<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Creates a new database if it doesn't exist
$createDbQuery = "CREATE DATABASE IF NOT EXISTS `todolist`";
if ($conn->query($createDbQuery) === TRUE) {
} 
else {
    echo "Error creating database: " . $conn->error . "<br>";
}

$useDbQuery = "USE `todolist`";
if ($conn->query($useDbQuery) === TRUE) {
} 
else {
    echo "Error selecting database: " . $conn->error . "<br>";
}

// Creates a new table with columns if it doesn't exist
$createTableQuery = "CREATE TABLE IF NOT EXISTS`records` (
    `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `name` varchar(17) DEFAULT NULL,
    `is_important` bit DEFAULT NULL,
    `date_created` date DEFAULT NULL
)";
if ($conn->query($createTableQuery) === TRUE) {
} 
else {
    echo "Error creating table: " . $conn->error . "<br>";
}
?>