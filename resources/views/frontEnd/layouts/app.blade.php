<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Heartbeat Restaurant | {{$pageTitle}}</title>

    <link rel="icon" type="image/png" href="{{ asset('frontEnd/assets') }}/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/boxicons.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/owl.theme.default.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/magnific-popup.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets') }}/css/responsive.css">
    @stack('css')
</head>

<body>

    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <!-- Start Navbar Area -->
    <div class="navbar-area fixed-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('frontEnd/assets') }}/img/logo-two.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('frontEnd/assets') }}/img/logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle active">Home <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home Page One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Page Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Page Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="categories.html" class="nav-link">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Service <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="service.html" class="nav-link">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Pages <i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="food-collection.html" class="nav-link">Food Collection</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="online-order.html" class="nav-link">Online Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="chefs.html" class="nav-link">Chefs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="book-a-table.html" class="nav-link">Book A Table</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.html" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.html" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-and-conditions.html" class="nav-link">Terms and Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="nav-cart" href="#">
                                <i class='bx bxs-cart'></i>
                                <span>1</span>
                            </a>
                            <a class="nav-tel" href="tel:+1123456789">
                                <i class='bx bxs-phone-call'></i>
                                +1 123 456 789
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    @yield('content')

    <!-- Subscribe -->
    <section class="subscribe-area">
        <div class="subscribe-shape">
            <img src="{{ asset('frontEnd/assets') }}/img/home-one/reservation-shape.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="subscribe-item">
                        <div class="section-title">
                            <h2>Subscribe News Letter for Get Update</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL"
                                required autocomplete="off">

                            <button class="btn cmn-btn" type="submit">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                        <div class="social-link">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="subscribe-img">
                        <img src="{{ asset('frontEnd/assets') }}/img/home-one/subscribe-main.png" alt="Subscribe">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe -->
    <!-- End Preloader -->
    <!-- Footer -->
    <footer class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('frontEnd/assets') }}/img/logo.png" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-service">
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <a href="contact-us.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Support
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-chevron-right'></i>
                                        Career
                                    </a>
                                </li>
                                <li>
                                    <a href="chefs.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Chefs
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class='bx bx-chevron-right'></i>
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Privacy & Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-service">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="service.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="food-collection.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Food Collection
                                    </a>
                                </li>
                                <li>
                                    <a href="online-order.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Online Order
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us.html">
                                        <i class='bx bx-chevron-right'></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-service">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <a href="tel:+1123456789">
                                        <i class='bx bx-phone-call'></i>
                                        +1 1234 56 789
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+5143456768">
                                        <i class='bx bx-phone-call'></i>
                                        +5 1434 56 768
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@restant.com">
                                        <i class='bx bx-message-detail'></i>
                                        info@restant.com
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hello@restant.com">
                                        <i class='bx bx-message-detail'></i>
                                        hello@restant.com
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    Br1. 28/A Street, New York, USA
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-item">
                <p>Copyright @2020 Restant. All Rights Reserved By <a href="https://hibootstrap.com/"
                        target="_blank">HiBootstrap</a></p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->


    <!-- Essential JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/jquery-3.5.0.min.js"></script>
    <script src="{{ asset('frontEnd/assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontEnd/assets') }}/js/bootstrap.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/owl.carousel.min.js"></script>
    <!-- Mixitup JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/jquery.mixitup.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/slick.min.js"></script>
    <!-- Form Ajaxchimp JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/contact-form-script.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontEnd/assets') }}/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/restant/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 18:15:25 GMT -->

</html>
