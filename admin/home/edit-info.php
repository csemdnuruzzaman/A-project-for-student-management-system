<?php 
	include('inc/connect.php');
	if(!isset($_REQUEST['id'])){
		header("location: ../index.php");
	}
	$id = $_REQUEST['id'];
	$query = mysqli_query($connect,"SELECT * FROM std_info WHERE id='$id'");
	$info = mysqli_fetch_array($query);
	require_once("header1.php");
?>
	<title>Edit Student Information</title>
	<link rel="stylesheet" type="text/css" href="assets/css/add.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/edit-info.css" media="all" />
<?php
	require_once("header2.php");
?>
<div class="middle-edit-title">
	<div class="container"> 
		<h2>Edit Stduent Information</h2>
	</div>
</div>
<div class="middle-area-std">
	<div class="container">
		<div class="add-student"> 
			<form action="inc/edit_inc.php" method="Post" >
				<input type="hidden" name="id" value="<?php echo $info['id'];?>" />
				<label for="names">Full Name</label>
				<input required value="<?php echo $info['name'];?>" placeholder="Name" name="name" class="form-control" type="text" id="names" />
				<label for="roll">Roll Number</label>
				<input required value="<?php echo $info['roll'];?>"  placeholder="Roll Number" name="roll" class="form-control" type="text" id="roll"/>
				
				<label for="reg">Registation Number</label>
				<input name="reg" required id="reg"  value="<?php echo $info['reg'];?>" placeholder="Registation Number"class="form-control" type="text" id="reg" />
				<div class="semester">
				<label for="reg">Email</label>
				<input required id="reg" name="email" value="<?php echo $info['email'];?>" placeholder="Email Address" class="form-control" type="text" id="reg" />
				<div class="semester">
				<label id="setedobmafeo" for="">Semester</label>
				<select  required value="<?php echo $info['semester'];?>" name="semester" id="">
					<option value="">SELECT</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
				</select>
				</div>
				<div class="technology">
				<label  id="setedobmafeo" for="">Technology</label>
				<select required value="<?php echo $info['technology'];?>" name="technology" id="">
					<option value="">SELECT</option>
					<option value="Computer">Computer</option>
					<option value="Refrigeration and Air Conditioning">Refrigeration and Air Conditioning</option>
					<option value="Civil">Civil</option>
					<option value="Environment">Environment</option>
					<option value="Electronics">Electronics</option>
					<option value="Electrical">Electrical</option>
					<option value="Machnical">Machnical</option>
					<option value="Data Communication">Data Communication</option>
				</select>
				</div>
				
				<label for="sess">Session</label>
				<input  required name="session" value="<?php echo $info['session'];?>"id="sess" class="form-control" type="text" placeholder="Session" />
				
				<label for="ins">Institute Name</label>
				<input required name="institute" value="<?php echo $info['institute'];?>" id="ins" class="form-control" type="text" placeholder="Institute Name" />
				
				
				<label for="add">Address</label>
				<input required name="address" value="<?php echo $info['address'];?>"id="add" class="form-control" type="text" placeholder="Address" />
				
				<div class="dob">
				<label  id="setedobmafeo" for="">Date of Birth</label>
				<input required name="dob" value="<?php echo $info['dob'];?>"type="date" />
				</div>
				
				<label for="school">Previous School Name</label>
				<input required name="schoolname" value="<?php echo $info['schoolname'];?>"id="school" class="form-control" type="text" placeholder="School Name" />
				
				<div class="gender">
				<label for="">Gender</label>
				<input  value="<?php echo $info['gender'];?>"id="gender1" name="gender" type="radio" />
				<label required id="setedobmafeo" for="gender1">Male</label>
				<input id="gender2" name="gender" type="radio" />
				<label id="setedobmafeo"  for="gender2">Female</label>
				<input id="gender3" name="gender" type="radio" />
				<label id="setedobmafeo"  for="gender3">Others</label>
				</div>
				<input type="submit" value="Update" />
			</form>
		</div>
	</div>
</div>






<?php 
	include("footer.php");
?>