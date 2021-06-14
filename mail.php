<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$body = $_POST['body'];
$to = "mohammadsd97@mail.com";
$subject = "Mail about hotel";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $body;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>