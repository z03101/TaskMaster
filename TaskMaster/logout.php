<?php
// Including the database connection file
include('database.php');

// Starting the session
session_start();

// Destroying the session
session_destroy();

// Redirecting to index.php after destroying the session
header('Location: index.php');
exit;
?>

