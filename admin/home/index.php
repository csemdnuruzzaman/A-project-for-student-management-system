<?php 
	require_once("header1.php");
	include("inc/connect.php");

?>
	<title>Student Information</title>
<?php
	require_once("header2.php");
?>

	<section class="header-section">
		<div class="container">
			<div class="header-title">
				<h2>All Student Information here.</h2>
					<?php 
						if(isset($_REQUEST['result'])){
							if($_REQUEST['result']=='success'){
								echo "<h4 style='color:#5ff928;font-weight:normal;text-align:center;' >Successful Information updated</h4>";
							}else{
								echo "<h4 style='color:red;font-weight:normal;text-align:center;' >Something is wrong</h4>";
							}
						}
					?>
			</div>
		</div>
	</section>
	<section class="student-info">
		<div class="container"> 
		<div class="table-search"> 
			<form action="" method="post">
				<input name="search" class="form-control" id="search" type="search" placeholder="Search" />
				<label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
			</form>
		</div>
		<div class="search"> 
			<h4>
				<?php 
					if(isset($_REQUEST['search'])){
						echo "Search : ".$_REQUEST['search'];
					}
				?>
			</h4>
		</div>
			<table class="table">
				<thead>
					<tr>
						<th>ID NO</th>
						<th>Name</th>
						<th>Roll</th>
						<th>Registation</th>
						<th>Semester</th>
						<th>Technology</th>
						<th>Session</th>
						<th>Institute Name</th>
						<th>Others</th>
					</tr>
				</thead>
				<tbody> 
				<?php
				if(isset($_REQUEST['search'])){
					$search =$_REQUEST['search']; 
					$query=mysqli_query($connect,"SELECT * FROM std_info WHERE (name LIKE'%$search%') OR (roll LIKE'%$search%') OR (reg LIKE'%$search%') OR (technology LIKE'%$search%') OR (institute LIKE'%$search%') OR (semester LIKE'%$search%') OR (session LIKE'%$search%')");
				}else{
					$query=mysqli_query($connect,"SELECT * FROM std_info");
				}
					while($stdinfo=mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $stdinfo['id'];?></td>
						<td><?php echo $stdinfo['name'];?></td>
						<td><?php echo $stdinfo['roll'];?></td>
						<td><?php echo $stdinfo['reg'];?></td>
						<td><?php echo $stdinfo['semester'];?></td>
						<td><?php echo $stdinfo['technology'];?></td>
						<td><?php echo $stdinfo['session'];?></td>
						<td><?php echo $stdinfo['institute'];?></td>
						<td><a href="others.php?id=<?php echo $stdinfo['id'];?>">see more</a></td>
					</tr>
					<?php 
						}
					
					?>
				</tbody>
			</table>
		</div>
	</section>
	
<?php require_once("footer.php");
?>