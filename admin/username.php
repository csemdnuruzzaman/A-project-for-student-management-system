<?php 
	include("inc/connect.php");
	if(isset($_REQUEST['email'])){
	$email = $_REQUEST['email'];
	$query=mysqli_query($connect,"SELECT * FROM user_info WHERE email='$email'");
	$info = mysqli_fetch_array($query);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create a user</title>
	<link rel="icon" type="image/x-icon" href="assets/image/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<script type="text/javascript" src="assets/js/jquery-3.6.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/username_responsive.css" media="all" />
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="header-title">
					<h2>Successful your Account</h2>
				</div>
			</div>
		</div>
	</header>
	<div class="middle"> 
		<div class="container"> 
					<div class="middle-box"> 
						<form  action="inc/user_core.php" method="POST">
							<label for="fname">Name: <?php echo $info['name'];?></label>
							<label for="email">Email: <?php echo $info['email'];?></label>
	<label for="pass">Username: <?php echo $info['username'];}else{
		header('location: user.php');
	}?></label>
							<p>LogIn <a href="index.php">click here</a></p>
						</form>
					</div>
		</div>
	</div>

<?php 
	require_once("footer.php");
?>