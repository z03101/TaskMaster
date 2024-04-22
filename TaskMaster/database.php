<?php
// Database connection parameters
$host = "localhost";
$dbname = "signup_db";
$username = "root";
$password = "";
// Establishing a new MySQLi database connection
$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
    // Checking for connection errors                 
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}
// Returning the established database connection
return $mysqli;