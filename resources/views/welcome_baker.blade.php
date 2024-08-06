<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Baker</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Hashlious" />


	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ asset('baker_htmlcss/baker_new_theme/css/bootstrap.css') }}">
	<!-- Bootstrap-Core-CSS -->
	<link href="{{ asset('baker_htmlcss/baker_new_theme/css/login_overlay.css') }}" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="{{ asset('baker_htmlcss/baker_new_theme/css/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{ asset('baker_htmlcss/baker_new_theme/css/fontawesome-all.css') }}">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link
		href="fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->


    
    <style>
      .col-lg-6 {
            position: relative;
            width: 100%;
            height: 400px; /* Adjust height as needed */
            overflow: hidden;
        }

        .slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slides {
            display: flex;
            width: 300%; /* 100% per image */
            transition: transform 5s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>

</head>

<body>
	<div class="mian-content">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo text-left">
					<h1>
						<a class="navbar-brand" href="index.html">
							<img src="{{asset('baker_htmlcss/img/logo/android-chrome-512x512-BLACK.png')}}" alt="" class="img-fluid" style="width:50px;height:50px;">
						</a>
					</h1>
				</div>				

				<!-- Navigation Bar START-->

				<div class="menu">
					<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon" />
					<label for="menu-icon"></label>
					<nav class="nav">
						<ul class="pt-5">
							<li><a href="#">Menu</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>

				<!-- Navigation Bar END-->

			</nav>
		</header>
		<!-- //header -->

		
	</div>
	<!-- //main -->

	<!-- banner-bottom -->
	<section class="banner-main-agiles">
		<div class="banner-bottom-w3layouts" id="about">
			<div class="container ">
				<div class="row ">
					<div class="col-lg-6">
						<p class="text-uppercase">A few words</p>
						<h3 class="aboutright">Welcome to our Cakes Bakery</h3>
						<h4 class="aboutright">Experience the essence of homemade goodness at Baker's welcoming bakery</h4>
						<p>At Baker, every recipe is a labor of love, crafted with the finest ingredients and meticulous attention to detail. From our signature cakes to delicate pastries, each item reflects our commitment to excellence and satisfaction. Step into our inviting space and let the aroma of freshly baked goods whisk you away to a world of irresistible flavors. Whether you're celebrating a special occasion or simply treating yourself, Baker promises a delightful experience that lingers in every bite..</p>
						<button type="button" class="btn btn-primary button mt-md-5 mt-4"
							onclick="window.location='about.html'">
							<span>Learn More</span>
						</button>
					</div>
					<div class="col-lg-6 about-img text-lg-enter">
                        <div class="slides">
                            <img src="{{asset('baker_htmlcss/baker_new_theme/images/product1.jpg')}}" alt="Image 1">
                            <img src="{{asset('baker_htmlcss/baker_new_theme/images/product2.jpg')}}" alt="Image 2">
                            <img src="{{asset('baker_htmlcss/baker_new_theme/images/product5.jpg')}}" alt="Image 3">
                        </div>
					</div>
				</div>
			</div>


		</div>
		<!-- //banner-bottom-w3layouts -->
		<div class="some-another text-center pb-5">
			<div class="container pb-xl-5 pb-lg-3">
				<i class="fas fa-utensils"></i>
				<p class="text-uppercase mb-4 mt-2">A few words about our Site</p>
				<h4 class="aboutright about-right-2">There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure..</h4>
				<h5 class="text-uppsecase font-weight-bold text-dark mt-4">AslanAsilon
					<span class="text-secondary font-weight-normal">(Founder)</span>
				</h5>
			</div>
		</div>
		<!-- cake -->
		<img src="{{asset('baker_htmlcss/baker_new_theme/images/cake7.png')}}" alt="" class="img-fluid cake-style">

		<!-- //cake -->
	</section>

	<!-- services -->
	<div class="serives-agile py-5 bg-light border-top" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="far fa-heart"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Made With Love</h5>
					<p>For even the smallest favor.</p>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-4">
					<i class="fas fa-birthday-cake"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Seasonal Pastries</h5>
					<p>Indulge in our freshly baked treats crafted with care and creativity.</p>
				</div>
				<div class="col-md-4 support-grid">
					<i class="far fa-calendar"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Event Catering</h5>
					<p>A variety of high-quality breads and pastries at competitive prices.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- stats section -->
	<div class="middlesection-agile ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center pt-4">
					<img src="{{asset('baker_htmlcss/baker_new_theme/images/women.png')}}" alt="" class="img-fluid women-style" />
				</div>
				<div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0 py-5">
					<div class=" py-xl-5 py-lg-3">
						<h2 class="title-2 text-white mb-sm-5 mb-4">Some Statistical Facts</h2>
						<div class="row mb-xl-5 mb-4">
							<div class="col-4 w3layouts_stats_left w3_counter_grid">
								<p class="counter">1680</p>
								<p class="para-text-w3ls text-light">Popularity</p>
							</div>
							<div class="col-4 w3layouts_stats_left w3_counter_grid2">
								<p class="counter">1200</p>
								<p class="para-text-w3ls text-light">Happy Customers</p>
							</div>
							<div class="col-4 w3layouts_stats_left w3_counter_grid1">
								<p class="counter">400</p>
								<p class="para-text-w3ls text-light">Awards Won</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //stats section -->

	<!-- new products -->
	<div class="featured-section py-5" id="products">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">New Products</h3>
				<p>A variety of high-quality breads and cakes at competitive prices.</p>
			</div>
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Strawberry Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Strawberry cakes are delightful confections that perfectly capture the essence of summer. These cakes typically feature layers of moist vanilla or sponge cake, generously filled and topped with fresh strawberries or strawberry-flavored cream.</p>
									<p>The vibrant red strawberries not only lend a burst of color but also impart a sweet and tangy flavor that complements the lightness of the cake. Often adorned with whipped cream or frosting and garnished with additional strawberries, these cakes are a treat for both the eyes and the palate. Whether enjoyed as a centerpiece for celebrations or as a simple indulgence, strawberry cakes offer a refreshing and decadent dessert experience.</p>
									<a href="order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/product1.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Dessert Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Dessert cakes are the epitome of indulgence and celebration in the world of baking. These cakes go beyond mere sustenance; they are crafted to delight and satisfy the senses. Typically richer and more decadent than everyday cakes, dessert cakes come in a variety of flavors and styles to suit every occasion and palate.</p>
									<p>Imagine sinking your fork into a velvety slice of chocolate fudge cake, where each bite melts in your mouth with a perfect balance of sweetness and cocoa richness. Or picture the intricate layers of a tiramisu cake, infused with coffee and mascarpone cheese, offering a delicate play of flavors and textures.</p>
									<a href="order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/product2.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Vanilla Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Vanilla cakes are timeless classics that embody simplicity and elegance in the world of baking. These cakes are beloved for their delicate flavor, which is derived from the aromatic vanilla bean or extract. They serve as a versatile canvas for a variety of culinary creations, from rustic homemade cakes to intricate wedding masterpieces.</p>
									<p>A typical vanilla cake features a light and airy texture, achieved through careful blending of flour, sugar, butter, eggs, and of course, vanilla. The fragrance of vanilla permeates each bite, offering a subtle sweetness that is both comforting and sophisticated. Vanilla cakes are often layered with smooth buttercream frosting or whipped cream, enhancing their moist and tender crumb.</p>
									<a href="order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/product3.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Roller Coaster</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Roller Coaster Cakes are whimsical and imaginative creations that bring the thrill of an amusement park ride to the world of baking. These cakes are characterized by their playful design, resembling the twists, turns, and loops of a roller coaster track. They are often crafted with layers of moist cake in various flavors and colors, intricately stacked to mimic the dynamic motion of a roller coaster in mid-flight.</p>
									<p>Typically, Roller Coaster Cakes feature gravity-defying elements such as fondant or sugar sculptures of roller coaster cars, riders, and steep drops. These intricate details are meticulously crafted by skilled pastry chefs, showcasing their creativity and attention to detail. Some designs even incorporate edible roller coaster tracks made from chocolate or fondant, adding a touch of realism to the whimsical structure.</p>
									<a href="order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/product4.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">Chocolate Cakes</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Chocolate cakes are indulgent delights that hold a special place in the hearts of dessert lovers worldwide. These cakes are celebrated for their rich, decadent flavor derived from cocoa, creating a sensory experience that is both comforting and luxurious. From simple homemade versions to elaborate gourmet creations, chocolate cakes come in a variety of forms to suit every occasion and preference.</p>
									<p>A classic chocolate cake is characterized by its moist and tender crumb, achieved through the perfect balance of cocoa powder or melted chocolate, flour, sugar, butter, and eggs. The aroma of chocolate fills the air as it bakes, promising a treat that satisfies both cravings and senses. Chocolate cakes are often layered with velvety chocolate ganache, smooth buttercream frosting, or whipped cream, enhancing their indulgent texture and taste.</p>
									<a href="order" class="button-3 active mt-5 py-4 scroll">Order Now</a>
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/product5.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //new products	-->

	<!-- news -->
	<div class="news-agile bg-cream py-5" id="news">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<!-- order form -->
				<div class="col-lg-4 order-form-w3ls pl-lg-0" id="order">
					<div class="agile_its_registration bg-white">
						<h3 class="title-2 mb-3">Order a Cake</h3>
						<p class="mb-4">Place your order today and treat yourself or your loved ones to a deliciously decadent experience.</p>
						<form action="#" method="post">
							<div class="agileits-location form-group">
								<label>Shape</label>
								<select required>
									<option value="">Round</option>
									<option value="1">rectangle</option>
									<option value="2">square</option>
									<option value="2">custom</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location w3ls-1 form-group">
								<label>Levels</label>
								<select required>
									<option value="">1</option>
									<option value="1">2</option>
									<option value="2">3</option>
									<option value="2">4</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location form-group">
								<label>Size</label>
								<select required>
									<option value="">4 inch</option>
									<option value="">6 inch</option>
									<option value="">8 inch</option>
									<option value="">10 inch</option>
								</select>
								<div class="clear"></div>
							</div>
							<div class="agileits-location w3ls-1 form-group">
								<label>Flavor</label>
								<select required>
									<option value="">Chocolate</option>
									<option value="">Butterscotch </option>
									<option value="">Strawberry</option>
									<option value="">Vanilla</option>
								</select>
								<div class="clear"></div>
							</div>
							<input type="submit" value="Order" class="agileinfo-order btn" />
						</form>
					</div>
				</div>
				<!-- //order form -->
				<!-- news -->
				<div class="col-lg-8 news-blog mt-lg-0 mt-5">
					<h3 class="title-2 mb-md-5 mb-4">Company News</h3>
					<div class="row">
						<div class="col-sm-6 news-grids-agile">
							<div class="news-top">
								<a href="">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/news1.jpg')}}" alt="" class="img-fluid" />
								</a>
							</div>
							<div class="price-bottom bg-white p-4">
								<a href="" class="text-dark">Sep 21st, 2024</a>
								<h5 class="mt-3">Sit voluptatem accusantium doloremque</h5>
							</div>
						</div>
						<div class="col-sm-6 news-grids-agile mt-sm-0 mt-5">
							<div class="news-top">
								<a href="">
									<img src="{{asset('baker_htmlcss/baker_new_theme/images/news2.jpg')}}" alt="" class="img-fluid" />
								</a>
							</div>
							<div class="price-bottom bg-white p-4">
								<a href="" class="text-dark">Sep 21st, 2024</a>
								<h5 class="mt-3">Sit voluptatem accusantium doloremque</h5>
							</div>
						</div>
					</div>
					<!-- //news -->
					<!-- faqs -->
					<div class="faq-w3agile mt-5" id="faqs">
						<h3 class="title-2 mb-md-5 mb-4">Frequently asked questions</h3>
						<ul class="faq list-unstyled">
							<li class="item1">
								<a href="" title="click here" class="text-dark border-bottom pb-3">Consectetur
									adipiscing sit elitipsum nec?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
											sed diam nonummy nibh euismod
											tincidunt ut laoreet dolore.
											At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
											praesentium voluptatum deleniti
											atque
											corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
											non provident.</p>
									</li>
								</ul>
							</li>
							<li class="item2 my-3">
								<a href="" title="click here" class="text-dark border-bottom pb-3">The standard Lorem
									Ipsum passage Etiam?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4"> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum
											dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy
											nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod
											accusamus et iusto odio dignissimos
											ducimus
											qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
											et quas molestias excepturi sint
											occaecati
											cupiditate non provident.</p>
									</li>
								</ul>
							</li>
							<li class="item3 my-3">
								<a href="" title="click here" class="text-dark border-bottom pb-3">Ut semper nisl ut
									laoreet ultrices?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4">Dincidunt ut laoreet dolore At vero eos et Lorem ipsum
											dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy
											nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod
											accusamus et iusto odio dignissimos
											ducimus
											qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
											et quas molestias excepturi sint
											occaecati
											cupiditate non provident.</p>
									</li>
								</ul>
							</li>
							<li class="item4">
								<a href="" title="click here" class="text-dark border-bottom pb-3">Sed diam nonummy
									nibh eiusmod faucibus?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3">At vero eos et Lorem ipsum dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy
											nibh euismod consectetuer
											adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio
											dignissimos ducimus qui blanditiis
											praesentium
											voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
											sint occaecati cupiditate non
											provident.</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- //faqs -->
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->

	<!-- support -->
	<div class="serives-agile py-5" id="support">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">Help & Support</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="fas fa-headphones"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Online Support</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2" onclick="window.location='contact.html'">
						<span>Call Us</span>
					</button>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-5">
					<i class="far fa-comments"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Live Chat 24/7</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2 active" onclick="window.location='contact.html'">
						<span>Let's Chart</span>
					</button>
				</div>
				<div class="col-md-4 support-grid">
					<i class="fas fa-question"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Any Questions</h5>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
					<button type="button" class="button button-2" onclick="window.location='contact.html'">
						<span>Learn More</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- support -->

	<!-- footer -->
	<footer class="text-center py-sm-4 py-3">
		<div class="container py-xl-5 py-3">
			<div class="w3l-footer footer-social-agile mb-4">
				<ul class="list-unstyled">
					<li>
						<a href="">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="mx-1">
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fab fa-dribbble"></i>
						</a>
					</li>
					<li class="ml-1">
						<a href="">
							<i class="fab fa-vk"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- copyright -->
			<p class="copy-right-grids text-light my-lg-5 my-4 pb-4">© 2024 Bakery.
			</p>
			<!-- //copyright -->
		</div>
		<!-- chef -->
		<img src="{{asset('baker_htmlcss/baker_new_theme/')}}images/chef.png" alt="" class="img-fluid chef-style" />
		<!-- //chef -->
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/')}}js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- flexisel (for special offers) -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/')}}js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				// responsiveBreakpoints: {
				// 	portrait: {
				// 		changePoint: 480,
				// 		visibleItems: 1
				// 	},
				// 	landscape: {
				// 		changePoint: 640,
				// 		visibleItems: 2
				// 	},
				// 	tablet: {
				// 		changePoint: 768,
				// 		visibleItems: 2
				// 	}
				// }
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- script for tabs -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->

	<!-- stats -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
			e.preventDefault();
			$(this).toggleClass('navicon--active');
			$('.toggle').toggleClass('toggle--active');
		});
	</script>
	<!-- //menu-js -->

	<!-- banner slider -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/image-slider.js')}}"></script>
    <script>

    </script>
	<link rel="stylesheet" type="text/css" href="{{ asset('baker_htmlcss/baker_new_theme/css/image-slider.css') }}">
	<!-- //banner slider -->

	<!-- smooth scrolling -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/SmoothScroll.min.js')}}"></script>
	<!-- move-top -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset('baker_htmlcss/baker_new_theme/js/cakes-bakery.js')}}"></script>

	<script src="{{asset('baker_htmlcss/baker_new_theme/js/bootstrap.js')}}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

    <script>
      const slides = document.querySelector('.slides');
        const images = document.querySelectorAll('.slides img');
        const totalImages = images.length;
        let currentIndex = 0;

        function showNextSlide() {
            currentIndex = (currentIndex + 1) % totalImages;
            const offset = -currentIndex * 100;
            slides.style.transform = `translateX(${offset}%)`;
        }

        setInterval(showNextSlide, 1000); // Change slide every 3 seconds

    </script>


</body>

</html>