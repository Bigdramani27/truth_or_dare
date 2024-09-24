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
    <title>About Us</title>


    <link rel='stylesheet' id='hfe-style-css'
        href='../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor8ff8.css?ver=1.6.21'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />

    <link rel='stylesheet' id='elementor-post-415-css'
        href='../wp-content/uploads/elementor/css/post-4159632.css?ver=1698598988' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-726-css'
        href='../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />

    <link rel='stylesheet' id='woosq-frontend-css'
        href='../wp-content/plugins/woo-smart-quick-view/assets/css/frontend49eb.css?ver=3.5.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-free-css'
        href='../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='odometer-css' href='../wp-content/themes/mykd/assets/css/odometere35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css' href='../wp-content/themes/mykd/assets/css/flaticone35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-core-css' href='../wp-content/themes/mykd/assets/css/mykd-coree35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='mykd-unit-css' href='../wp-content/themes/mykd/assets/css/mykd-unite35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-tg-flat-icons-css'
        href='../wp-content/plugins/mykd-core/assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0'
        id='jquery-core-js'></script>
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
        <div id="sticky-header" class="tg-header__area transparent-header">
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
                                        <li class="menu-item nav-item active">
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


        <!-- breadcrumb-area -->
        <section class="breadcrumb-area " data-background="../wp-content/uploads/2023/10/background2.png">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="breadcrumb__content">
                                <h2 class="title">About Us</h2>
                                <nav aria-label="breadcrumb" class="breadcrumb">
                                    <span><a class="home"><span>Fremoria</span></a>
                                    </span> &gt; <span>About Us</span>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="../wp-content/uploads/2023/10/about.png" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <div data-elementor-type="wp-page" data-elementor-id="415" class="elementor elementor-415">
            <div class="elementor-element elementor-element-07b57bf e-flex e-con-boxed e-con e-parent">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-c22d605 e-con-full e-flex e-con e-child">
                        <div
                            class="elementor-element elementor-element-860b3d4 elementor-widget elementor-widget-tg-heading">
                            <div class="elementor-widget-container">

                                <div class="section__title left">
                                    <span class="sub-title tg__animate-text">powerful services</span>
                                    <h2 class="title tg-element-title">Our Services</h2>
                                </div>


                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-dcf8023 elementor-widget elementor-widget-tg-servicesBox">
                            <div class="elementor-widget-container">

                                <div class="services__wrapper">

                                    <div class="services__item">
                                        <div class="services__icon">
                                            <i aria-hidden="true" class="genix flaticon-diamond"></i>
                                        </div>
                                        <div class="services__content">
                                            <h4 class="title"><a href="../services/year-experience/index.php">Year
                                                    Experience</a></h4>
                                            <h1>3+</h1>
                                        </div>
                                    </div>


                                    <div class="services__item">
                                        <div class="services__icon">
                                            <i aria-hidden="true" class="genix flaticon-user-profile"></i>
                                        </div>
                                        <div class="services__content">
                                            <h4 class="title"><a href="../services/expert-teams/index.php">Expert
                                                    Teams</a></h4>
                                            <h1>3</h1>
                                        </div>
                                    </div>


                                    <div class="services__item">
                                        <div class="services__icon">
                                            <i aria-hidden="true" class="genix flaticon-swords-1"></i>
                                        </div>
                                        <div class="services__content">
                                            <h4 class="title"><a href="../services/best-nft-game/index.php">Projects
                                                    Done</a></h4>
                                            <h1>30+</h1>
                                        </div>
                                    </div>


                                    <div class="services__item">
                                        <div class="services__icon">
                                            <i aria-hidden="true" class="genix flaticon-settings-1"></i>
                                        </div>
                                        <div class="services__content">
                                            <h4 class="title"><a
                                                    href="../services/worldwide-client/index.php">Worldwide Client</a>
                                            </h4>
                                            <h1>20+</h1>
                                            </h4>

                                        </div>
                                    </div>
                                    <div class="services__item">
                                        <div class="services__icon">
                                            <i aria-hidden="true" class="genix flaticon-user-profile"></i>
                                        </div>
                                        <div class="services__content">
                                            <h4 class="title"><a href="../services/expert-teams/index.php">
                                                    Service Types</a></h4>
                                            <h6>E-commerce, WordPress, React, Custom Websites & Mobile Apps</h6>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-08b7e42 e-con-full e-flex e-con e-child">
                        <div
                            class="elementor-element elementor-element-bd68faf elementor-widget elementor-widget-genix-image">
                            <div class="elementor-widget-container">


                                <div class="services__images">
                                    <div class="services__images-item active">
                                        <img decoding="async" src="../wp-content/uploads/2023/10/e-com.jpg"
                                            alt="Images">
                                    </div>
                                    <div class="services__images-item ">
                                        <img decoding="async" src="../wp-content/uploads/2023/10/wordpress.jpg"
                                            alt="Images">
                                    </div>
                                    <div class="services__images-item ">
                                        <img decoding="async" src="../wp-content/uploads/2023/10/mobile.jpg"
                                            alt="Images">

                                    </div>
                                    <div class="services__images-item ">
                                        <img decoding="async" src="../wp-content/uploads/2023/10/web.jpg"
                                            alt="Images">
                                    </div>
                                    
                                </div>
                                <center><a title="Home" href="https://bigdramani27.github.io/My-Profile/" class="nav-links">Click here to view my porfolio</a></center>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-f804bfd e-flex e-con-boxed e-con e-parent">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-094ea87 elementor-widget elementor-widget-tg-heading"
                        data-id="094ea87" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">

                            <div class="section__title center">
                                <span class="sub-title tg__animate-text">our team member</span>
                                <h2 class="title tg-element-title">ACTIVE TEAM MEMBERS</h2>
                            </div>


                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fe350a1 elementor-widget elementor-widget-tg-team">
                        <div class="elementor-widget-container">

                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".0s">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <a href="../player-details/index.php">
                                                <img decoding="async" src="../wp-content/uploads/2023/10/team02.png"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="team__content">
                                            <h4 class="name"><a href="../player-details/index.php">Dramani Alhassan</a>
                                            </h4>
                                            <span class="designation">UI/Ux Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <a href="../player-details/index.php">
                                                <img decoding="async" src="../wp-content/uploads/2023/10/team02.png"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="team__content">
                                            <h4 class="name"><a href="../player-details/index.php">Dramani Alhassan</a>
                                            </h4>
                                            <span class="designation">Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <a href="../player-details/index.php">
                                                <img decoding="async" src="../wp-content/uploads/2023/10/team02.png"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="team__content">
                                            <h4 class="name"><a href="../player-details/index.php">Dramani Alhassan</a>
                                            </h4>
                                            <span class="designation">Project Manager</span>
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


        <script type='text/javascript'
            src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minee31.js?ver=8.2.1'
            id='woocommerce-js'></script>

        <script type='text/javascript'
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min49eb.js?ver=3.5.2'
            id='slick-js'></script>

        <script type='text/javascript'
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min49eb.js?ver=3.5.2'
            id='magnific-popup-js'></script>
        </script>
        <script type='text/javascript'
            src='../wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.minf71b.js?ver=2.8.0'
            id='tinvwl-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/bootstrap.mine35d.js?ver=6.3.2'
            id='bootstrap-bundle-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.countdown.mine35d.js?ver=6.3.2'
            id='countdown-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.waypoints.mine35d.js?ver=6.3.2'
            id='waypoints-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/scrollTrigger.mine35d.js?ver=6.3.2'
            id='scrollTrigger-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/splitText.mine35d.js?ver=6.3.2'
            id='splitText-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.appeare35d.js?ver=6.3.2'
            id='appear-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
            id='jarallax-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/slick-animatione35d.js?ver=6.3.2'
            id='slick-animation-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/maine35d.js?ver=6.3.2'
            id='mykd-main-js'></script>


        <script type='text/javascript'
            src='../wp-content/plugins/elementor/assets/js/webpack.runtime.min5d63.js?ver=3.17.1'
            id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript'
            src='../wp-content/plugins/elementor/assets/js/frontend-modules.min5d63.js?ver=3.17.1'
            id='elementor-frontend-modules-js'></script>

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
                    "assets": "https:\/\/themedox.com\/mykd\/wp-content\/plugins\/elementor\/assets\/"
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
                    "id": 415,
                    "title": "About%20Us%20%E2%80%93%20MYKD",
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
                $('.search a, .tg-btn-1, .side-toggle-icon, .mobile-nav-toggler, .dropdown-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/click.wav').play());
                $('.search__close, .offCanvas__toggle, .offCanvas__overlay, .close-btn').on('click', () => new Audio('../wp-content/themes/mykd/assets/audio/remove.wav').play());
            });
        </script>
</body>

</html>