<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "majkowski.jakub.praca@gmail.com";
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Message sent successfully. We will contact you shortly.');</script>";
    } else {
        echo "<script>alert('Error: Unable to send message. Please try again later.');</script>";
    }
}
?>