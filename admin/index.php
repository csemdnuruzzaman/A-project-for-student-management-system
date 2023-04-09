<?php 
session_start();
	if(isset($_SESSION["uname"])){
		header("location: home/index.php");
	}
	include("header.php");
	
?>
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="header-title">
					<h2>LogIn Here</h2>
				</div>
			</div>
		</div>
	</header>
	<div class="header-last"> 
		<div class="container"> 
			<p>If you are a student <a href="../">Click Here</a></p>
		</div>
	</div>
	<div class="middle"> 
		<div class="container"> 
					<div class="middle-box"> 
						<form  action="inc/login_inc.php" method="POST">
							<label for="uname">Username</label>
							<input required id="uname"class="form-control" type="text" name="username" placeholder="Username or Email" />
							<?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="uname"){
										echo"<span style='color:red'>Username or Email does not mass</span>";
									}
								}							
							?>
							<label for="pass">Password</label>
							<input required id="pass" type="password" class="form-control" name="pass" placeholder="Password" />
							<div id="show-pass"> 
								<input type="checkbox" id="checkbox" />
								<label for="checkbox" >Show Password</label>
							</div>
								<?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="pass"){
										echo"<span style='color:red'>Password does not mass</span>";
									}
								}							
							?>
							<input class="" type="submit" value="LogIn" />
							<p>Create a user <a href="user.php">click here</a></p>
						</form>
					</div>
		</div>
	</div>

<?php 
	require_once("footer.php");
?>