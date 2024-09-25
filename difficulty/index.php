<?php
session_start();
require("../controllers/game_controller.php");
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "0";
$difficulty = $_GET['type'];
if ($difficulty != 'simple' && $difficulty != 'crazy' && $difficulty != 'horny' && $difficulty != 'sick_fuck') {
    header("Location: ../404/");
}
if ($username == 0) {
    header("Location: ../login/");
}
$user_id = $_SESSION['user_id'];

?>
<!doctype html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <link rel='stylesheet' id='elementor-frontend-css'
        href='../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-77-css'
        href='../wp-content/uploads/elementor/css/post-7770af.css?ver=1702276137' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css'
        href='../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-animate-css'
        href='../wp-content/themes/mykd/assets/css/animate.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-bundle-css'
        href='../wp-content/themes/mykd/assets/css/swiper-bundlee35d.css?ver=6.3.2' type='text/css' media='all' />

    <link rel='stylesheet' id='flaticon-css' href='../wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-core-css' href='../wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-unit-css' href='../wp-content/themes/mykd/assets/css/mykd-unite35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-woo-css' href='../wp-content/themes/mykd/assets/css/mykd-wooe35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-726-css'
        href='../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />

    <link rel='stylesheet' id='swiper-css'
        href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css'
        media='all' />


    <script type='text/javascript' src='../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0'
        id='jquery-core-js'></script>
    <link rel="icon" href="wp-content/uploads/2023/10/favicon.png" sizes="192x192" />
    <link rel="icon" href="../wp-content/uploads/2023/10/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../wp-content/uploads/2023/10/favicon.png" />

