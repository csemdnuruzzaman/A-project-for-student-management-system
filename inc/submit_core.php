<?php
include("connect.php");
if(!isset($_REQUEST['fname'])){
	header("location: ../add.php");
}
$name = $_REQUEST['fname'];
$roll = $_REQUEST['roll'];
$reg = $_REQUEST['reg'];
$email = $_REQUEST['email'];
$semester = $_REQUEST['semester'];
$technology = $_REQUEST['technology'];
$session = $_REQUEST['session'];
$institute = $_REQUEST['institute'];
$address = $_REQUEST['address'];
$dob = $_REQUEST['dob'];
$schoolname = $_REQUEST['schoolname'];

$gender = $_REQUEST['gender'];




date_default_timezone_set('Asia/Dhaka');
$date = date('d-m-y h:i:s A');
$previous = mysqli_query($connect,"SELECT * FROM std_info");
$info = mysqli_fetch_array($previous);
if($info['roll']==$roll){
	header("location: ../submit.php?result=have");
}else{
$query = mysqli_query($connect,"INSERT INTO std_info (name,roll,reg,email,semester,technology,session,institute,address,dob,schoolname,gender,created) VALUES ('$name','$roll','$reg','$email','$semester','$technology','$session','$institute','$address','$dob','$schoolname','$gender','$date')");
if($query){
	header("location: ../submit.php?result=success");
}else{
	header("location: ../submit.php?result=wrong");
}
}


