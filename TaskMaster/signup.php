<?php
// Check if the 'name', 'email', and 'password' fields are set in the form submission
if(isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    // Handle the case when any of the required fields are not set or empty
    echo "All fields are required.";
    exit(); // Stop further execution
}

// Include the database connection
require __DIR__ . "/database.php";

$conn = new mysqli('localhost', 'root', '', 'signup_db');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users_info (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    
    // Check if the insertion was successful
    if($stmt->affected_rows > 0) {
        header("Location: TaskMaster-MB.html");
    } else {
        echo "Error registering user.";
    }
    
    $stmt->close();
    $conn->close();
}
?>
