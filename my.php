<?php

 if (isset($_POST['submit'])) {
     $name= $_POST['name'];
     $subject = $_POST['subject'];
     $mailFrom= $_POST['mail'];
     $message = $_POST['message'];
     

$mailto = "ijazbi@gmail.com";

$headers = "From: ".$mail_from;

$txt = "You have received mail from ".$name.".\n\n".$message;

mail($mailto, $subject, $txt, $headers);

header("Location: contact.php?mailsend");

}
