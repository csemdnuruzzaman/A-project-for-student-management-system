<?php 
	require_once("header1.php");
?>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css" media="all" />
<?php
	require_once("header2.php");
?>
<section class="contact-header">
	<div class="container"> 
		<div class="con-head"> 
			<h2>Contact Here</h2>
			<?php 
						if(isset($_REQUEST['result'])){
							if($_REQUEST['result']=='true'){
								echo "<h4 style='color:#5ff928;font-weight:normal;text-align:center;margin:20px auto;' >Successful Email sent</h4>";
							}else{
								echo "<h4 style='color:red;font-weight:normal;text-align:center;margin:20px auto;' >Something is wrong</h4>";
							}
						}
					?>
		</div>
	</div>
</section>

<section class="contact-section">
	<div class="container"> 
		<div class="contact-all"> 
		
			<form action="inc/contact_core.php" method="post" >
				<input name="name" class="form-control" type="text" Placeholder="Full Name" />
				<input name="email" class="form-control" type="email" Placeholder="Email Address" />
				<input name="subject" class="form-control" type="text" Placeholder="Subject" />
				<textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
				<input type="submit" value="Send" />
			</form>
			<ul>
				<li><a target="_blank" href="https://www.facebook.com/csemdnuruzzaman"><i class="fa-brands fa-facebook-f"></i> </a></li>
				<li><a target="_blank" href="https://www.instagram.com/csemdnuruzzaman"><i class="fa-brands fa-instagram"></i> </a></li>
				<li><a target="_blank" href="https://www.linkedin.com/in/csemdnuruzzaman/"><i class="fa-brands fa-linkedin-in"></i> </a></li>
				<li><a target="_blank" href="https://www.github.com/csemdnuruzzaman"><i class="fa-brands fa-github"></i> </a></li>
				<li><a href="mailto:nuruzzamanpolytechnic@gmail.com"><i class="fa-solid fa-envelope"></i> </a></li>
				<li><a href="tel:01601517325"><i class="fa-solid fa-phone"></i> </a></li>
				<p><i class="fas fa-map-marker-alt"></i>Location: Agardari,Satkhria</p>
			</ul>
		</div>
	</div>
</section>



<?php 
	include("footer.php");
?>