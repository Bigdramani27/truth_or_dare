<?php
session_start();
require("../controllers/game_controller.php");
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "0";
?>
<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Contact Us </title>


	<link rel='stylesheet' id='hfe-style-css'
		href='../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor8ff8.css?ver=1.6.21'
		type='text/css' media='all' />

	<link rel='stylesheet' id='elementor-frontend-css'
		href='../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
		media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css'
		media='all' />

	<link rel='stylesheet' id='elementor-post-689-css'
		href='../wp-content/uploads/elementor/css/post-6898ba1.css?ver=1698596006' type='text/css' media='all' />
	<link rel='stylesheet' id='hfe-widgets-style-css'
		href='../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend8ff8.css?ver=1.6.21' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-post-726-css'
		href='../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />
	<link rel='stylesheet' id='magnific-popup-css'
		href='../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popupe35d.css?ver=6.3.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css'
		href='../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />
	<link rel='stylesheet' id='mykd-animate-css'
		href='../wp-content/themes/mykd/assets/css/animate.mine35d.css?ver=6.3.2' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-free-css'
		href='../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />

	<link rel='stylesheet' id='flaticon-css' href='../wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mykd-unit-css' href='../wp-content/themes/mykd/assets/css/mykd-unite35d.css?ver=6.3.2'
		type='text/css' media='all' />

	<link rel='stylesheet' id='mykd-core-css' href='../wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
		type='text/css' media='all' />

	<link rel='stylesheet' id='mykd-woo-css' href='../wp-content/themes/mykd/assets/css/mykd-wooe35d.css?ver=6.3.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mykd-style-css' href='../wp-content/themes/mykd/stylee35d.css?ver=6.3.2' type='text/css'
		media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBarlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-tg-flat-icons-css'
		href='../wp-content/plugins/mykd-core/assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
	<script type='text/javascript' src='../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0'
		id='jquery-core-js'></script>
	<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1'
		id='jquery-migrate-js'></script>

	<link rel="icon" href="../wp-content/uploads/2023/10/favicon.png" sizes="32x32" />
	<link rel="icon" href="../wp-content/uploads/2023/10/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="../wp-content/uploads/2023/10/favicon.png" />
</head>

