<?php 
	require_once("header1.php");
	include("inc/connect.php");
	$id = $_REQUEST['id'];
	$query = mysqli_query($connect,"SELECT * FROM std_info WHERE id='$id'");
	$singleinfo = mysqli_fetch_array($query);
?>
	<title>Others Information</title>
	<link rel="stylesheet" type="text/css" href="assets/css/others.css" media="all" />
<?php
	require_once("header2.php");
?>

<section class="others-section">
	<div class="container"> 
		<div class="info"> 
			<ul>
				<li><span>ID NO: </span><?php echo $singleinfo['id']; ?></li>
				<li><span>Name: </span><?php echo $singleinfo['name']; ?></li>
				<li><span>Roll: </span><?php echo $singleinfo['roll']; ?></li>
				<li><span>Registation: </span><?php echo $singleinfo['reg']; ?></li>
				<li><span>Semester: </span><?php echo $singleinfo['semester']; ?></li>
				<li><span>Technology: </span><?php echo $singleinfo['technology']; ?></li>
				<li><span>Session: </span><?php echo $singleinfo['session']; ?></li>
				<li><span>Institute Name: </span><?php echo $singleinfo['institute']; ?></li>
				<li><span>Address: </span><?php echo $singleinfo['address']; ?></li>
				<li><span>Date of Birth: </span><?php echo $singleinfo['dob']; ?></li>
				<li><span>Previous School: </span><?php echo $singleinfo['schoolname']; ?></li>
				<li><span>Gender: </span><?php echo $singleinfo['gender']; ?></li>
				<li><span>Created: </span><?php echo $singleinfo['created']; ?></li>
			</ul>
			<p><a href="index.php">Go Back</a></p>
		</div>
	</div>
</section>


<?php require("footer.php");?>