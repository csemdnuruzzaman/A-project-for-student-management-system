<?php
if(!isset($_REQUEST['name'])){
	header("location: ../contact.php");
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


$to = "nuruzzamanpolytechnic@gmail.com";
$headers = "From: ".$email . "\r\n" .
"CC: nuruzzamanpolytechnic@gmail.com";

$operation = mail($to,$subject.$name,$message,$headers);
if($operation){
	header("location: ../contact.php?result=true");
}else{
	header("location: ../contact.php?result=false");
}