<body>
    <style>
        .question {
            position: relative;
            animation-name: run;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-direction: alternate;
        }

        @keyframes run {
            from {
                top: -5px;
            }

            to {
                top: 10px;
            }
        }

        .app {
            display: grid;
            height: 100vh;
            place-items: center;
        }

        .base-timer {
            width: 120px;
            height: 120px;
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
        }

        .base-timer__svg {
            transform: scaleX(-1);
        }

        .base-timer__circle {
            fill: none;
            stroke: none;
        }

        .base-timer__path-elapsed {
            stroke-width: 7px;
            stroke: grey;
        }

        .base-timer__path-remaining {
            stroke-width: 7px;
            stroke-linecap: round;
            transform: rotate(90deg);
            transform-origin: center;
            transition: 1s linear all;
            fill-rule: nonzero;
            stroke: currentColor;
        }

        .base-timer__path-remaining.green {
            color: rgb(65, 184, 131);
        }

        .base-timer__path-remaining.orange {
            color: orange;
        }

        .base-timer__path-remaining.red {
            color: red;
        }

        .base-timer__label {
            position: absolute;
            width: 120px;
            height: 120px;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
        }

        #pause-button {
            padding: 5px;
            font-size: 15px;
            cursor: pointer;
            color: white;
            border: none;
            background-color: transparent !important;
            border-radius: 5px;
            position: absolute;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);

        }

        .numbering {
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 20px 30px rgba(0, 0, 0, 0.5);
            text-align: center;
            display: block;
            align-items: center;
            justify-content: center;

        }

        .progress-container {
            position: relative;
            width: 100%;
            margin-top: 40px;
        }

        .progress-line {
            height: 3px;
            background-color: var(--tg-theme-primary);
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        .progress-circle {
            width: 40px;
            height: 40px;
            background-color: rgb(65, 184, 131);
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: left 0.3s ease-in-out;
        }

        .overall {
            height: 500px;
            border: 8px solid var(--tg-theme-primary);
            width: 90%;
            margin-right: auto;
            margin-left: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 3px 7px 0px rgba(0, 0, 0, 0.42);
        }
    </style>
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

        <div data-elementor-type="wp-page" data-elementor-id="77" class="elementor elementor-77">
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area " data-background="../wp-content/uploads/2023/10/background5.png">
                <div class="container">
                    <div class="breadcrumb__wrapper">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="breadcrumb__content">
                                    <h2 class="title">difficulty</h2>
                                    <nav aria-label="breadcrumb" class="breadcrumb">
                                        <span><a class="home"><span>Fremoria</span></a>
                                        </span> &gt; <span>difficulty</span>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                                <div class="breadcrumb__img">
                                    <img src="../wp-content/uploads/2023/10/key.png" alt="Shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="elementor-element elementor-element-319a82d e-flex e-con-boxed e-con e-parent" data-id="319a82d"
                data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                data-core-v316-plus="true">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-78e84e0 elementor-widget elementor-widget-tg-heading"
                        data-id="78e84e0" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">



                            <div class="section__title center">
                                <span class="sub-title tg__animate-text">Important Note</span>
                                <h2 class="title tg-element-title">Read this point</h2>
                            </div>
                            <div class="quest">
                                <img src="../wp-content/uploads/2023/10/quest.png" width="80" height="80"
                                    class='question' style="margin-left: auto; margin-right:auto; display: block;">
                                <h5><em>You can pause the timer, if you have to! The point system varies based on the difficulty of the task</em></h5>
                                <a href="" class="tg-btn-1"
                                    style="margin-left: auto; margin-right:auto; display: block; width:250px; margin-top:40px">
                                    <span><?php echo $difficulty ?> Mode </span>
                                    <svg preserveAspectRatio="none" viewBox="0 0 197 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="cls-1" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.976 0.755987L0.75499 30.977L29.717 58.677H165.717L195.938 30.977L165.717 0.755987H30.976Z"
                                            stroke="white" stroke-width="1.5" />
                                        <path class="cls-2" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M166.712 2.01899L196.933 30.98L166.712 58.68L188.118 29.719L166.712 2.01899Z"
                                            fill="white" />
                                        <path class="cls-2" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.235 2.01899L0.0139923 30.977L30.235 58.677L8.82899 29.719L30.235 2.01899Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php if ($difficulty == 'sick_fuck'){ ?> 
                        <h5><span style="color: red; font-size:25px">!!! </span><em>For this mode, you will <span style="color: red; font-size:25px">Remove</span> a piece of clothing if you <span style="font-size:20px">refuse </span> to comply</em></h5>
                        <?php } ?>
                    </div>

                    <div class="elementor-element elementor-element-78af342 elementor-widget elementor-widget-tg-gallery"
                        data-id="78af342" data-element_type="widget" data-widget_type="tg-gallery.default">
                        <div class="elementor-widget-container">

                            <?php $select = select_game_for_specific_user_controller($user_id, $difficulty);

                            ?>
                            <div class="overall">
                                <div>
                                    <h1 class='numbering' id="current-task">
                                        <?php if ($select != null) { ?>
                                            <span id="countdown">Get ready: 30
                                                <br><span style="font-size:20px"><i style='color:red' class='fa fa-exclamation-triangle'></i>  Ensure that everyone gives their consent before participating!!!</span>
                                            </span>
                                        <?php } else { ?>
                                            Task Completed
                                        <?php } ?>
                                    </h1>
                                </div>

                                <?php if ($select != null) { ?>
                                    <div id="app"></div>
                                    <button id="pause-button" onclick="toggleTimer()">
                                        <i id="pause-icon" class="fa fa-pause"></i> <!-- Font Awesome pause icon -->
                                    </button>
                                <?php } ?>
                            </div>
                            <div class="progress-container">
                                <div class="progress-line"></div>
                                <div class="progress-circle" id="progressCircle">0%</div>
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


        <script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/swv/js/index69c8.js?ver=5.8.4'
            id='swv-js'></script>
        <script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/index69c8.js?ver=5.8.4'
            id='contact-form-7-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min38c1.js?ver=2.7.0-wc.8.2.1'
            id='jquery-blockui-js'></script>

        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minee31.js?ver=8.2.1'
            id='wc-add-to-cart-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.minfb9f.js?ver=2.1.4-wc.8.2.1'
            id='js-cookie-js'></script>

        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minee31.js?ver=8.2.1'
            id='woocommerce-js'></script>
        <script type='text/javascript' src='../wp-includes/js/underscore.mind584.js?ver=1.13.4'
            id='underscore-js'></script>

        <script type='text/javascript' src='../wp-includes/js/wp-util.mine35d.js?ver=6.3.2' id='wp-util-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.minee31.js?ver=8.2.1'
            id='wc-add-to-cart-variation-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min49eb.js?ver=3.5.2'
            id='slick-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min49eb.js?ver=3.5.2'
            id='perfect-scrollbar-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min49eb.js?ver=3.5.2'
            id='magnific-popup-js'></script>
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
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/simpleParallax.mine35d.js?ver=6.3.2'
            id='simpleParallax-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/gsap.mine35d.js?ver=6.3.2'
            id='gsap-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/scrollTrigger.mine35d.js?ver=6.3.2'
            id='scrollTrigger-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/splitText.mine35d.js?ver=6.3.2'
            id='splitText-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.appeare35d.js?ver=6.3.2'
            id='appear-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/tg-cursor.mine35d.js?ver=6.3.2'
            id='tg-cursor-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/swiper-bundlee35d.js?ver=6.3.2'
            id='swiper-bundle-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
            id='jarallax-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/slick-animatione35d.js?ver=6.3.2'
            id='slick-animation-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/vivus.mine35d.js?ver=6.3.2'
            id='vivus-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/wow.mine35d.js?ver=6.3.2'
            id='wow-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/maine35d.js?ver=6.3.2'
            id='mykd-main-js'></script>
        <script type='text/javascript' src='../wp-content/plugins/mykd-core/assets/js/hello-worlde35d.js?ver=6.3.2'
            id='genixcore-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/elementor/assets/js/webpack.runtime.min5d63.js?ver=3.17.1'
            id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/elementor/assets/js/frontend-modules.min5d63.js?ver=3.17.1'
            id='elementor-frontend-modules-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
            id='elementor-waypoints-js'></script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2'
            id='jquery-ui-core-js'></script>
        <script id="elementor-frontend-js-before" type="text/javascript">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.17.1",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "e_swiper_latest": true,
                    "landing-pages": true,
                    "e_global_styleguide": true
                },
                "urls": {
                    "assets": "https:\/\/themedox.com\/mykd\/../wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"],
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 77,
                    "title": "MYKD%20%E2%80%93%20eSports%20and%20Gaming%20NFT%20Theme",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.min5d63.js?ver=3.17.1'
            id='elementor-frontend-js'></script>
        <script>
            jQuery(document).ready(function($) {
                /*===========================================
                    =        Click Sound Active		      =
                =============================================*/
                $('.tg-border-btn, .tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/click.wav').play());
                $('.search__close, .offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/remove.wav').play());
            });
        </script>
        <script>
            let tasks = <?php echo json_encode($select); ?>;
            let currentTaskIndex = 0;
            let isPaused = false;

            const FULL_DASH_ARRAY = 283;
            const WARNING_THRESHOLD = 10;
            const ALERT_THRESHOLD = 5;

            const COLOR_CODES = {
                info: {
                    color: "green"
                },
                warning: {
                    color: "orange",
                    threshold: WARNING_THRESHOLD
                },
                alert: {
                    color: "red",
                    threshold: ALERT_THRESHOLD
                }
            };

            const TIME_LIMIT = 30; // Time for each task
            let timePassed = 0;
            let timeLeft = TIME_LIMIT;
            let timerInterval = null;
            let remainingPathColor = COLOR_CODES.info.color;

            function formatTime(time) {
                const minutes = Math.floor(time / 60);
                let seconds = time % 60;
                if (seconds < 10) {
                    seconds = `0${seconds}`;
                }
                return `${minutes}:${seconds}`;
            }
            document.getElementById('pause-icon').style.display = 'none';

            function startInitialCountdown() {
                let countdownTime = 30; // Initial countdown time
                const countdownElement = document.getElementById("countdown");

                countdownElement.innerHTML = `Get ready: ${countdownTime} <br><span style="font-size:20px"><i style='color:red' class='fa fa-exclamation-triangle'></i> Ensure that everyone gives their consent before participating!!!</span>`;
                const countdownInterval = setInterval(() => {
                    countdownTime -= 1;
                    countdownElement.innerHTML = `Get ready: ${countdownTime} <br><span style="font-size:20px"><i style='color:red' class='fa fa-exclamation-triangle'></i>  Ensure that everyone gives their consent before participating!!!</span>`;


                    if (countdownTime <= 0) {
                        clearInterval(countdownInterval);
                        countdownElement.innerText = ''; // Clear countdown message
                        document.getElementById('pause-icon').style.display = 'block';

                        startTask(); // Start the task timer
                    }
                }, 1000);
            }

            function startTask() {
                document.getElementById("app").innerHTML = `
        <div class="base-timer">
            <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <g class="base-timer__circle">
                    <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
                    <path
                        id="base-timer-path-remaining"
                        stroke-dasharray="283"
                        class="base-timer__path-remaining ${remainingPathColor}"
                        d="
                            M 50, 50
                            m -45, 0
                            a 45,45 0 1,0 90,0
                            a 45,45 0 1,0 -90,0
                        "
                    ></path>
                </g>
            </svg>
            <span id="base-timer-label" class="base-timer__label">${formatTime(timeLeft)}</span>
        </div>
        `;
                showNextTask();
                startTimer();
            }

            function toggleTimer() {
                isPaused = !isPaused;
                const pauseIcon = document.getElementById("pause-icon");

                if (isPaused) {
                    clearInterval(timerInterval);
                    pauseIcon.classList.remove("fa-pause");
                    pauseIcon.classList.add("fa-play");
                } else {
                    startTimer();
                    pauseIcon.classList.remove("fa-play");
                    pauseIcon.classList.add("fa-pause");
                }
            }

            function startTimer() {
                timerInterval = setInterval(() => {
                    timePassed += 1;
                    timeLeft = TIME_LIMIT - timePassed;
                    document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
                    setCircleDasharray();
                    setRemainingPathColor(timeLeft);

                    if (timeLeft <= 0) {
                        onTimesUp();
                    }
                }, 1000);
            }

            function onTimesUp() {
                clearInterval(timerInterval);

                // Update task status in the database
                const typeId = tasks[currentTaskIndex]?.difficulty_id; // Safely access task's difficulty_id

                fetch('../action/update_task.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            'type_id': typeId
                        })
                    }).then(response => response.text())
                    .then(data => {
                        console.log(data); // Log success message or handle response
                    }).catch(error => {
                        console.error('Error:', error);
                    });

                // Check if there are more tasks
                if (currentTaskIndex < tasks.length - 1) {
                    currentTaskIndex++;
                    showNextTask();
                    startTimer(); // Restart the timer for the next task
                } else {
                    document.getElementById("current-task").innerHTML = "<center><h2>All tasks are completed!</h2></center>";
                }

                // Always fetch progress, even if it's the last task
                fetchProgress();
            }

            function showNextTask() {
                if (currentTaskIndex < tasks.length) {
                    const nextTask = tasks[currentTaskIndex];
                    document.getElementById("current-task").innerText = nextTask.task;
                    timeLeft = TIME_LIMIT; // Reset timer
                    timePassed = 0;
                    remainingPathColor = COLOR_CODES.info.color; // Reset color
                    setCircleDasharray();
                }
            }

            function setRemainingPathColor(timeLeft) {
                const {
                    alert,
                    warning,
                    info
                } = COLOR_CODES;
                if (timeLeft <= alert.threshold) {
                    document.getElementById("base-timer-path-remaining").classList.remove(warning.color);
                    document.getElementById("base-timer-path-remaining").classList.add(alert.color);
                } else if (timeLeft <= warning.threshold) {
                    document.getElementById("base-timer-path-remaining").classList.remove(info.color);
                    document.getElementById("base-timer-path-remaining").classList.add(warning.color);
                }
            }

            function calculateTimeFraction() {
                const rawTimeFraction = timeLeft / TIME_LIMIT;
                return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
            }

            function setCircleDasharray() {
                const circleDasharray = `${(calculateTimeFraction() * FULL_DASH_ARRAY).toFixed(0)} 283`;
                document.getElementById("base-timer-path-remaining").setAttribute("stroke-dasharray", circleDasharray);
                document.getElementById("base-timer-path-remaining").setAttribute("class", `base-timer__path-remaining ${remainingPathColor}`);
            }

            // Initialize the initial countdown
            startInitialCountdown();
        </script>

        <script>
            const progressContainer = document.querySelector('.progress-container');
            const progressCircle = document.getElementById('progressCircle');

            // Function to fetch progress and update progress circle
            function fetchProgress() {
                const type = <?php echo json_encode($difficulty); ?>;

                // Fetch progress data from progress.php
                fetch('../action/progress.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            'type': type
                        })
                    })
                    .then(response => response.json()) // Parse JSON response
                    .then(data => {
                        const overall = data.overall / 100; // Convert percentage to decimal
                        setProgress(overall); // Update progress bar
                        progressCircle.innerText = `${data.overall}%`; // Update percentage text
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Function to update circle position based on progress value
            function updateCirclePosition() {
                const lineWidth = progressContainer.offsetWidth;
                const circleSize = progressCircle.offsetWidth;
                const circlePosition = lineWidth * progressValue - circleSize / 2;
                progressCircle.style.left = `${circlePosition}px`;
            }

            // Function to set progress (value between 0 and 1)
            function setProgress(value) {
                progressValue = Math.min(1, Math.max(0, value));
                updateCirclePosition();
            }

            // Initial setup: Fetch and update progress
            fetchProgress();
        </script>


</body>

</html>