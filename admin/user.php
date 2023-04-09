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
	<link rel="stylesheet" type="text/css" href="assets/css/index_responsive.css" media="all" />
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="header-title">
					<h2>Create a user</h2>
				</div>
			</div>
		</div>
	</header>
	<div class="middle"> 
		<div class="container"> 
					<div class="middle-box"> 
						<form  action="inc/user_core.php" method="POST">
							<label for="fname">Full Name</label>
							<input required id="fname"class="form-control" type="text" name="fname" placeholder="Full Name" />
							<label for="email">Email</label>
							<input required id="email"class="form-control" type="email" name="email" placeholder=" Email" />
							<label for="pass">Password</label>
							<input required id="pass" type="password" class="form-control" name="pass" placeholder="Password" />
							<div id="show-pass"> 
								<input type="checkbox" id="checkbox" />
								<label for="checkbox" >Show Password</label>
							</div>
							<p style="color:red"><?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="pass"){
										echo"Password was short please try again";
									}
								}
							?></p>
							<input class="" type="submit" value="Create" />
							<p>If you have an account, please <a href="index.php">click here</a></p>
						</form>
					</div>
		</div>
	</div>

<?php 
	require_once("footer.php");
?>