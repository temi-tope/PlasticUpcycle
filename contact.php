<?php
if($_POST["submit"]) {
$recipient="ayodeji22ng@gmail.com";
$subject="Plastic Upcycle Message";
$message = $_POST["message"];
$senderEmail = $_POST["email"];
$sender = $_POST["firstname"] + " " + $_POST["lastname"];
$mailBody="Name: $sender\nEmail: $senderEmail\n\nMessage: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}
?>