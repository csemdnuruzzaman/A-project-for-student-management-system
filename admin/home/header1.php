<?php
	session_start();
	if(!isset($_SESSION["uname"])){
		header("location: ../index.php");
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="../assets/image/favicon.png" />
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../assets/css/all.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/header.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/header_responsive.css" media="all" />
	<script type="text/javascript" src="assets/js/header.js"></script>