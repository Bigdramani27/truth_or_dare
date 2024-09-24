<?php 
session_start();
require ("../controllers/game_controller.php");
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "0";
if($_SESSION['user_role'] != 19){
   header("Location: ../404/");
}
$profile = $_SESSION['profile'];
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Admin</title>
    <link rel='stylesheet' id='hfe-style-css'
        href='../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor8ff8.css?ver=1.6.21'
        type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-frontend-css'
        href='../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />

    <link rel='stylesheet' id='elementor-post-726-css'
        href='../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css'
        href='../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />

    <link rel='stylesheet' id='font-awesome-free-css'
        href='../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-bundle-css'
        href='../wp-content/themes/mykd/assets/css/swiper-bundlee35d.css?ver=6.3.2' type='text/css' media='all' />

    <link rel='stylesheet' id='flaticon-css' href='../wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-spacing-css' href='../wp-content/themes/mykd/assets/css/spacinge35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-core-css' href='../wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-unit-css' href='../wp-content/themes/mykd/assets/css/mykd-unite35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-woo-css' href='../wp-content/themes/mykd/assets/css/mykd-wooe35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-style-css' href='../wp-content/themes/mykd/stylee35d.css?ver=6.3.2' type='text/css'
        media='all' />

    <link rel='stylesheet' id='elementor-icons-tg-flat-icons-css'
        href='../wp-content/plugins/mykd-core/assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1'
        id='jquery-migrate-js'></script>



    <link rel="icon" href="../wp-content/uploads/2023/10/favicon.png" sizes="32x32" />
    <link rel="icon" href="../wp-content/uploads/2023/10/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../wp-content/uploads/2023/10/favicon.png" />
    <meta name="msapplication-TileImage" content="https://themedox.com/mykd/wp-content/uploads/2023/10/favicon.png" />
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
                                        <li class="menu-item nav-item">
                                            <a title="Contact" href="../contact-us/index.php"
                                                class="nav-links">Contact</a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a title="Donate" href="../donate/index.php" class="nav-links">Donate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action d-none d-md-block">
                                <ul class="list-wrap">
                                        <?php if($username == 0){ ?>
                                        <li class="header-btn">
                                            <a href="../login/index.php" class="tg-border-btn">
                                                <i class="flaticon-edit"></i> ~Login </a>
                                        </li>
                                        <?php } else { ?>
                                            <li class="header-btn">
                                            <a href="../player-details/index.php" class="tg-border-btn">
                                                <i class="flaticon-edit"></i> <?php echo $_SESSION['username']?> </a>
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
                            <li><a href="https://bigdramani27.github.io/My-Profile/">View other projects</a></li>
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

    <!-- main-area -->
    <main class="main-area">


        <!-- breadcrumb-area -->
        <section class="breadcrumb-area " data-background="../wp-content/themes/mykd/assets/img/bg/breadcrumb_bg02.jpg">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="breadcrumb__content">
                                <h2 class="title">Admin</h2>
                                <nav aria-label="breadcrumb" class="breadcrumb">
                                    <span><a class="home"><span>Fremoria</span></a>
                                    </span> &gt; <span>Admin</span>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="<?php echo $profile?>" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <div class="tg-page-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tg-page-content mykd-page-content">
                            <div class="tp-page-post">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <div class="row justify-content-center">

                                        <div class="col-lg-6">
                                            <div class="tg-woo-form-wrap tg-woo-form-login">
                                                <h2>Add a Game</h2>
                                                <form class="contact__form-wrap" id='add_task'>

                                           
                                                <div class="input-grp message-grp">
                                                <label>Add Task&nbsp;<span style="color:red">*</span></label>
												<textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
													placeholder="Enter your task" name="task" required></textarea>
											</div>
                                            <div class="input-grp">
                                            <label>Enter number of points&nbsp;<span style="color:red">*</span></label>
														<input size="40" class="wpcf7-form-control"
															placeholder="Points here*" name='point' required type="text" />
													</div>
                                                    <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" >
                                                        <label>Truth or Dare&nbsp;<span style="color:red">*</span></label>
                                                        <select class="form-control input-grp" required='true' name='truth_dare'>
                                                            <option value="" disabled selected value="">Select the option</option>
                                                            <option value="Truth">Truth</option>
                                                            <option value="Dare">Dare</option>
                                                        </select>
                                                    </p>
                                                    <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide" >
                                                        <label>Type of Game&nbsp;<span style="color:red">*</span></label>
                                                        <select class="form-control input-grp" required='true' name='type'>
                                                            <option value="" disabled selected value="">Select the option</option>
                                                            <option value="simple">Simple</option>
                                                            <option value="crazy">Crazy</option>
                                                            <option value="horny">Horny</option>
                                                            <option value="sick_fuck">Sick Fuck</option>
                                                        </select>
                                                    </p>
                                                    

                                                    <p class="form-row">

                                                        <button type="submit"
                                                            class="woocommerce-button button woocommerce-form-login__submit">Add a Game</button>
                                                    </p>

                                                </form>
                                            </div>
                                        </div>

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
			$('#add_task').submit(function(event) {
				event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '../action/add_task.php',
                    dataType: 'json',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            // Show success sweet alert
                            Swal.fire('Success!', response.message, 'success').then((result) => {
                                // Reload the Page
                                location.reload();
                            });
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
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

     

        <script>
            jQuery(document).ready(function ($) {
                /*===========================================
                    =        Click Sound Active		      =
                =============================================*/
                $('.search a, .tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/click.wav').play());
                $('.search__close, .offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/remove.wav').play());
            });
        </script>
</body>

</html>