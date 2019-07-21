<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email_address = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $email_address;
    $headers = "From: ".$email_address;
    $txt = "You have received an email from ".$name. ".\n\n".$message;



    mail($to, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
?>