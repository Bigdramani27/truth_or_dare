<?php 
session_start();
require ("../controllers/game_controller.php");
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "0";
$total = check_number_of_points_overall_controller();
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rank</title>
    <link rel='stylesheet' id='font-awesome-free-css'
        href='../wp-content/themes/mykd/assets/css/fontawesome-all.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href='../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor8ff8.css?ver=1.6.21'
        type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-frontend-css'
        href='../wp-content/uploads/elementor/css/custom-frontend-lite.min1a6e.css?ver=1698593611' type='text/css'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' type='text/css'
        media='all' />

    <link rel='stylesheet' id='elementor-post-557-css'
        href='../wp-content/uploads/elementor/css/post-557d45e.css?ver=1698596019' type='text/css' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend8ff8.css?ver=1.6.21' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-726-css'
        href='../wp-content/uploads/elementor/css/post-7261a6e.css?ver=1698593611' type='text/css' media='all' />

    <link rel='stylesheet' id='woosq-feather-css'
        href='../wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feathere35d.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woosq-frontend-css'
        href='../wp-content/plugins/woo-smart-quick-view/assets/css/frontend49eb.css?ver=3.5.2' type='text/css'
        media='all' />

    <link rel='stylesheet' id='bootstrap-css'
        href='../wp-content/themes/mykd/assets/css/bootstrap.mine35d.css?ver=6.3.2' type='text/css' media='all' />

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
    <link rel='stylesheet' id='mykd-style-css' href='../wp-content/themes/mykd/stylee35d.css?ver=6.3.2' type='text/css'
        media='all' />
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
                                        <li class="menu-item nav-item active">
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
        <section class="breadcrumb-area " data-background="../wp-content/uploads/2023/10/5.jpg">
            <div class="container">
                <div class="breadcrumb__wrapper">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="breadcrumb__content">
                                <h2 class="title">Rank</h2>
                                <nav aria-label="breadcrumb" class="breadcrumb">
                                    <span><a class="home"><span>Fremoria</span></a>
                                    </span> &gt; <span>Rank</span>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 position-relative d-none d-lg-block">
                            <div class="breadcrumb__img">
                                <img src="../wp-content/uploads/2023/10/trophy.png" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <div data-elementor-type="wp-page" data-elementor-id="557" class="elementor elementor-557">
            <div class="elementor-element elementor-element-0060fe0 e-flex e-con-boxed e-con e-parent">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-e77099b elementor-widget elementor-widget-tg-heading"
                        data-id="e77099b" data-element_type="widget" data-widget_type="tg-heading.default">
                        <div class="elementor-widget-container">



                            <div class="section__title center">
                                <span class="sub-title tg__animate-text">Top Players</span>
                                <h2 class="title tg-element-title">The Fastest Top Players</h2>
                            </div>


                        </div>
                    </div>
                    <div class="elementor-element elementor-element-48250d4 e-con-full e-flex e-con e-child">
                        <div class="elementor-element elementor-element-2001a66 e-con-full e-flex e-con e-child">
                            <div class="elementor-element elementor-element-7c5318d elementor-widget elementor-widget-tg-pricing"
                                data-id="7c5318d" data-element_type="widget" data-widget_type="tg-pricing.default">
                                <div class="elementor-widget-container">

                                    <div class="tournament__box-wrap default">
                                        <svg class="main-bg" x="0px" y="0px" preserveAspectRatio="none"
                                            viewBox="0 0 357 533" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.00021 63H103C103 63 114.994 62.778 128 50C141.006 37.222 168.042 13.916 176 10C183.958 6.084 193 1.9 213 2C233 2.1 345 1 345 1C347.917 1.66957 350.51 3.33285 352.334 5.70471C354.159 8.07658 355.101 11.0093 355 14C355.093 25.1 356 515 356 515C356 515 357.368 529.61 343 530C328.632 530.39 15.0002 532 15.0002 532C15.0002 532 0.937211 535.85 1.00021 522C1.06321 508.15 2.00021 63 2.00021 63Z"
                                                fill="#19222B" stroke="#4C4C4C" stroke-width="0.25" />
                                        </svg>
                                        <svg class="price-bg" viewBox="0 0 166 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.00792892 55V11C0.00792892 11 -0.729072 0.988 12.0079 1C24.7449 1.012 160.008 0 160.008 0C160.008 0 172.491 1.863 161.008 10C148.995 18.512 115.008 48 115.008 48C115.008 48 110.021 55.238 90.0079 55C69.9949 54.762 0.00792892 55 0.00792892 55Z"
                                                fill="currentcolor" />
                                        </svg>

                                        <div class="tournament__box-price">
                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span><?php echo $total['total'] ?></span>
                                        </div>

                                        <div class="tournament__box-countdown">

                                        </div>

                                        <div class="tournament__box-caption">
                                            <span class="sub">TOURNAMENT</span>
                                            <h4 class="title">of weekly</h4>
                                        </div>

                                        <div class="tournament__box-prize position-relative">
                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span>Top 3 Players</span>
                                        </div>

                                        <ul class="tournament__box-list list-wrap">
                                            <?php $weekly = select_top_3_players_controller();
                                            foreach ($weekly as $week){
                                            ?>
                                            <li>
                                                <div class="tournament__box-list-item">
                                                    <div class="tournament__player-thumb">
                                                        <img decoding="async"
                                                            src="<?php echo $week['profile'] ?>"
                                                            alt="Images">
                                                    </div>
                                                    <h6 class="tournament__player-name"><?php echo $week['username'] ?></h6>
                                                    <span class="tournament__player-price">
                                                    <?php echo $week['total_points'] ?> <i aria-hidden="true" class="fas fa-bolt"></i> </span>
                                                </div>
                                            </li>
                                          <?php } ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2fa6196 e-con-full e-flex e-con e-child">
                            <div
                                class="elementor-element elementor-element-fdba751 elementor-widget elementor-widget-tg-pricing">
                                <div class="elementor-widget-container">
                                    <div class="tournament__box-wrap active">
                                        <svg class="main-bg" x="0px" y="0px" preserveAspectRatio="none"
                                            viewBox="0 0 357 533" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.00021 63H103C103 63 114.994 62.778 128 50C141.006 37.222 168.042 13.916 176 10C183.958 6.084 193 1.9 213 2C233 2.1 345 1 345 1C347.917 1.66957 350.51 3.33285 352.334 5.70471C354.159 8.07658 355.101 11.0093 355 14C355.093 25.1 356 515 356 515C356 515 357.368 529.61 343 530C328.632 530.39 15.0002 532 15.0002 532C15.0002 532 0.937211 535.85 1.00021 522C1.06321 508.15 2.00021 63 2.00021 63Z"
                                                fill="#19222B" stroke="#4C4C4C" stroke-width="0.25" />
                                        </svg>
                                        <svg class="price-bg" viewBox="0 0 166 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.00792892 55V11C0.00792892 11 -0.729072 0.988 12.0079 1C24.7449 1.012 160.008 0 160.008 0C160.008 0 172.491 1.863 161.008 10C148.995 18.512 115.008 48 115.008 48C115.008 48 110.021 55.238 90.0079 55C69.9949 54.762 0.00792892 55 0.00792892 55Z"
                                                fill="currentcolor" />
                                        </svg>

                                        <div class="tournament__box-price">
                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span><?php echo $total['total'] ?></span>
                                        </div>

                                        <div class="tournament__box-countdown">

                                        </div>

                                        <div class="tournament__box-caption">
                                            <span class="sub">TOURNAMENT</span>
                                            <h4 class="title">of Overall</h4>
                                        </div>

                                        <div class="tournament__box-prize position-relative">

                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span>Top 3 Players
                                            </span>
                                        </div>

                                        <ul class="tournament__box-list list-wrap">
                                        <?php $overall = select_top_3_players_controller();
                                            foreach ($overall as $over){
                                            ?>
                                            <li>
                                                <div class="tournament__box-list-item">
                                                    <div class="tournament__player-thumb">
                                                        <img decoding="async"
                                                            src="<?php echo $over['profile'] ?>"
                                                            alt="Images">
                                                    </div>
                                                    <h6 class="tournament__player-name"><?php echo $over['username'] ?></h6>
                                                    <span class="tournament__player-price">
                                                    <?php echo $over['total_points'] ?> <i aria-hidden="true" class="fas fa-bolt"></i> </span>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3e1b537 e-con-full e-flex e-con e-child">
                            <div
                                class="elementor-element elementor-element-36f689c elementor-widget elementor-widget-tg-pricing">
                                <div class="elementor-widget-container">

                                    <div class="tournament__box-wrap default">
                                        <svg class="main-bg" x="0px" y="0px" preserveAspectRatio="none"
                                            viewBox="0 0 357 533" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.00021 63H103C103 63 114.994 62.778 128 50C141.006 37.222 168.042 13.916 176 10C183.958 6.084 193 1.9 213 2C233 2.1 345 1 345 1C347.917 1.66957 350.51 3.33285 352.334 5.70471C354.159 8.07658 355.101 11.0093 355 14C355.093 25.1 356 515 356 515C356 515 357.368 529.61 343 530C328.632 530.39 15.0002 532 15.0002 532C15.0002 532 0.937211 535.85 1.00021 522C1.06321 508.15 2.00021 63 2.00021 63Z"
                                                fill="#19222B" stroke="#4C4C4C" stroke-width="0.25" />
                                        </svg>
                                        <svg class="price-bg" viewBox="0 0 166 56" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.00792892 55V11C0.00792892 11 -0.729072 0.988 12.0079 1C24.7449 1.012 160.008 0 160.008 0C160.008 0 172.491 1.863 161.008 10C148.995 18.512 115.008 48 115.008 48C115.008 48 110.021 55.238 90.0079 55C69.9949 54.762 0.00792892 55 0.00792892 55Z"
                                                fill="currentcolor" />
                                        </svg>

                                        <div class="tournament__box-price">
                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span><?php echo $total['total'] ?></span>
                                        </div>

                                        <div class="tournament__box-countdown">

                                        </div>

                                        <div class="tournament__box-caption">
                                            <span class="sub">TOURNAMENT</span>
                                            <h4 class="title">of month</h4>
                                        </div>

                                        <div class="tournament__box-prize position-relative">
                                            <i aria-hidden="true" class="fas fa-trophy"></i> <span>Top 3 Players
                                            </span>
                                        </div>

                                        <ul class="tournament__box-list list-wrap">
                                        <?php $month = select_top_3_players_controller();
                                            foreach ($month as $over){
                                            ?>
                                            <li>
                                                <div class="tournament__box-list-item">
                                                    <div class="tournament__player-thumb">
                                                        <img decoding="async"
                                                            src="<?php echo $over['profile'] ?>">
                                                    </div>
                                                    <h6 class="tournament__player-name"><?php echo $over['username'] ?></h6>
                                                    <span class="tournament__player-price">
                                                    <?php echo $over['total_points'] ?> <i aria-hidden="true" class="fas fa-bolt"></i> </span>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
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
            src='../wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min49eb.js?ver=3.5.2'
            id='magnific-popup-js'></script>
        </script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/bootstrap.mine35d.js?ver=6.3.2'
            id='bootstrap-bundle-js'></script>
        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jquery.waypoints.mine35d.js?ver=6.3.2'
            id='waypoints-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/jarallax.mine35d.js?ver=6.3.2'
            id='jarallax-js'></script>

        <script type='text/javascript' src='../wp-content/themes/mykd/assets/js/vivus.mine35d.js?ver=6.3.2'
            id='vivus-js'></script>

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
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2'
            id='jquery-ui-core-js'></script>
        <script id="elementor-frontend-js-before" type="text/javascript">
            var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": true }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.17.1", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "additional_custom_breakpoints": true, "container": true, "e_swiper_latest": true, "landing-pages": true, "e_global_styleguide": true }, "urls": { "assets": "https:\/\/themedox.com\/mykd\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_laptop"], "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 415, "title": "About%20Us%20%E2%80%93%20MYKD", "excerpt": "", "featuredImage": false } };
        </script>
        <script type='text/javascript' src='../wp-content/plugins/elementor/assets/js/frontend.min5d63.js?ver=3.17.1'
            id='elementor-frontend-js'></script>
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