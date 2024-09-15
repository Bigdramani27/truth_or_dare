<?php 
session_start();
require ("controllers/game_controller.php");
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "0";
?>
<!doctype html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Home</title>

    <link rel='stylesheet' id='elementor-frontend-css'
        href='wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-77-css'
        href='wp-content/uploads/elementor/css/post-7770af.css?ver=1702276137' type='text/css' media='all' />

    <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-animate-css' href='wp-content/themes/mykd/assets/css/animate.mine35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-bundle-css'
        href='wp-content/themes/mykd/assets/css/swiper-bundlee35d.css?ver=6.3.2' type='text/css' media='all' />

    <link rel='stylesheet' id='flaticon-css' href='wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-core-css' href='wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-unit-css' href='wp-content/themes/mykd/assets/css/mykd-unite35d.css?ver=6.3.2'
        type='text/css' media='all' />

    <link rel='stylesheet' id='mykd-woo-css' href='wp-content/themes/mykd/assets/css/mykd-wooe35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-726-css'
        href='wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />

    <link rel='stylesheet' id='swiper-css'
        href='wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css'
        media='all' />


    <script type='text/javascript' src='wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
    <link rel="icon" href="wp-content/uploads/2023/10/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2023/10/favicon.png" />
    <style>
        .test {
            position: relative;
            animation-name: run;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-direction: alternate;
        }

        @keyframes run {
            from {
                top: 0px;
            }

            to {
                top: 50px;
            }
        }
    </style>

