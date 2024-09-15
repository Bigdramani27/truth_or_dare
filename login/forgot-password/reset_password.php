<?php 
require ("../../controllers/game_controller.php");
session_start();
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";

$pass = isset($_SESSION['pass'])  ? $_SESSION['pass'] : "";
 if($pass == true ){
 header('Location: ../../index.php');
 }
 if($_SESSION['confirmed_email'] == false){
    header('Location: ../index.php');
 }
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Reset Password &#8211; MYKD</title>
    <link rel='stylesheet' id='hfe-style-css'
        href='../../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor8ff8.css?ver=1.6.21'
        type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-frontend-css'
        href='../../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='../../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-689-css'
        href='../../wp-content/uploads/elementor/css/post-6898ba1.css?ver=1698596006' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='../../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend8ff8.css?ver=1.6.21'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-726-css'
        href='../../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='../../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popupe35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='../../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-animate-css'
        href='../../wp-content/themes/mykd/assets/css/animate.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='../../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css'
        media='all' />

    <link rel='stylesheet' id='flaticon-css' href='../../wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-core-css' href='../../wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-woo-css' href='../../wp-content/themes/mykd/assets/css/mykd-wooe35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-style-css' href='../../wp-content/themes/mykd/stylee35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBarlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-tg-flat-icons-css'
        href='../../wp-content/plugins/mykd-core/assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
    <script type='text/javascript' src='../../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1'
        id='jquery-migrate-js'></script>

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
                                        <img src="../../wp-content/themes/mykd/assets/img/logo/logo.png"
                                            style="max-height: 40px" alt="Logo" />
                                    </a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul id="menu-main-menu" class="navigation">
                                        <li class="menu-item nav-item">
                                            <a title="Home" href="../../index.php" class="nav-links">Home</a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a title="About Us" href="../../about-us/index.php" class="nav-links">About
                                                Us</a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a title="Tournament" href="../../rank/index.php"
                                                class="nav-links">Rank</a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a title="Contact" href="../../contact-us/index.php"
                                                class="nav-links">Contact</a>
                                        </li>
                                        <li class="menu-item nav-item">
                                            <a title="Donate" href="../../donate/index.php"
                                                class="nav-links">Donate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <li class="header-btn">
                                            <a href="../../login/index.php" class="tg-border-btn">
                                                <i class="flaticon-edit"></i> ~Login </a>
                                        </li>
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
                        <img src="../../wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
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
                            <img src="../../wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
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


    <!-- main-area -->
    <main class="main-area">


        <!-- breadcrumb-area -->
        <section class="breadcrumb-area "
            data-background="../../wp-content/uploads/2023/10/background4.png">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="breadcrumb__content">
                                <h2 class="title">Reset Password</h2>
                                <nav aria-label="breadcrumb" class="breadcrumb">
                                    <span><a class="home"><span>MYKD</span></a>
                                    </span> &gt; <span>Reset Password</span>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="../../wp-content/uploads/2023/10/about.png"
                                    alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <div class="tg-page-area pt-120 pb-120" style="margin-top:50px;">
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
                                                <h2>Reset Password!</h2>
                                                <form id='reset'>

                                                    <p
                                                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                        <label for="user_login">Password</label>
                                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                            type="password"  name='password' id='password' required />
                                                    </p>
                                                    <div id="password-requirements" style="display: none;">
                                                                <ul>
                                                                    <li id="length">At least 8 characters</li>
                                                                    <li id="capital">At least one uppercase letter (from A-Z)</li>
                                                                    <li id="small">At least one lowercase letter (from a-z)</li>
                                                                    <li id="number">At least one number (0-9)</li>
                                                                    <li id="special">At least one symbol or special character</li>
                                                                </ul>
                                                            </div>
                                                    <p
                                                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                        <label for="user_login">Confirm Password</label>
                                                        <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                            type="password"  name='c_password' required />
                                                    </p>


                                                    <p class="woocommerce-form-row form-row">
                                                        <button type="submit" class="woocommerce-Button button" name="reset">Reset
                                                            Password</button>
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
                $('#reset').submit(function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: '../../action/reset_password.php',
                        dataType: 'json',
                        data: $(this).serialize(),
                        success: function(response) {
                            if (response.success) {
                                // Show success sweet alert
                                Swal.fire('Successful!', response.message, 'success').then((result) => {
                                    // Reload the Page
                                    location.reload();
                                });
                            } else {
                                // Show error sweet alert
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
          
            // Function to check password requirements
            function checkPassword() {
                var password = document.getElementById("password").value;
                var requirements = {
                    length: password.length >= 8,
                    capital: /[A-Z]/.test(password),
                    small: /[a-z]/.test(password),
                    number: /[0-9]/.test(password),
                    special: /[^A-Za-z0-9]/.test(password)
                };

                // Update requirement list color
                for (var req in requirements) {
                    var element = document.getElementById(req);
                    if (requirements[req]) {
                        element.style.color = "var(--tg-theme-primary)";
                    } else {
                        element.style.color = "red";
                    }
                }

                var button = document.querySelector('button.woocommerce-Button[name="reset"]');
                var isFormValid = Object.values(requirements).every(Boolean);
                button.disabled = !isFormValid;
            }

            // Add event listener for password input
            var passwordInput = document.getElementById("password");
            passwordInput.addEventListener("input", checkPassword);

            // Add event listener for password field click
            passwordInput.addEventListener("focus", function() {
                var requirements = document.getElementById("password-requirements");
                requirements.style.display = "block";
            });

            // Add event listener for form submission
            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                // Check if the form is valid
                if (!passwordInput.disabled && !passwordInput.value) {
                    event.preventDefault(); // Prevent form submission
                    // Optionally, you can show an error message here
                }
            });
        </script>

        <script type='text/javascript'
            src='../../wp-content/plugins/woo-smart-quick-view/assets/js/frontend49eb.js?ver=3.5.2'
            id='woosq-frontend-js'></script>
        </script>
        <script type='text/javascript'
            src='../../wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.minf71b.js?ver=2.8.0'
            id='tinvwl-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/bootstrap.mine35d.js?ver=6.3.2'
            id='bootstrap-bundle-js'></script>
        <script type='text/javascript' src='../../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4'
            id='imagesloaded-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/isotope.pkgd.mine35d.js?ver=6.3.2'
            id='isotope-js'></script>
        <script type='text/javascript'
            src='../../wp-content/themes/mykd/assets/js/jquery.countdown.mine35d.js?ver=6.3.2'
            id='countdown-js'></script>
        <script type='text/javascript'
            src='../../wp-content/themes/mykd/assets/js/jquery.waypoints.mine35d.js?ver=6.3.2'
            id='waypoints-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/jquery.odometer.mine35d.js?ver=6.3.2'
            id='odometer-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/scrollTrigger.mine35d.js?ver=6.3.2'
            id='scrollTrigger-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/jquery.appeare35d.js?ver=6.3.2'
            id='appear-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
            id='jarallax-js'></script>

        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/wow.mine35d.js?ver=6.3.2'
            id='wow-js'></script>
        <script type='text/javascript' src='../../wp-content/themes/mykd/assets/js/maine35d.js?ver=6.3.2'
            id='mykd-main-js'></script>

        <script type='text/javascript'
            src='../../wp-content/plugins/elementor/assets/js/webpack.runtime.min5d63.js?ver=3.17.1'
            id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript'
            src='../../wp-content/plugins/elementor/assets/js/frontend-modules.min5d63.js?ver=3.17.1'
            id='elementor-frontend-modules-js'></script>
        <script type='text/javascript'
            src='../../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
            id='elementor-waypoints-js'></script>

        <script>
            jQuery(document).ready(function($) {
                /*===========================================
                    =        Click Sound Active		      =
                =============================================*/
                $('.search a, .tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('../../wp-content/themes/mykd/assets/audio/click.wav').play());
                $('.search__close, .offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('../../wp-content/themes/mykd/assets/audio/remove.wav').play());
            });
        </script>
</body>

</html>