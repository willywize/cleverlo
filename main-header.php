<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Cleverlo | Learning Everything</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">

<link rel="stylesheet" href="css/colors/main.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>


				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="index.php">Home</a></li>

						<li><a href="workshop.php">Workshops</a></li>

						<li><a href="creative-corner.php">Creative Corner</a></li>

						<li><a href="cart.php" class="visible-xs">Cart</a></li>

						<li><a href="sign-in.php" class="visible-xs">Sign In</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side hidden-xs">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="button border with-icon sign-in popup-with-zoom-anim">Sign In <i class="sl sl-icon-login"></i></a>
					<a href="cart.php" class="button border with-icon"><i class="sl  sl-icon-basket"></i> Cart</a>

				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Sign In</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login">

								<p class="form-row form-row-wide">
									<label for="username">Username:
										<i class="im im-icon-Male"></i>
										<input type="text" class="input-text" name="username" id="username" value="" />
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">Password:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password"/>
									</label>
									<span class="lost_password">
										<a href="#" >Lost Your Password?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="check">
										<label for="remember-me">Remember Me</label>
									</div>
								</div>

							</form>
						</div>

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">
						<div class="container">
								<div class="col-md-12">
									<div class="categories-boxes-container margin-top-5 margin-bottom-30">

										<!-- Box -->
										<a href="form-reg-creator.php" class="category-small-box">
											<i class="im im-icon-Palette"></i>
											<h4>Content Creator</h4>
										</a>

										<!-- Box -->
										<a href="form-reg-planner.php" class="category-small-box">
											<i class="im im-icon-Cinema"></i>
											<h4>Workshop Planner</h4>
										</a>
								</div>
							</div>
						</div>
<!-- Category Boxes / End -->

					</div>
				</div>
			</div>
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
