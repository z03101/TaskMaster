<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


//Database conection

$conn = new mysqli('localhost','root','','signup_db');
if($conn->connect_error){
    die('Connection Faile : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users_info(name, email, password)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$name, $email, $password);
    $stmt->execute();
    echo "signup successfully...";
    $stmt->close();
    $conn->close();
}

?>