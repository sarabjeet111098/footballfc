<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject =$_POST ['subject'];
$message= $_POST['message'];

$email_from = 'sarabjeet1110983@mail.com';
$email_subject='new form submission';
$email_body="User Name: $name.\n".
            "User Email : $email.\n".
            "Subject : $subject.\n".
            "User Message: $message.\n";

$to = 'sarabjeet1110983@gmail.com' ;

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:Contact.html");
?>