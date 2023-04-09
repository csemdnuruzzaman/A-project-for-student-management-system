<?php
	require_once("connect.php");
	$uname = $_REQUEST['username'];
	$pass = $_REQUEST['pass'];
	$pass = md5(sha1($pass));
	$query = mysqli_query($connect,"SELECT * FROM user_info WHERE (username='$uname' OR email='$uname') AND pass='$pass'");
	$check = mysqli_num_rows($query);
	$user_info = mysqli_fetch_array($query);
	
	if($check==1){
		if($user_info['pass']==$pass){
			session_start();
			$_SESSION["uname"] = $uname;
			header("location: ../home/index.php");
		}else{
			header("location: ../index.php?result=pass");
		}
	}else{
		header("location: ../index.php?result=uname");
	}