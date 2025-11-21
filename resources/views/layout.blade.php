<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Eventes - Event Conference HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
          @livewireStyles
		<!-- CSS here -->
		<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/dripicons.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        @include('sweetalert::alert')
        <!-- header -->
        <header id="home" class="header-area">            
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href=""><img src="img/logo/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-9">
                                {{-- <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                                <div class="main-menu text-right text-xl-center">
                                    <nav id="mobile-menu">
                                       <ul>
                                            <li class="active has-sub"><a href="#home">Home  +</a>
												<ul>
													<li><a href="index.html">Home Page 01</a></li>
													<li><a href="index2.html">Home Page 02</a></li>
													<li><a href="index3.html">Home Page 03</a></li>
												</ul>
											</li>
                                            <li class="has-sub">
												<a href="about.html">About</a>												
											</li>
                                            <li class="has-sub">
												<a href="venue.html">venue</a>
											</li>
                                             <li class="has-sub">
												<a href="#">Speakers +</a>
												<ul>
													<li><a href="speakers.html">Speakers Page</a></li>
													<li><a href="speaker-details.html">Speakers Details</a></li>
												</ul>
											</li>
                                             <li class="has-sub">
												<a href="#">Shop +</a>
												<ul>
													<li><a href="shop.html">Shop Page</a></li>
													<li><a href="shop-details.html">Shop Details</a></li>
												</ul>
											 </li>
                                            <li><a href="blog.html">News</a></li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                            <div class="col-xl-3 text-right d-none d-xl-block">
                                {{-- <div class="header-btn second-header-btn py-2">
                                    <a href="{{ route('register') }}" class="btn"><i class="far fa-ticket-alt"></i> Register Here </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- main-area -->
        <main>
             {{ $slot ?? '' }}
            
        </main>
        <!-- main-area-end -->
        <!-- footer -->
        {{-- <footer class="footer-bg footer-p" style="background-image:url(img/footer_bg_img.jpg);background-size: cover;">
          
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                            <div class="footer-widget pt-120 mb-30">
                                <div class="logo mb-35">
                                    <a href="#"><img src="img/footer_logo.png" alt="logo"></a>
                                </div>
                                <div class="footer-text mb-20">
                                    <p>The issue with any content strategy is time. Time to sit down and think about what kind of content should be created, time to stop and write, or record, edit and publish, and time to engage with your audience to promote the content you created.</p>
                                </div>
                                <div class="footer-social">                                    
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">						
                            <div class="copyright-text text-center">
								<div class="footer-link">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- footer-end -->



		<!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/one-page-nav-min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/element-in-view.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/main.js"></script>
        @livewireScripts
    </body>
</html>
