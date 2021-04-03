<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:entry.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ask freely, say freely</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="home_style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light navbg sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img class="img-fluid" alt="Responsive image" src="img/logo3.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto ">
				<li class="l1 nav-item active" >
					<a class="nav-link hover" href="#" style="color:white;">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#bottom_home" style="color:white;">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php" style="color:white;">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php" style="color:white;">Logout</a>
				</li>
			</ul> 
		</div>

	</div>
</nav>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-rise="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/slide1.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">WELCOME</h1>
				<h3>'<?php echo strtoupper($_SESSION['username']) ;?>'</h3>
				<a href="ask.php"><button type="button" class="btn btn-outline-light btn-lg">ASK</button></a>
				<a href="ask.php" ><button type="button" class="btn btn-primary btn-lg">REPLY</button></a>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/slide2.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">Ask Freely</h1>
				<h3><q>The best way
				to have a good idea is
				to have a lot of ideas.
				</q><br>
				</h3>
				<h5><i>Linus Pauling</i></h6>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/slide3.jpg">
			<div class="carousel-caption">
				<h1 class="display-2">Reply Freely</h1>
				<h3>Because <q>If you have knowledge,
				let others light their candles in it.
				</q><br>
				</h3>
				<h5><i>Margaret Fuller</i></h5>
			</div>
		</div>
	</div>
</div>

<!--- Jumbotron -->


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Built with Love.</h1>
		</div>
		<hr class="light">
		<div class="col-12">
			<p class="lead">The main aim to built this website is to provide the best knowledge sharing platform.</p>
		</div>
	</div>
</div>


<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<hr class="light-101">
		<div class="col-20 social padding">
			<a href="https://www.linkedin.com/in/abdeali004" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="https://twitter.com/abdeali004" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/abdeali004" target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="http://lovetocode-resume.herokuapp.com/" target="_blank"><i class="fa fa-google" style="color: #1f1f1f;" onMouseOut="this.style.color='#1f1f1f'" onMouseOver="this.style.color='red'"></i></a>
		</div>
		<hr class="light-101">
	</div>
	
</div>

<!--- Footer -->
<footer>
	<div id='bottom_home' class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<img src="img/logo3.png">
				 <hr class="light">
				 <p><b>Developer:</b></p>
				 <p>Abdeali Stationwala</p>
				 <p>abdeali52.station@gmail.com</p>
				 <p>Indore (M.P.),452012</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Timings</h5>
				<hr class="light">
				<p>Monday-Friday : 10:00am-3:00pm</p>
				 <p>saturday : 10:00am-12:00pm</p>
				 <p>Sunday: Holiday</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Contact</h5>
				<hr class="light">
				<p></p>
				 <p>abdeali52.station@gmail.com</p>
				 <p>+91 97546*****</p>
				 <p>Address</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; quba.com</h5>
				
			</div>
		</div>
	</div>
</footer>



</body>
</html>
