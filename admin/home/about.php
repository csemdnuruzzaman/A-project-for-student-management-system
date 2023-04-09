<?php 
	require_once("header1.php");
?>
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="assets/css/about.css" media="all" />
<?php
	require_once("header2.php");
?>

<section class="about-section">
	<div class="container">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:100px;" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../assets/image/1.png" alt="Los Angeles" style="width:100%;height:550px;">
        <div class="carousel-caption">
          <h3>Graphics Design</h3>
          <p>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs and focus on the logic of displaying elements in interactive designs, to optimize the user experience.</p>
        </div>
      </div>

      <div class="item">
        <img src="../assets/image/2.avif" alt="Chicago" style="width:100%;height:550px;">
        <div class="carousel-caption">
          <h3>Web Design</h3>
          <p>Web designing is the process of planning, conceptualizing, and implementing the plan for designing a website in a way that is functional and offers a good user experience. User experience is central to the web designing process. Websites have an array of elements presented in ways that make them easy to navigate.</p>
        </div>
      </div>
    
      <div class="item" >
        <img src="../assets/image/3.webp" alt="New York" style="width:100%;height:550px;">
        <div class="carousel-caption">
          <h3>Web Development</h3>
          <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	</div>
</section>

<?php 
	include("footer.php");
?>