<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | Ejaz Gazi</title>
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
</head>
<body>

<div class="container px-0 border border-top-0">
	<!-- navbar start -->
	<nav class="navbar container navbar-expand-lg navbar-dark fixed-top text-uppercase">
			<a class="navbar-brand site_name ml-lg-5" href="/">E J <span class="text-danger">A</span> Z</a>
		<button class="navbar-toggler bg-transparent border-white navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
		    <i class='lni lni-menu'></i>
		</button>
		<div class="collapse navbar-collapse" id="navMenu">
			<ul class="navbar-nav ml-lg-auto mr-lg-4">
				<li class="nav-item active nav_menu">
					<a href="#" class="btn btn-outline-dark rounded-0 py-2">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-about" class="btn btn-outline-dark rounded-0 py-2" >About</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-offers" class="btn btn-outline-dark rounded-0 py-2">Services</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-menu" class="btn btn-outline-dark rounded-0 py-2">Skills</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-bookings" class="btn btn-outline-dark rounded-0 py-2">Education</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-gallery" class="btn btn-outline-dark rounded-0 py-2">Experience</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-contact" class="btn btn-outline-dark rounded-0 py-2">Work</a>
				</li>
				<li class="nav-item active nav_menu">
					<a href="#section-contact" class="btn btn-outline-dark rounded-0 py-2">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- navbar end -->

	<!-- slider start -->
	<div class="container-fluid px-0">
		<div id="sliderIndicator" class="carousel slide mb-5 mb-lg-0" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				    <img src="{{asset('public/images/image.jpg')}}" class="w-100 h-100 overlay" alt="...">
				    <div class="carousel-caption d-none d-md-block">
			    		<h1 class="display-1 text-left text-white animate__animated animate__fadeInDownBig animate__slow">Hi!<p>This Is Ejaz</p></h1>
				    </div>
				</div>
				<div class="carousel-item">
				    <img src="{{asset('public/images/image.jpg')}}" class="w-100 h-100 overlay" alt="...">
				    <div class="carousel-caption d-none d-md-block">
			    		<h1 class="display-1 text-left text-white animate__animated animate__fadeInDownBig animate__slow">Hi!<p>This Is Ejaz1</p></h1>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider end -->
</div>

</body>
</html>

<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/js/script.js')}}"></script>
<script src="{{asset('public/js/main.js')}}"></script>
