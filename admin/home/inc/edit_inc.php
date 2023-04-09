<?php
include("connect.php");
if(!isset($_REQUEST['id'])){
	header("location: ../index.php");
}
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
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

$query =mysqli_query($connect,"UPDATE std_info SET name='$name',roll='$roll',reg='$reg',email='$email',semester='$semester',technology='$technology',session='$session',institute='$institute',address='$address',dob='$dob',schoolname='$schoolname',gender='$gender' WHERE id='$id'");
if($query){
	header("location: ../index.php?result=success");
}else{
	header("location: ../index.php?result=wrong");
}
