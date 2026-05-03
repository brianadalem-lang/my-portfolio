<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "your-email@example.com";
    $subject = "New Portfolio Message from $name";
    
    mail($to, $subject, $message, "From: $email");
    echo "Message Sent!";
}
?>