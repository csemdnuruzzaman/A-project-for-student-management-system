<?php
	require("connect.php");
	$name = $_REQUEST['fname'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$password=$pass;
	$pass = md5(sha1($pass));
	$username = substr($email,0,5).substr($pass,0,4);
	if(strlen($password)>=8){
	$query = mysqli_query($connect,"INSERT INTO user_info(name,email,pass,username) VALUES('$name','$email','$pass','$username')");
	header("location: ../username.php?email=".$email);
	}else{
		header("location: ../user.php?result=pass");
	}
	