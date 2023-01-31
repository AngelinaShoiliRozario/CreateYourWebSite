<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawsome.min.css" />
    <link rel="stylesheet" href="assets/fonts/font/flaticon.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />
    <link rel="stylesheet" href="assets/css/barfiller.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <title>Noso - Broadband & Internet Services HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/fav-icon.png" />
    <style>
        .editabletext:focus {
            border: 1px solid black;
        }

        .image_container {
            position: relative;
        }

        .image_uploader {
            position: absolute;
            text-transform: uppercase;
            padding: 0px 10px;
            background-color: #2e2e2f;
            color: white;
            top: 0;
            right: 0;
            cursor: pointer;
        }

        .img_preview img {
            border: 1px solid black;
        }

        .img_preview img:hover {
            border: 1px solid white;
        }

        .nice-select {
            padding: 6px 10px;
            margin-top: 3px;
            border: 2px solid rgb(219, 8, 156);
        }

        .nice-select .current {
            color: white;

        }
    </style>
</head>

<body>
    <div id="pre-loader">
        <img class="preloader-img" src="assets/images/preloader1.gif" alt="gif" />
    </div>

    <!-- Topbar Area Start -->
    <div class="topbar">
        <div class="container-fluid container-large">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="topbar-left-area">
                        <p>
                            Customer Service:
                            <a href="tel:+8801872695474">++880 187 269 5474</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="topbar-social-icons">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/fastnetbd" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank"><i
                                        class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Navigation area start -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="main-responsive-nav">
            <div class="container-fluid container-large">
                <div class="mobile-nav">
                    <a href="index.html" class="logo"><img src="assets/images/small-logo.png" alt="logo" /></a>
                    <ul class="menu-sidebar menu-small-device">
                        <li>
                            <a class="default-button" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container-fluid container-large">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo.png" alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#Home" class="nav-link dropdown-toggle active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#Features" class="nav-link dropdown-toggle">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#Pricing" class="nav-link dropdown-toggle">Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="products.html" class="nav-link dropdown-toggle">Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Map" class="nav-link dropdown-toggle">Coverage </a>
                            </li>
                        </ul>
                        <div class="menu-sidebar">
                            <ul>
                                <li>
                                    <a class="default-button" href="#Contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navigation area end -->

    <!-- Banner Area Start -->
    <div id="Home" class="banner pt-100">
        <img class="bottom-shape" src="assets/images/banner/bottom-shape.png" alt="shape" />
        <div class="container-fluid container-large">
            <div class="row align-items-center">
                <div class="col-lg-6 image_container">
                    <div class="banner-img-3 pr-20">
                        <img src="assets/images/banner/banner-3.png" alt="image" id="blah" />
                        @include('components.image_background_adder')
                    </div>
                </div>
                @include('components.upload_img_modal')
                <script>
                    let preview_image = (tag) => {
                        const [file] = tag.files;
                        if (file) {
                            blah.src = URL.createObjectURL(file);
                        }
                        console.log(tag.files);
                    }
                </script>
                <div class="col-lg-6">
                    <div class="banner-text-area banner-text-area-3 pl-20">
                        <h1 class="editabletext" contenteditable="true">
                            Enjoy High Speed Internet With FAST<span style="color: rgb(255, 0, 0)">NET</span>BD
                        </h1>
                        <p>
                            Dea of denouncing pleasure and praising pain was born and I will
                            giyou a completeact of the system, and expound the ac teachings
                            sed quia non numquam eiusmodi.
                        </p>
                        <div class="banner-button-group">
                            <ul>
                                <li>
                                    <a class="default-button-3 default-button-3-active" href="#About"><span>Learn
                                            More</span></a>
                                </li>
                                <li>
                                    <a class="default-button-3" href="#Mail"><span>Get A Connection</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Who We Are Area Start -->
    <div id="Who" class="about who-we-wre ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-are-text-area">
                        <div class="default-section-title">
                            <span>Who We Are</span>
                            <h3 class="editabletext" contenteditable="true">
                                We Help The Best Connectivity Across The Whole World
                            </h3>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority in some form, by injected humour,
                                or randomised words which don't look.
                            </p>
                            <p>
                                Slightly believable. If you are going to use a passage of
                                Lorem Ipsum, you need to be sthere isn't anything embarrassing
                                hidden in the middle of text. All the Lorem Ipgenerators onhe
                                Internet tend to repeat predefined chunks as necessary, making
                                this the first true.
                            </p>
                        </div>
                        <a class="default-button mt-30" href="#WhyAgain">Know More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="who-we-wre-img-area">
                        <img src="assets/images/about/who-we.jpg" alt="img" />
                        <div class="about-img-text-area">
                            <div class="about-fun-facts abf-1">
                                <h2><span class="odometer" data-count="20">00</span>+</h2>
                                <p>Years Of Experiences</p>
                            </div>
                            <div class="about-fun-facts abf-2">
                                <h2><span class="odometer" data-count="2708">00</span>+</h2>
                                <p>Client In The World</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Who We Are Area End -->

    <!-- Why Choose Us Start -->
    <div id="Why" class="service ptb-100 bg-f9f9f9">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Everyone Asked</span>
                <h3>Why Choose Us</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="features-card mt-30">
                            <div class="features-card-content">
                                <i class="flaticon-performance"></i>
                                <h4>Fast Speed</h4>
                                <p>
                                    here are many variatipassages of Lorem Ipsum availalteratin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="features-card mt-30">
                            <div class="features-card-content">
                                <i class="flaticon-home"></i>
                                <h4>Free Installation</h4>
                                <p>
                                    here are many variatipassages of Lorem Ipsum availalteratin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="features-card mt-30">
                            <div class="features-card-content">
                                <i class="flaticon-money"></i>
                                <h4>Flexible Tariff Plans</h4>
                                <p>
                                    here are many variatipassages of Lorem Ipsum availalteratin.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="features-card mt-30">
                            <div class="features-card-content">
                                <i class="flaticon-customer-support"></i>
                                <h4>24/7 Support</h4>
                                <p>
                                    here are many variatipassages of Lorem Ipsum availalteratin.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->

    <!-- About Area Start -->
    <div id="About" class="about ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="inner-about-img-area">
                        <img src="assets/images/about/inner-about.png" alt="image" />
                        <div class="inner-about-img-card">
                            <div class="iaic">
                                <h2><span class="odometer" data-count="20">00</span>+</h2>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-inner-text-area pl-20">
                        <div class="default-section-title">
                            <span>About Noso</span>
                            <h3>Feasible High-Speed Broadband Connection</h3>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majorihsuffered alteration in some form, by
                                injected humour, or randomised words which don't look eve.
                            </p>
                        </div>
                        <div class="about-progress-bar-area progress-bar-area">
                            <div id="bar1" class="barfiller">
                                <span class="label">Full Network Visibility</span>
                                <span class="tip"></span>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                            <div id="bar2" class="barfiller">
                                <span class="label">Successful Contacts</span>
                                <span class="tip"></span>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                            <div id="bar3" class="barfiller">
                                <span class="label">Resilient Connectivity</span>
                                <span class="tip"></span>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Why Choose Us Area Start -->
    <div id="WhyAgain" class="why-we why-we-3 pb-100 bg-f9f9f9">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="why-we-text-area-3">
                        <div class="default-section-title">
                            <span>Why Choose Us</span>
                            <h3>More Great Reasons To Choose Noso Broadband Internet</h3>
                            <p>
                                Here are many variations of passages of Lorem Ipsum available,
                                but the majority in some form, by injected humour, or
                                randomised words which don't look even.
                            </p>
                        </div>
                        <div class="why-we-list-area-3">
                            <ul>
                                <li><i class="flaticon-seen"></i> Fast Connection</li>
                                <li><i class="flaticon-seen"></i> Satellite TV</li>
                                <li><i class="flaticon-seen"></i> Free Installation</li>
                                <li><i class="flaticon-seen"></i> Home Security</li>
                                <li><i class="flaticon-seen"></i> 24/7 Support</li>
                                <li><i class="flaticon-seen"></i> Best Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-we-img-3">
                        <img src="assets/images/why-we/ww-3.png" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Area End -->

    <!-- Newsletter Area Start -->
    <div id="NewsLetter" class="newsletter ptb-100 newsletter-1">
        <div class="shape">
            <img class="shape1" src="assets/images/shapes/shape10.png" alt="image" />
            <img class="shape2" src="assets/images/shapes/shape11.png" alt="shape" />
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-text-area">
                        <div class="default-section-title">
                            <span>Check Vibrant</span>
                            <h3>Check Ability To Connect Our Services in Your Area</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="input-group newsletter-form-area pt-30">
                            <input type="text" class="form-control" placeholder="Enter Your Zip Code" required />
                            <button class="default-button" type="submit">Check Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Area End -->

    <!-- Pricing Area Start -->
    <div id="Pricing" class="pricing pt-70 pb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Our Packages</span>
                <h3>Choose Your Favorite Packages</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <img src="assets/images/pricing/prcing-1.jpg" alt="image" />
                        </div>
                        <div class="pricing-card-speed">
                            <div class="pcs">
                                <h5>08</h5>
                                <span>MBPS</span>
                            </div>
                        </div>
                        <div class="pricing-card-price">
                            <span>Start From</span>
                            <h2>৳800<sub>/Month</sub></h2>
                        </div>
                        <h3>Internet For Personal</h3>
                        <ul>
                            <li><i class="flaticon-check-box"></i> Single Device Use</li>
                            <li><i class="flaticon-check-box"></i> Phone & Computer</li>
                            <li><i class="flaticon-check-box"></i> Shared IP</li>
                        </ul>
                        <a class="default-button-3" href="contact.html"><span>Book Now</span></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <img src="assets/images/pricing/prcing-2.jpg" alt="image" />
                        </div>
                        <div class="pricing-card-speed">
                            <div class="pcs">
                                <h5>12</h5>
                                <span>MBPS</span>
                            </div>
                        </div>
                        <div class="pricing-card-price">
                            <span>Start From</span>
                            <h2>৳1000<sub>/Month</sub></h2>
                        </div>
                        <h3>Internet For Family</h3>
                        <ul>
                            <li><i class="flaticon-check-box"></i> 20 Devices Allowed</li>
                            <li>
                                <i class="flaticon-check-box"></i> Phone & Computer & TV
                            </li>
                            <li><i class="flaticon-check-box"></i> Shared IP</li>
                        </ul>
                        <a class="default-button-3" href="contact.html"><span>Book Now</span></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <img src="assets/images/pricing/prcing-3.jpg" alt="image" />
                        </div>
                        <div class="pricing-card-speed">
                            <div class="pcs">
                                <h5>20</h5>
                                <span>MBPS</span>
                            </div>
                        </div>
                        <div class="pricing-card-price">
                            <span>Start From</span>
                            <h2>৳1500<sub>/Month</sub></h2>
                        </div>
                        <h3>Internet For Corporate</h3>
                        <ul>
                            <li>
                                <i class="flaticon-check-box"></i> Unlimited Device Allowed
                            </li>
                            <li><i class="flaticon-check-box"></i> All Devices</li>
                            <li><i class="flaticon-check-box"></i> Dedicated IP</li>
                        </ul>
                        <a class="default-button-3" href="contact.html"><span>Book Now</span></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <img src="assets/images/pricing/prcing-3.jpg" alt="image" />
                        </div>
                        <div class="pricing-card-speed">
                            <div class="pcs">
                                <h5>25</h5>
                                <span>MBPS</span>
                            </div>
                        </div>
                        <div class="pricing-card-price">
                            <span>Start From</span>
                            <h2>৳2000<sub>/Month</sub></h2>
                        </div>
                        <h3>Internet For Corporate</h3>
                        <ul>
                            <li>
                                <i class="flaticon-check-box"></i> Unlimited Device Allowed
                            </li>
                            <li><i class="flaticon-check-box"></i> All Devices</li>
                            <li><i class="flaticon-check-box"></i> Dedicated IP</li>
                        </ul>
                        <a class="default-button-3" href="contact.html"><span>Book Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Area End -->

    <!-- Exciting Features Start -->
    <div id="Features" class="service service-3 ptb-100">
        <div class="shape">
            <img class="shape1" src="assets/images/shapes/shape25.png" alt="image" />
            <img class="shape2" src="assets/images/shapes/shape26.png" alt="image" />
        </div>
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Our Features</span>
                <h3>Explore Our Exciting Features</h3>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-3">
                            <div class="service-card-3-icon">
                                <i class="flaticon-bank"></i>
                            </div>
                            <h4><a href="service-details.html">Broadband</a></h4>
                            <p>
                                Lorem Ipsum generators on the Internet tendep eapredefInt.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-3">
                            <div class="service-card-3-icon sc-3-2">
                                <i class="flaticon-wifi-router"></i>
                            </div>
                            <h4><a href="service-details.html">WIFI Internet</a></h4>
                            <p>
                                Lorem Ipsum generators on the Internet tendep eapredefInt.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-3">
                            <div class="service-card-3-icon sc-3-3">
                                <i class="flaticon-satellite"></i>
                            </div>
                            <h4><a href="service-details.html">Mobile Connection </a></h4>
                            <p>
                                Lorem Ipsum generators on the Internet tendep eapredefInt.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-card-3">
                            <div class="service-card-3-icon sc-3-4">
                                <i class="flaticon-television"></i>
                            </div>
                            <h4><a href="service-details.html">Satellite TV</a></h4>
                            <p>
                                Lorem Ipsum generators on the Internet tendep eapredefInt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Exciting Features End -->

    <!-- product Area Start -->
    <div id="Product" class="product ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Online Store</span>
                <h3>Noso Popular Devices</h3>
            </div>
            <div class="section-content">
                <div class="product-slider-area owl-carousel">
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-1.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Steaming Router</a></h4>
                            <p><del>$60.00</del> $50.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-2.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Home Router</a></h4>
                            <p><del>$30.00</del> $25.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-3.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Virtual Reality Box</a></h4>
                            <p><del>$70.00</del> $50.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-4.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Bluetooth Speaker</a></h4>
                            <p><del>$90.00</del> $85.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-5.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Black Remote</a></h4>
                            <p><del>$30.00</del> $20.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                    <div class="product-card slider-card-margin">
                        <div class="product-card-img">
                            <a href="product-details.html"><img src="assets/images/products/product-6.png"
                                    alt="image" /></a>
                        </div>
                        <div class="product-card-text-area">
                            <h4><a href="product-details.html">Gaming Consol</a></h4>
                            <p><del>$130.00</del> $120.00</p>
                            <a class="default-button-3" href="cart.html"><span>View Product</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- Fun facts area Start -->
    <div id="Fan" class="fun-facts fun-facts-1 fun-facts-3 pt-70 pb-100">
        <div class="shape">
            <img class="shape1" src="assets/images/shapes/shape9.png" alt="image" />
            <img class="shape2" src="assets/images/shapes/shape15.png" alt="image" />
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card">
                        <i class="flaticon-world-map"></i>
                        <h2><span class="odometer" data-count="4520">00</span>+</h2>
                        <p>Clients In The World</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card">
                        <i class="flaticon-wifi-signal"></i>
                        <h2><span class="odometer" data-count="2520">00</span>+</h2>
                        <p>Connection Provided</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card">
                        <i class="flaticon-calendar"></i>
                        <h2><span class="odometer" data-count="20">00</span>+</h2>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="fun-facts-card">
                        <i class="flaticon-smart-tv"></i>
                        <h2><span class="odometer" data-count="450">00</span>+</h2>
                        <p>Satellite TV</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fun facts area End -->

    <!-- Contact Card Area Start -->
    <div id="Contact" class="contcat-card-area pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <div class="contact-card-content">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5>Our Location</h5>
                            <p>
                                <a href="https://goo.gl/maps/zZEtThmwqkPz2GTE7" target="_blank">CA 560 bush st & 20th
                                    ave, apt 5 san francisco, 230909,
                                    Canada</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <div class="contact-card-content">
                            <i class="fas fa-envelope"></i>
                            <h5>Email</h5>
                            <p>
                                <a href="../../cdn-cgi/l/email-protection.html#0f676a6363604f61607c60216c6062"><span
                                        class="__cf_email__"
                                        data-cfemail="274f424b4b4867494854480944484a">[email&#160;protected]</span></a>
                            </p>
                            <p>
                                <a href="../../cdn-cgi/l/email-protection.html#c1b2b4b1b1aeb3b581afaeb2aeefa2aeac"><span
                                        class="__cf_email__"
                                        data-cfemail="b4c7c1c4c4dbc6c0f4dadbc7db9ad7dbd9">[email&#160;protected]</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-card">
                        <div class="contact-card-content">
                            <i class="fas fa-phone-alt"></i>
                            <h5>Phone</h5>
                            <p><a href="tel:+44587154756"> +44 587 154756</a></p>
                            <p><a href="tel:+44587154757"> +44 587 154757</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Card Area End -->

    <!-- Contact from Area Start -->
    <div id="Mail" class="contact pb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Send Message</span>
                <h3>Drop Us Message For Query</h3>
            </div>
            <div class="section-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-img-area mt-30">
                            <img src="assets/images/inner-images/contact-img.png" alt="image" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-text-area pl-20 mt-30">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name"
                                                id="name" required data-error="Please enter your name" />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email" id="email" required
                                                data-error="Please enter your Email" />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control"
                                                placeholder="Phone Number" id="phone_number" required
                                                data-error="Please enter your phone number" />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" class="form-control"
                                                placeholder="Subject" id="msg_subject" required
                                                data-error="Please enter your subject" />
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30"
                                                rows="5" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <button class="default-button" type="submit">
                                            <span>Send Message</span>
                                        </button>
                                        <div id="msgSubmit" class="h6 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact from Area End -->

    <!-- Google Map Area Start -->
    <div id="Map" class="google-map pr-20">
        <iframe class="g-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29189.676290268497!2d90.3927181101914!3d23.864445956713098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d0466c6fef%3A0x2d131b534751974b!2s1230!5e0!3m2!1sen!2sbd!4v1673187563588!5m2!1sen!2sbd"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map Area End -->

    <!-- Testimonial Area Start -->
    <div id="Clients" class="testimonial ptb-100">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <span>Testimonials</span>
                <h3>What Our Clients Say</h3>
            </div>
            <div class="section-content">
                <div class="testimonial-slider-area owl-carousel">
                    <div class="testimonial-card slider-card-margin">
                        <div class="testimonial-card-content">
                            <i class="flaticon-quotation-mark"></i>
                            <p>
                                Untur magni dolores eos qui ravolupta tem sequi nesciunt.
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sitam
                            </p>
                            <h5>Heather Faith</h5>
                            <span>Manager</span>
                        </div>
                    </div>
                    <div class="testimonial-card slider-card-margin">
                        <div class="testimonial-card-content">
                            <i class="flaticon-quotation-mark"></i>
                            <p>
                                Untur magni dolores eos qui ravolupta tem sequi nesciunt.
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sitam
                            </p>
                            <h5>Rebbeca Niccola</h5>
                            <span>SEO Expert</span>
                        </div>
                    </div>
                    <div class="testimonial-card slider-card-margin">
                        <div class="testimonial-card-content">
                            <i class="flaticon-quotation-mark"></i>
                            <p>
                                Untur magni dolores eos qui ravolupta tem sequi nesciunt.
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sitam
                            </p>
                            <h5>Anthony Alan</h5>
                            <span>Manager at Elan</span>
                        </div>
                    </div>
                    <div class="testimonial-card slider-card-margin">
                        <div class="testimonial-card-content">
                            <i class="flaticon-quotation-mark"></i>
                            <p>
                                Untur magni dolores eos qui ravolupta tem sequi nesciunt.
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sitam
                            </p>
                            <h5>Jhon Teras</h5>
                            <span>Operational Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Footer Area Start -->
    <div id="Footer" class="footer-group footer-group-3">
        <div class="shape">
            <img class="shape1" data-speed="0.15" data-revert="true" src="assets/images/footer/shape1.png"
                alt="image" />
            <img class="shape2" data-speed="0.1" data-revert="true" src="assets/images/footer/shape1.png"
                alt="image" />
        </div>
        <div class="footer ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-logo-area">
                            <a href="index.html"><img src="assets/images/white-logo.png" alt="image" /></a>
                            <p>
                                On the other hand, we denounce whteous indignation and dislike
                                men wh beguiled and er hand, we denounce whteous indignation
                                and dislike.
                            </p>
                            <div class="footer-icons-area">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.com/" target="_blank"><i
                                                class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links quick-links flp">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="#About">About Us</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="#Features">Features</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="#Pricing">Our Plans</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="#Contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links flp">
                            <h3>Other Pages</h3>
                            <ul>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="#Products">Products</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="https://fastnetbd.isperp.net/ispcare">Pay Bill</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="privacy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <i class="fas fa-arrow-right"></i>
                                    <a href="terms.html">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-links footer-contact">
                            <h3>Get In Touch</h3>
                            <div class="footer-contact-card">
                                <i class="flaticon-phone-call"></i>
                                <a href="tel:802162020">+880 187 269 5474</a>
                            </div>
                            <div class="footer-contact-card">
                                <i class="flaticon-mailing"></i>
                                <a href="../../cdn-cgi/l/email-protection.html#ec85828a83ac82839f83c28f8381"><span
                                        class="__cf_email__"
                                        data-cfemail="fa93949c95ba94958995d4999597">[email&#160;protected]</span></a>
                            </div>
                            <div class="footer-contact-card">
                                <i class="flaticon-location"></i>
                                <a href="https://goo.gl/maps/uVirgW7ijJ5harhy5" target="_blank">House:03 (2th floor),
                                    Road: 16, Sector: 11, Dhaka 1230</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>
                    Copyright @
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    . <strong>Fastnet BD</strong> All Rights Reserved By
                    <a target="_blank" href="https://ztrios.com/">Ztrios Tech & Marketing</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Copyright Area Start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Copyright Area End -->

    <!-- Link of JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/TweenMax.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/ajaxchimp.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/tilt.js"></script>
    <script src="assets/js/barfiller.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
