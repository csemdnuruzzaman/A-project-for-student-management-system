<?php 
	require_once("header1.php");
?>
<title>Submit your information</title>
<link rel="stylesheet" type="text/css" href="admin/home/assets/css/add.css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/submit.css" media="all" />
<?php 
	require_once("header2.php");
?>

<div class="middle-edit-title">
	<div class="container"> 
		<h2>Submit your information</h2>
	</div>
</div>
<div class="middle-area-std">
	<div class="container">
		<div class="add-student"> 
			<form action="inc/submit_core.php" method="Post" >
				<p><?php 
					if(isset($_REQUEST['result'])){
						if($_REQUEST['result']=="success"){
							echo"<span style='color:#66ffa2;font-size:25px;' >Information submitted successfully</span>";
						}else if($_REQUEST['result']=="have"){
							echo"<span style='color:red;font-size:25px;' >Already you have submitted information</span>";
						}else{
							echo"<span style='color:red;font-size:25px;' >Something is wrong</span>";
						}
					}
				?></p>
				<label for="names">Full Name</label>
				<input required placeholder="Name" name="fname" class="form-control" type="text" id="names" />
				<label for="roll">Roll Number</label>
				<input required placeholder="Roll Number" name="roll" class="form-control" type="text" id="roll"/>
				
				<label for="reg">Registation Number</label>
				<input required id="reg" name="reg" placeholder="Registation Number"class="form-control" type="text" id="reg" />
				<label for="email">Email</label>
				<input required id="reg" name="email" placeholder="Email Address"class="form-control" type="email" id="email" />
				<div class="semester">
				<label id="setedobmafeo" for="">Semester</label>
				<select required name="semester" id="">
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
				<select required name="technology" id="">
					<option value="">SELECT</option>
					<option value="Computer">Computer</option>
					<option value="RAC">RAC</option>
					<option value="Civil">Civil</option>
					<option value="Environment">Environment</option>
					<option value="Electronics">Electronics</option>
					<option value="Electrical">Electrical</option>
					<option value="Machnical">Machnical</option>
					<option value="Data Communication">Data Communication</option>
				</select>
				</div>
				
				<label for="sess">Session</label>
				<input required id="sess" name="session" class="form-control" type="text" placeholder="Session" />
				
				<label for="ins">Institute Name</label>
				<input required id="ins" name="institute" class="form-control" type="text" placeholder="Institute Name" />
				
				
				<label for="add">Address</label>
				<input required id="add" class="form-control" name="address" type="text" placeholder="Village, Upazila, District " />
				
				<div class="dob">
				<label  id="setedobmafeo" for="">Date of Birth</label>
				<input required name="dob" type="date" />
				</div>
				
				<label for="school">Previous School Name</label>
				<input required name="schoolname" id="school" class="form-control" type="text" placeholder="School Name" />
				
				<div class="gender">
				<label for="">Gender</label>
				<input id="gender1" required value="Male" name="gender" type="radio" />
				<label id="setedobmafeo" for="gender1">Male</label>
				<input id="gender2" required value="Female" name="gender" type="radio" />
				<label id="setedobmafeo"  for="gender2">Female</label>
				<input id="gender3" required value="Others" name="gender" type="radio" />
				<label id="setedobmafeo"  for="gender3">Others</label>
				</div>
				<input type="submit" value="Submit" />
				<p id="data" >If you have already submitted the information <a href="index.php">Click Here</a></p>
			</form>
		</div>
	</div>
</div>



<?php 
	require_once("footer.php");
?>