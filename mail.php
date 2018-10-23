<?php

if($_POST["submit"]) {
    $recipient="bnoeltorres@gmail.com";
    $subject="Form to email message";
    $highschool=$_POST["high-school"];
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $graduationdate=$_POST["graduation-date"];
    $location=$_POST["location"];
    $sports=$_POST["sports"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>