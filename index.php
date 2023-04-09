<?php 
	include("header1.php");
	session_start();
	if(isset($_SESSION['id'])){
		header("location: info.php");
	}
	?>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<?php
	include("header2.php");
?>
	<header class="header">
		<div class="container">
			<div class="header-area">
				<div class="header-title">
					<h2>Student LogIn Here</h2>
				</div>
			</div>
		</div>
	</header>
	<section class="header-footer"> 
		<div class="container"> 
			<p>If you are an admin <a href="admin/">Click Here</a></p>
		</div>
	</section>
	<div class="middle"> 
		<div class="container"> 
					<div class="middle-box"> 
						<form  action="inc/login_core.php" method="POST">
							<label for="roll">Roll Number</label>
							<input required id="roll" class="form-control" type="number" name="roll" placeholder="Roll Number" />
							<?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="roll"){
										echo"<span style='color:red'>Roll Number does not mass</span>";
									}
								}							
							?>
							<label for="reg">Registation Number</label>
							<input required id="reg" type="number" class="form-control" name="reg" placeholder="Registation Number" />
								<?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="reg"){
										echo"<span style='color:red'>Registation Number does not mass</span>";
									}
								}							
							?>
								<?php 
								if(isset($_REQUEST['result'])){
									if($_REQUEST['result']=="problem"){
										echo"<span style='color:red'>There is no account in this roll</span>";
									}
								}							
							?>
							<input class="" type="submit" value="LogIn" />
							<p>Submit your information <a href="submit.php">click here</a></p>
						</form>
					</div>
		</div>
	</div>


<?php
	require_once("footer.php");

?>