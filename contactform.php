<?php

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['subject'];

    $mailTo = "majkowski.jakub.praca@gmail.com";
    $headers = "Od: " $mailFrom;
    $txt = "Masz nową wiadomość od " .$name ",z e-korepetycje\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html");
}
?>