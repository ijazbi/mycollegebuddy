<?php

 if (isset($_POST['submit'])) {
     $name= $_POST['name'];
     $visitor_email= $_POST['email'];
     $message = $_POST['message'];


     $email_from = 'EasyTutorials@avinashkr.com';

     $email_subject = "New Form Submission";

     $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                          "User Message: $message.\n"; 
     

$emailto = "ijazbi@gmail.com";

$headers = "From: ".$email_from;

$txt = "You have received mail from " .$name.".\n\n".$message;

mail($mailto,$txt,$headers);

header("Location: contact.html");

}
