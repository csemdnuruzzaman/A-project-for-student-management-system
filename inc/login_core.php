<?php 
 require("connect.php");
$roll = $_REQUEST['roll'];
$reg = $_REQUEST['reg'];
$query = mysqli_query($connect,"SELECT * FROM std_info WHERE roll='$roll' AND reg='$reg'");
$count = mysqli_num_rows($query);
if($count == 1){
	$info = mysqli_fetch_array($query); 
	session_start();
	$_SESSION['id'] = $info['id'];
	if($info['roll']==$roll){
		if($info['reg']==$reg){
			header("location: ../info.php?id=".$info['id']);
		}else{
			header("location: ../index.php?result=reg");
		}
	}else{
		header("location: ../index.php?result=roll");
	}
	
}else{
	header("location: ../index.php?result=problem");
}
