<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawsome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/fonts/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/barfiller.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />


    <title>Noso - Broadband & Internet Services HTML Template</title>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
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
            right: 10px;
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

    <form action="/save_website" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Topbar Area Start -->
        <div class="topbar">

            <div class="container-fluid container-large">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="topbar-left-area">
                            <p contenteditable="true" name="topbar_left_text" onblur="topbar_left_text_change(this)">
                                Customer Service:
                                <input class="d-none" type="text" name="topbar_left_text" id="topbar_left_text">
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
                        <a href="index.html" class="logo"><img src="assets/images/small-logo.png"
                                alt="logo" /></a>
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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal titleeeeeeee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- section 1 Start -->
       @include('sections.section_1')
        <!-- section 1 End -->


        <!-- Who We Are Area Start -->
        <!-- section 2 Start -->

       @include('sections.section_2')

       <!-- section 2 End -->
        <!-- Who We Are Area End -->

        <!-- Why Choose Us Start -->
        <!-- section 3 Start -->

       @include('sections.section_3')

       <!-- section 3 End -->
        <!-- Why Choose Us End -->


        <!-- About Area Start -->
        <!-- section 3 Start -->

       @include('sections.section_4')

       <!-- section 3 End -->
        <!-- About Area End -->

        <!-- Why Choose Us Area Start -->
        {{-- Section 5 start --}}

        @include('sections.section_5')
        
        <!-- Why Choose Us Area End -->
        {{-- Sectin 5 heading end --}}

        {{-- Section 6 heading start --}}
        <!-- Newsletter Area Start -->
        @include("sections.section_6")
        
        <!-- Newsletter Area End -->
        {{-- Section 6 heading end --}}

        <!-- Pricing Area Start -->
        {{-- section 7 start --}}
        @include('sections.section_7')
        {{-- section 7 end --}}
        <!-- Pricing Area End -->

        <!-- Exciting Features Start -->
        {{-- section 8 start --}}
        @include('sections.section_8')
        {{-- section 8 end --}}
        <!-- Exciting Features End -->

        <!-- product Area Start -->
        {{-- section 9 start --}}
        @include('sections.section_9')
        {{-- section 9 end --}}
        <!-- Product Area End -->

        <!-- Fun facts area Start -->
        {{-- section 10 start --}}
        @include('sections.section_10')
        {{-- section 10 end --}}
        <!-- Fun facts area End -->

        <!-- Contact Card Area Start -->
        {{-- section 11 start --}}
        @include('sections.section_11')
        {{-- section 11 end --}}
        <!-- Contact Card Area End -->

        <!-- Contact from Area Start -->
        {{-- section 12 start --}}
        @include('sections.section_12')
        {{-- section 12 start --}}
        <!-- Contact from Area End -->

        <!-- Google Map Area Start -->
        {{-- section 13 start --}}
        @include('sections.section_13')
        {{-- section 13 end --}}
        <!-- Google Map Area End -->

        <!-- Testimonial Area Start -->
        {{-- section 14 start --}}
        @include('sections.section_14')
        {{-- section 14 end --}}
        <!-- Testimonial Area End -->

        <!-- Footer Area Start -->
        {{-- section 15 footer start --}}
        @include('sections.section_15_footer')
        {{-- section 15 footer end --}}
        <!-- Footer Area End -->

        <!-- Copyright Area Start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Copyright Area End -->
        <button type="submit" class="btn btn-success">SAVE</button>
    </form>
    {{-- <script>
        let preview_image = (tag) => {
            let image_upload_subpart = document.getElementById('image_upload_subpart');
            image_upload_subpart.classList.add('d-none');
            const [file] = tag.files;
            if (file) {
                blah.src = URL.createObjectURL(file);
            }
            console.log(tag.files);
        }

        const show_image_upload_option = () => {
            let image_upload_subpart = document.getElementById('image_upload_subpart');
            image_upload_subpart.classList.toggle('d-none');
        }
    </script> --}}
    {{-- modal  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/assets/js/mycustom.js') }}"></script>
    <!-- Link of JS files -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel2.thumbs.js') }}"></script>
    <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/assets/js/TweenMax.js') }}"></script>
    <script src="{{ asset('/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('/assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('/assets/js/tilt.js') }}"></script>
    <script src="{{ asset('/assets/js/barfiller.js') }}"></script>
    <script src="{{ asset('/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>

</html>
