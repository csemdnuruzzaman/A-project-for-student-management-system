<?php
include("inc/connect.php");
if(!isset($_REQUEST['id'])){
	header("location: index.php");
}
$id = $_REQUEST['id'];
$query= mysqli_query($connect,"DELETE FROM std_info WHERE id='$id'");
if($query){
	header("location: edit.php?result=delete");
}else{
	header("location: edit.php?result=notdelete");
}