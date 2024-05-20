<?php

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['subject'];

    $mailheader = "From:".$name."<".$email.">\r\n";

    $recipient = "majkowski.jakub.praca@gmail.com";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!");

    echo"message sent";

    ?>