<body>

	<!-- Scroll-top -->
	<button class="scroll__top scroll-to-target" data-target="html">
		<i class="flaticon-right-arrow"></i>
	</button>
	<!-- Scroll-top-end-->



	<!-- header-area -->
	<header>
		<div id="sticky-header" class="tg-header__area transparent-header mykd-menu-has-showing">
			<div class="container custom-container">
				<div class="row">
					<div class="col-12">
						<div class="tgmenu__wrap">
							<nav class="tgmenu__nav">
								<div class="logo">
									<a class="main-logo" href="index.php">
										<img src="../wp-content/themes/mykd/assets/img/logo/logo.png"
											style="max-height: 80px" alt="Logo" />
									</a>
								</div>
								<div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
									<ul id="menu-main-menu" class="navigation">
										<li class="menu-item nav-item">
											<a title="Home" href="../index.php" class="nav-links">Home</a>
										</li>
										<li class="menu-item nav-item">
											<a title="About Us" href="../about-us/index.php" class="nav-links">About
												Us</a>
										</li>
										<li class="menu-item nav-item">
											<a title="Tournament" href="../rank/index.php" class="nav-links">Rank</a>
										</li>
										<li class="menu-item nav-item active">
											<a title="Contact" href="../contact-us/index.php"
												class="nav-links">Contact</a>
										</li>
										<li class="menu-item nav-item">
											<a title="Contact" href="../donate/index.php" class="nav-links">Donate</a>
										</li>
									</ul>
								</div>
								<div class="tgmenu__action d-none d-md-block">
									<ul class="list-wrap">
										<?php if ($username == 0) { ?>
											<li class="header-btn">
												<a href="../login/index.php" class="tg-border-btn">
													<i class="flaticon-edit"></i> ~Login </a>
											</li>
										<?php } else { ?>
											<li class="header-btn">
												<a href="../player-details/index.php" class="tg-border-btn">
													<i class="flaticon-edit"></i> <?php echo $_SESSION['username'] ?> </a>
											</li>
										<?php } ?>
										<li class="side-toggle-icon">
											<span></span>
											<span></span>
											<span></span>
										</li>
									</ul>
								</div>

								<div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="tgmobile__menu">
			<nav class="tgmobile__menu-box">
				<div class="close-btn"><i class="flaticon-swords-in-cross-arrangement"></i></div>
				<div class="nav-logo">
					<a class="main-logo" href="index.php">
						<img src="../wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
							alt="Logo" />
					</a>
				</div>

				<div class="tgmobile__menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
			</nav>
		</div>
		<div class="tgmobile__menu-backdrop"></div>
		<!-- End Mobile Menu -->


		<!-- offCanvas-menu -->
		<div class="offCanvas__wrap">
			<div class="offCanvas__body">
				<div class="offCanvas__top">
					<div class="offCanvas__logo logo">
						<a class="main-logo" href="index.php">
							<img src="../wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
								alt="Logo" />
						</a>
					</div>
					<div class="offCanvas__toggle">
						<i class="flaticon-swords-in-cross-arrangement"></i>
					</div>
				</div>
				<div class="offCanvas__content">
					<h2 class="title">Ask a <span>Question?</span></h2>

					<div class="offCanvas__contact">
						<h4 class="small-title">CONTACT US</h4>
						<ul class="offCanvas__contact-list list-wrap">

							<li><a href="tel:+233 548342821">+233 548342821</a></li>

							<li><a href="mailto:info@webmail.com">a.dramani@aisghana.org</a></li>
						</ul>
					</div>
				</div>

				<div class="offCanvas__copyright">
					<p>Copyright © 2024 - By <span>Dramani Alhassan</span></p>
				</div>

			</div>
		</div>
		<div class="offCanvas__overlay"></div> <!-- offCanvas-menu-end -->

	</header>
	<!-- header-area-end -->

	<!-- main-area -->
	<main class="main-area">


		<!-- breadcrumb-area -->
		<section class="breadcrumb-area " data-background="../wp-content/uploads/2023/10/background2.png">
			<div class="container">
				<div class="breadcrumb__wrapper">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<div class="breadcrumb__content">
								<h2 class="title">Contact Us</h2>
								<nav aria-label="breadcrumb" class="breadcrumb">
									<span><a class="home"><span>Fremoria</span></a>
									</span> &gt; <span>Contact Us</span>
								</nav>
							</div>
						</div>
						<div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
							<div class="breadcrumb__img">
								<img src="../wp-content/uploads/2023/10/contact.png" alt="Shape">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-area-end -->

		<div data-elementor-type="wp-page" data-elementor-id="689" class="elementor elementor-689">
			<div class="elementor-element elementor-element-53645fc e-flex e-con-boxed e-con e-parent">
				<div class="e-con-inner">
					<div class="elementor-element elementor-element-8dab3b6 e-con-full e-flex e-con e-child">
						<div class=" elementor-element elementor-element-b9cbf63 elementor-absolute e-transform elementor-widget
						elementor-widget-tg-heading">
							<div class="elementor-widget-container">
								<h2 class="overlay-title"><span>join us</span></h2>

							</div>
						</div>
						<div class="elementor-element elementor-element-4708c68 elementor-widget elementor-widget-heading"
							data-id="4708c68" data-element_type="widget" data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h2 class="elementor-heading-title elementor-size-default">CONTACT US AND FIND YOUR mykd
								</h2>
								<p>Feel free!!! There isn't anu dumb question(s)</p>
							</div>
						</div>

					</div>
					<div class="elementor-element elementor-element-1f73638 e-con-full e-flex e-con e-child">
						<div class="elementor-widget-container">
							<div class="elementor-shortcode">
								<div class="wpcf7 no-js" id="wpcf7-f13-p689-o1" lang="en-US" dir="ltr">
									<form id='contact'>
										<div class="contact__form-wrap">
											<div class="row">
												<div class="col-sm-6">
													<div class="input-grp">
														<input size="40" class="wpcf7-form-control"
															placeholder="Full name *" type='text' name='full_name' required type="text" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="input-grp">
														<input size="40" class="wpcf7-form-control"
															placeholder="Email *" name='email' type='email' required type="number" />
													</div>
												</div>
											</div>
											<div class="input-grp message-grp">
												<textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
													placeholder="Enter your message" name="message"></textarea>
											</div>
											<button class="submit-btn">Submit Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<footer>
			<div class="elementor elementor-726">
				<div class="elementor-element elementor-element-7f14363 e-flex e-con-boxed e-con e-parent">
					<div class="e-con-inner">
						<div class="elementor-element e-con-full e-flex e-con e-child">
							<h6 class="elementor-heading-title">Copyright © 2024 -
								All Rights Reserved By <span style="color: var(--tg-theme-primary);">Dramani
									Alhassan</span></h6>

						</div>
					</div>
				</div>
			</div>
		</footer>
		</div><!-- #page -->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			$(document).ready(function() {
				$('#contact').submit(function(event) {
					event.preventDefault();
					Swal.fire({
						title: 'Please wait...',
						html: 'Sending Message',
						showConfirmButton: false,
						allowEscapeKey: false,
						allowOutsideClick: false,
						willOpen: () => {
							Swal.showLoading()
						},
					});
					$.ajax({
						type: 'POST',
						url: '../action/contact.php',
						dataType: 'json',
						data: $(this).serialize(),
						success: function(response) {

							// Show success sweet alert
							Swal.fire('Success!', "Thank you for contacting us. We will get back to you soon.", 'success').then((result) => {
								// Reload the Page
								location.reload();
							});

						},
						error: function() {
							// Show error sweet alert
							Swal.fire({
								title: 'Oops!',
								text: 'Something went wrong, please try again later',
								icon: 'error',
							});
						}
					});
				});
			});
		</script>

		<script type='text/javascript'
			src='../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min49eb.js?ver=3.5.2'
			id='magnific-popup-js'></script>

		<script type='text/javascript'
			src='../wp-content/plugins/woo-smart-quick-view/assets/js/frontend49eb.js?ver=3.5.2'
			id='woosq-frontend-js'></script>
		</script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/bootstrap.mine35d.js?ver=6.3.2'
			id='bootstrap-bundle-js'></script>
		<script type='text/javascript' src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4'
			id='imagesloaded-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/isotope.pkgd.mine35d.js?ver=6.3.2'
			id='isotope-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.countdown.mine35d.js?ver=6.3.2'
			id='countdown-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.waypoints.mine35d.js?ver=6.3.2'
			id='waypoints-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.odometer.mine35d.js?ver=6.3.2'
			id='odometer-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/scrollTrigger.mine35d.js?ver=6.3.2'
			id='scrollTrigger-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.appeare35d.js?ver=6.3.2'
			id='appear-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
			id='jarallax-js'></script>

		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/wow.mine35d.js?ver=6.3.2'
			id='wow-js'></script>
		<script type='text/javascript' src='../wp-content/themes/mykd/assets/js/maine35d.js?ver=6.3.2'
			id='mykd-main-js'></script>

		<script type='text/javascript'
			src='../wp-content/plugins/elementor/assets/js/webpack.runtime.min5d63.js?ver=3.17.1'
			id='elementor-webpack-runtime-js'></script>
		<script type='text/javascript'
			src='../wp-content/plugins/elementor/assets/js/frontend-modules.min5d63.js?ver=3.17.1'
			id='elementor-frontend-modules-js'></script>
		<script type='text/javascript'
			src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
			id='elementor-waypoints-js'></script>

		<script>
			jQuery(document).ready(function($) {
				/*===========================================
					=        Click Sound Active		      =
				=============================================*/
				$('.search a, .tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/click.wav').play());
				$('.search__close, .offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/remove.wav').play());
			});
		</script>
</body>

</html>