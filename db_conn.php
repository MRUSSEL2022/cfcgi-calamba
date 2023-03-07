<?php
// Database configuration
$servername = "localhost"; // the name of the server where the MySQL database is running
$username = "root"; // the username to login to the MySQL database
$password = ""; // the password to login to the MySQL database
$dbname = "my_db"; // the name of the MySQL database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>