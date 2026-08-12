<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email address'];
$number= $_POST['phone'];
$message= $_POST['message'];
$to = "kamaudant@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  phone number= " . $number . "\r\n Message =" . $message ;
$headers = "From:morningfl@yoursite.com" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>