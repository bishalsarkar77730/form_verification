<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// database connection
$conn = new mysqli('localhost','root','','bishal');
if($conn->connect_error){
    die('Connection Faild : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, subject, phone, email, message) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",$name, $subject, $phone, $email, $message);
    $stmt->execute();
    echo "registration Successfuly.......";
    $stmt->close();
    $conn->close();
}
?>