<body>
    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="flaticon-right-arrow"></i>
    </button>
    <!-- Scroll-top-end-->



    <!-- header-area -->
    <header>
        <div id="sticky-header" class="tg-header__area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a class="main-logo" href="index.php">
                                        <img src="wp-content/themes/mykd/assets/img/logo/logo.png"
                                            style="max-height: 40px" alt="Logo" />
                                    </a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul id="menu-main-menu" class="navigation">
                                        <li class="menu-item active">
                                            <a href="index.php" class="nav-links">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about-us/index.php" class="nav-links">About
                                                Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="rank/index.php" class="nav-links">Rank</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Contact" href="contact-us/index.php"
                                                class="nav-links">Contact</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Donate" href="donate/index.php" class="nav-links">Donate</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action d-none d-md-block">
                                    <ul class="list-wrap">
                                        <?php if($username == 0){ ?>
                                        <li class="header-btn">
                                            <a href="login/index.php" class="tg-border-btn">
                                                <i class="flaticon-edit"></i> ~Login </a>
                                        </li>
                                        <?php } else { ?>
                                            <li class="header-btn">
                                            <a href="player-details/index.php" class="tg-border-btn">
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
                        <img src="wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
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
                            <img src="wp-content/themes/mykd/assets/img/logo/logo.png" style="max-height: 40px"
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

        <div class="elementor elementor-77">
            <div class="elementor-element elementor-element-936eda5 e-con-full slider__area">

                <div class="elementor-element elementor-element-4311c99 e-flex e-con-boxed e-con e-child">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-fc0b115 e-con-full e-flex e-con e-child">
                            <div
                                class="elementor-element elementor-element-6fee237 elementor-widget elementor-widget-tg-content">
                                <div class="elementor-widget-container">


                                    <div class="slider__content tg-content">
                                        <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s">
                                            Game Night </h6>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".5s">Truth or Dare</h2>

                                        <div class="slider__btn wow fadeInUp" data-wow-delay="1.2s">
                                            <a href="#started" class="tg-btn-1">
                                                <span>Get Started</span>
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


                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-293231b e-con-full e-flex e-con e-child">
                            <div
                                class="elementor-element elementor-element-db61684 elementor-widget elementor-widget-genix-banner-image">
                                <div class="elementor-widget-container">

                                    <div class="slider__img text-center">
                                        <img decoding="async" src="wp-content/uploads/2023/10/home.png" class="test">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-319a82d e-flex e-con-boxed e-con e-parent"
                data-core-v316-plus="true">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-78e84e0 elementor-widget elementor-widget-tg-heading"
                        data-id="78e84e0" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">

                            <div class="section__title center" id="started">
                                <span class="sub-title tg__animate-text">know about us</span>
                                <h2 class="title tg-element-title">Choose Your Difficulty</h2>
                            </div>


                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".0s">
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                    <?php if($username == 0){ ?>
                                        <a href="login/index.php">
                                            <img decoding="async" src="wp-content/uploads/2023/10/simple.jpg"
                                                style="height: 400px; ">
                                        </a>
                                    <?php } else { ?>
                                        <a href="difficulty/index.php?type=simple">
                                            <img decoding="async" src="wp-content/uploads/2023/10/simple.jpg"
                                                style="height: 400px; ">
                                        </a> 
                                  <?php  } ?>
                                    </div>
                                    <div class="streamers__content">
                                        <h4 class="name">Simple</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                    <?php if($username == 0){ ?>
                                        <a href="login/index.php">
                                            <img decoding="async" src="wp-content/uploads/2023/10/crazy.jpg"
                                                style="height: 400px; ">
                                        </a>
                                    <?php } else { ?>
                                        <a href="difficulty/index.php?type=crazy">
                                            <img decoding="async" src="wp-content/uploads/2023/10/crazy.jpg"
                                                style="height: 400px; ">
                                        </a> 
                                  <?php  } ?>
                                    </div>
                                    <div class="streamers__content">
                                        <h4 class="name">Crazy</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                    <?php if($username == 0){ ?>
                                        <a href="login/index.php">
                                            <img decoding="async" src="wp-content/uploads/2023/10/1.jpg"
                                                style="height: 400px; ">
                                        </a>
                                    <?php } else { ?>
                                        <a href="difficulty/index.php?type=horny">
                                            <img decoding="async" src="wp-content/uploads/2023/10/1.jpg"
                                                style="height: 400px; ">
                                        </a> 
                                  <?php  } ?>
                                    </div>
                                    <div class="streamers__content">
                                        <h4 class="name">Horny</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="swiper-slide">
                                <div class="streamers__item">
                                    <div class="streamers__thumb">
                                    <?php if($username == 0){ ?>
                                        <a href="login/index.php">
                                            <img decoding="async" src="wp-content/uploads/2023/10/sick.jpeg"
                                                style="height: 400px; ">
                                        </a>
                                    <?php } else { ?>
                                        <a href="difficulty/index.php?type=sick_fuck">
                                            <img decoding="async" src="wp-content/uploads/2023/10/sick.jpeg"
                                                style="height: 400px; ">
                                        </a> 
                                  <?php  } ?>
                                    </div>
                                    <div class="streamers__content">
                                        <h4 class="name">Sick Fuck</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div><!-- #page -->
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

        <script type='text/javascript'
            src='wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min49eb.js?ver=3.5.2'
            id='magnific-popup-js'></script>
        </script>

        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/bootstrap.mine35d.js?ver=6.3.2'
            id='bootstrap-bundle-js'></script>

        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/jquery.waypoints.mine35d.js?ver=6.3.2'
            id='waypoints-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/simpleParallax.mine35d.js?ver=6.3.2'
            id='simpleParallax-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/gsap.mine35d.js?ver=6.3.2'
            id='gsap-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
            id='jarallax-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/slick-animatione35d.js?ver=6.3.2'
            id='slick-animation-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/vivus.mine35d.js?ver=6.3.2'
            id='vivus-js'></script>
        <script type='text/javascript' src='wp-content/themes/mykd/assets/js/maine35d.js?ver=6.3.2'
            id='mykd-main-js'></script>
        <script type='text/javascript' src='wp-content/plugins/mykd-core/assets/js/hello-worlde35d.js?ver=6.3.2'
            id='genixcore-js'></script>
        <script type='text/javascript'
            src='wp-content/plugins/elementor/assets/js/webpack.runtime.min5d63.js?ver=3.17.1'
            id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript'
            src='wp-content/plugins/elementor/assets/js/frontend-modules.min5d63.js?ver=3.17.1'
            id='elementor-frontend-modules-js'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2'
            id='jquery-ui-core-js'></script>
        <script id="elementor-frontend-js-before" type="text/javascript">
            var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": true }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.17.1", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "additional_custom_breakpoints": true, "container": true, "e_swiper_latest": true, "landing-pages": true, "e_global_styleguide": true }, "urls": { "assets": "https:\/\/themedox.com\/mykd\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"], "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 415, "title": "About%20Us%20%E2%80%93%20MYKD", "excerpt": "", "featuredImage": false } };
        </script>
        <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min5d63.js?ver=3.17.1'
            id='elementor-frontend-js'></script>
        <script>
            jQuery(document).ready(function ($) {
                /*===========================================
                    =        Click Sound Active		      =
                =============================================*/
                $('.tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('wp-content/themes/mykd/assets/audio/click.wav').play());
                $('.offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('wp-content/themes/mykd/assets/audio/remove.wav').play());
            });
        </script>
</body>

</html>