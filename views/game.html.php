<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
	<head>

		<title>Agency - Home</title>

		<!-- meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		
		<!-- stylesheets -->
		<link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="views/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="views/assets/css/animate.css">
		<link rel="stylesheet" href="views/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="views/assets/css/owl.theme.css">
		<link rel="stylesheet" href="views/assets/css/style.css">


		<!-- scripts -->
		<script type="text/javascript" src="views/assets/js/modernizr.custom.97074.js"></script>

	</head>

	<body>

		<div id="home-page">

			<!-- site-navigation start -->  
			<!--
			<nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
				<div class="container">
					
					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<!-- navbar logo --
						<div class="navbar-brand">
							<span class="sr-only">Avada Pro Agency</span>
							<a href="index.html">
								<img src="views/assets/img/main_logo.png" class="img-responsive center-block" alt="logo">
							</a>
						</div>
						
					</div>

					<div class="collapse navbar-collapse" id="main-nav-collapse">
						<ul class="nav navbar-nav navbar-right text-uppercase">
							<li>
								<a href="index.html"><span>home</span></a>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>pages</span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="about.html">about</a>
									</li>
									<li>
										<a href="service.html">service</a>
									</li>
									<li>
										<a href="portfolio.html">portfolio</a>
									</li>
									<li>
										<a href="gallery.html">gallery</a>
									</li>
									<li>
										<a href="404.html">404 page</a>
									</li>
									<li>
										<a href="coming_soon.html">coming soon</a>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>blog</span></a>
								<ul class="dropdown-menu">
									<li>
										<a href="multiple_blog_left_sidebar.html">multiple with left sidebar</a>
									</li>
									<li>
										<a href="multiple_blog.html">multiple with right sidebar</a>
									</li>
									<li>
										<a href="single_blog_left_sidebar.html">single with left sidebar</a>
									</li>
									<li>
										<a href="single_blog.html">single with right sidebar</a>
									</li>
									<li>
										<a href="single_blog_full_width.html">single full width</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="contact.html"><span>contact</span></a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>
			-->
			<!-- site-navigation end -->


			<!-- header start -->
			<header id="header" class="header-wrapper home-parallax home-fade">
				<div class="header-overlay"></div>
				<div class="header-wrapper-inner">
					<div class="container">

						<div class="welcome-speech">
							<h1>Welcome to our avada agency</h1>
							<p>Everything you need to have in order to build a stunning website</p>
							<a href="#about" class="btn btn-white">
								About
							</a>
							<a href="<? echo $vk_link; ?>" class="btn btn-blue">
								VK Auth
							</a>
						</div><!-- /.intro -->
						
					</div><!-- /.container -->

				</div><!-- /.header-wrapper-inner -->
			</header>
			<!-- /#header -->

			<div class="main-content">

				<!--  begin intro section -->

				<section class="intro bg-light-gray">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<img src="<?php if( $profile_img != "" ) { echo $profile_img; } else { echo "views/assets/img/intro.jpg"; } ?>" class="img-responsive center-block" alt="intro">
							</div>

							<div class="col-md-7">
								<div class="intro-description">
									<h2>avada the best agency for ever</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ante ex, fermentum vel libero eget interdum semper libero. Curabitur egestas, arcu id tempor convallis.
									</p>

									<ul class="points">
										<li>
											<span>
												<i class="fa fa-star"></i>
											</span>
											Vestibulum pulvinar commodo malesuada.
										</li>
										<li>
											<span>
												<i class="fa fa-star"></i>
											</span>
											Pellentesque id massa et ligula convallis porta.
										</li>
										<li>
											<span>
												<i class="fa fa-star"></i>
											</span>
											Vivamus sed nunc sed ligula rhoncus sit amet eu elit.
										</li>
										<li>
											<span>
												<i class="fa fa-star"></i>
											</span>
											Curabitur in ipsum vel ipsum vehicula congue.
										</li>
									</ul> <!-- end of /.points -->

									<a href="#" class="btn btn-slategray">
										purchase
									</a> <!-- /purchase button -->
								</div> <!-- end of /.intro-description -->
							</div>
						</div>
					</div> <!-- end of /.container -->
				</section> 
				<!--  end of intro section -->


				<!--  begin feature section  -->
				<section class="bg-white feature">
					<div class="container">
						<div class="row">

							<div class="col-md-3">
								<div class="feature-content text-center">
									<div class="feature-icon-box">
										<div class="feature-icon center-block">
											<i class="fa fa-laptop"></i>
										</div>
									</div> <!--  end of /.feature-icon-box  -->
									<div class="feature-info">
										<h3 class="feature-heading">Responsive &amp; Multi-purpose</h3>
										<p class="feature-description">
											Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
										</p>  <!--   end of /.feature-description  -->
									</div> <!--   end of /.feature-info  -->
								</div> <!--  end of /.feature-content  -->
							</div>

							<div class="col-md-3">
								<div class="feature-content text-center">
									<div class="feature-icon-box">
										<div class="feature-icon center-block">
											<i class="fa fa-eye"></i>
										</div>
									</div> <!--  end of /.feature-icon-box  -->
									<div class="feature-info">
										<h3 class="feature-heading">Clean &amp; Clear</h3>
										<p class="feature-description">
											Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
										</p>  <!--   end of /.feature-description  -->
									</div> <!--   end of /.feature-info  -->
								</div> <!--  end of /.feature-content  -->
							</div>

							<div class="col-md-3">
								<div class="feature-content text-center">
									<div class="feature-icon-box">
										<div class="feature-icon center-block">
											<i class="fa fa-thumbs-o-up"></i>
										</div>
									</div> <!--  end of /.feature-icon-box  -->
									<div class="feature-info">
										<h3 class="feature-heading">Best UX</h3>
										<p class="feature-description">
											Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
										</p>  <!--   end of /.feature-description  -->
									</div> <!--   end of /.feature-info  -->
								</div> <!--  end of /.feature-content  -->
							</div>

							<div class="col-md-3">
								<div class="feature-content text-center">
									<div class="feature-icon-box">
										<div class="feature-icon center-block">
											<i class="fa fa-star"></i>
										</div>
									</div> <!--  end of /.feature-icon-box  -->
									<div class="feature-info">
										<h3 class="feature-heading">Good Feedback</h3>
										<p class="feature-description">
											Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
										</p>  <!--   end of /.feature-description  -->
									</div> <!--   end of /.feature-info  -->
								</div> <!--  end of /.feature-content  -->
							</div>

						</div>
					</div> <!-- end of /.container -->
				</section>  
				<!--   end of feature section  -->

			</div> <!-- end of /.main-content -->

			<footer>
				<div class="container">
					<div class="row">

						<!-- useful links -->
						<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
							<h4>Useful Links</h4>
							<ul class="row footer-links">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Mobile</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Services</a></li>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-6">
									<li><a href="#">Organization</a></li>
									<li><a href="#">Career</a></li>
									<li><a href="#">Media</a></li>
									<li><a href="#">24/7</a></li>
									<li><a href="#">Right Way</a></li>
								</div>
							</ul>
						</div>

						<!-- recent news -->
						<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
							<h4>Recent News</h4>

							<div class="row footer-news">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<img src="views/assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 1">
								</div>
								<div class="col-md-8 col-sm-4 col-xs-6">
									<div class="row">
										<p class="text-capitalize">
											<a href="#">
												a clear website gives more experience to the visitors
											</a>
										</p>
										<p class="news-date">Dec 12,2015</p>
									</div>
								</div>
							</div> <!-- /.footer-news -->

							<div class="row footer-news">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<img src="views/assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 2">
								</div>
								<div class="col-md-8 col-sm-4 col-xs-6">
									<div class="row">
										<p class="text-capitalize">
											<a href="#">
												a clear website gives more experience to the visitors
											</a>
										</p>
										<p class="news-date">Dec 12,2015</p>
									</div>
								</div>
							</div> <!-- /.footer-news -->
						</div> <!-- /.footer-widget -->

						<!-- news-letter -->
						<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
							<h4>E-News-Letter</h4>

							<p>Sign up for our mailing list to get latest updates and offers</p>
							<div class="input-group margin-bottom-sm">
								<input class="form-control" type="text" placeholder="Email address">
								<span class="input-group-addon">
									<i class="fa fa-paper-plane fa-fw"></i>
								</span>
							</div>
							<p>We respect your privacy</p>
						</div> <!-- /.footer-widget -->

						<!-- about avada agency -->
						<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
							<h4>Avada Agency</h4>

							<p>
								HUGE Website Builder is a big library of pre-designed web elements which help you to create website in few minutes.
							</p>

							<div class="footer-address">
								<p>
									1-800-123-HELLO  <br>
									example@mail.com
								</p>
							</div>

							<div class="row">
								<div class="col-md-12">
									<ul class="footer-share-button">
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul> <!-- /.footer-share-button -->
								</div>
							</div>
						</div> <!-- /.footer-widget -->

					</div>
				</div>
			</footer>


			<!-- footer-navigation start -->  
			<nav class="hidden-xs hidden-sm navbar footer-nav" role="navigation">
				<div class="container">
					
					<div class="navbar-header">
						
						<!-- navbar logo -->
						<div class="navbar-brand">
							<span class="sr-only">&copy;THEMEWAGON</span>
							<a href="index.html">
								&copy;THEMEWAGON
							</a>
						</div>
						<!-- navbar logo -->

					</div><!-- /.navbar-header -->

					<!-- nav links -->
					<div class="collapse navbar-collapse" id="main-nav-collapse">
						<ul class="nav navbar-nav navbar-right text-capitalize">
							<li><a href="#about">
								<span>home</span>
							</a></li>

							<li><a href="#services">
								<span>pages</span>
							</a></li>

							<li><a href="#portfolio">
								<span>features</span>
							</a></li>

							<li><a href="#team">
								<span>portfolio</span>
							</a></li>

							<li><a href="#pricing">
								<span>blog</span>
							</a></li>

							<li><a href="#blog">
								<span>shop</span>
							</a></li>

							<li><a href="#contact">
								<span>contact</span>
							</a></li>
						</ul>
					</div><!-- nav links -->
					
				</div><!-- /.container -->
			</nav>
			<!-- footer-navigation end -->
			
		</div> <!-- end of /#home-page -->

		<!--  Necessary scripts  -->

		<script type="text/javascript" src="views/assets/js/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="views/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="views/assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="views/assets/js/jquery.hoverdir.js"></script>

	</body>
</html>