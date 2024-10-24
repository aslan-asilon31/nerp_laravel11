<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<meta name="keywords" content="EscrowBChain">
  	<meta name="description" content="Niche Home Decor, Accessories, Clothing, Kitchen & Bar, Art, Gifts">
  	<link rel="icon" type="image/png" href="{{asset('Niche-master/niche_assets/images/niche-star.png')}}"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
  	<link rel="stylesheet" type="text/css" href="{{asset('Niche-master/niche_assets/css/style.css')}}"> 

  	<title>@yield('title') </title>
</head>
<body>
<header>
	<h1 hidden>Welcome to @yield('title') Website</h1>
	<div class="bg-img">
		<nav class="navbar navbar-expand-md navbar-light fixed-top navi " style="background-color:#8300a3;">
				<ul class="navbar-nav navi-list" style="margin-right: auto;">
					  <a class="navbar-brand" href="index.html"><img src="volti_assets/images/logo.png" alt="Baker Logo" style="width: 100px; height: 50px;" class="logo desktop-logo" /></a>   
				</ul>
		</nav>
	</div>
</header>
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
<main>
	@yield('content')
</main>
<br/><br/>
<footer class="niche-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-10 offset-1">							
				<div class="row">
					<div class="col-md-3">
						<p class="footer-title">Get to know us</p>
						<p class="footer-info">Privacy Policy</p>
						<p class="footer-info">Terms & Conditions</p>
					</div>
					<div class="col-md-3">
						<p class="footer-title">Info</p>
						<p class="footer-info">FAQs</p>
						<p class="footer-info">Return Policy</p>
						<p class="footer-info">Contact Us</p>
					</div>
					<div class="col-md-3">
						<p class="footer-title">Account</p>
						<p class="footer-info">My Account</p>
						<p class="footer-info">My orders</p>
						<p class="footer-info">Order Tracking</p>
						<p class="footer-info">Gift Card Balance</p>
					</div>
					<div class="col-md-3">
						<p class="footer-title">Designers</p>
						<p class="footer-info">Become a Designer</p>
						<p class="footer-info">Dashboard</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script src="{{asset('Niche-master/niche_assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('Niche-master/niche_assets/js/scrolling-nav.js')}}"></script>


<script>
	$(function () {
		$(document).scroll(function () {

		  	var $nav = $(".fixed-top");
		  	var $nav_img = $('.navbar-brand img');
	  		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	  		if ($(document).scrollTop() > $nav.height()) {
		        $nav_img.attr("src","{{asset('Niche-master/volti_assets/images/logo.png')}}");
		    } else {
		        $nav_img.attr("src","{{asset('Niche-master/volti_assets/images/logo.png')}}");
		    }
		});
	});


	// var slider = document.getElementById("myRange");
	// var output = document.getElementById("demo");
	// output.innerHTML = slider.value;
	// slider.oninput = function() {
	// 	output.innerHTML = this.value;
	// }

	var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");

    // Set initial value
    output.innerHTML = slider.value;

    // Update value when slider input changes
	slider.oninput = function() {
		if (this.value >= 1000) {
			output.innerHTML = "1 Milyar";
		} else if (this.value >= 2000) {
			output.innerHTML = "2 Milyar";
		} else if (this.value >= 3000) {
			output.innerHTML = "3 Milyar";
		} else if (this.value >= 4000) {
			output.innerHTML = "4 Milyar";
		} else if (this.value >= 5000) {
			output.innerHTML = "5 Milyar";
		} else {
			output.innerHTML = this.value + " Juta";
		}
	};


	
</script>

</body>
</html>