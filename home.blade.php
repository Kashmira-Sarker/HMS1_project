<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Health Service Free Medical Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <header class="container-fluid">
        <div class="container">
            <div class="row top-row">
                <div class="col-md-4 logo">
                    <img src="assets/images/logo.png" alt="">
                    <a data-toggle="collapse" data-target="#menu-jk" href="#menu-jk"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div class="col-md-8 navse">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="detail">
                                    <b>Location</b>
                                    <p>Rose Street, Toranto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="detail">
                                    <b>Email</b>
                                    <p>support@smarteye.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none d-md-block cinfo">
                            <div class="cdetl">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="detail">
                                    <b>Call Us</b>
                                    <p>+11 7200 20 40 30</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="menu-jk" class="nav-sectionmk  row">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About US</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="">Research</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    @if(Route::has('login'))

                    @auth

                    <x-app-layout>   
                    </x-app-layout>
                    @else

                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>

                    @endauth
                    @endif
                    <li class="aply">
                        <button class="btn btn-sm btn-light">Book Appointment</button>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <!-- ################# Slider Starts Here#######################--->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
           
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <a href="#" class="btn btn-primary hidden-xs">Schedule A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <!--*************** Key Features Starts Here ***************-->

    <div id="features" class="features container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Key Features of our Hospital</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptatem, inventore</p>
            </div>
            <div class="ker-featur-row row">
                <div data-aos="fade-right" data-aos-duration="1500" class="col-md-4 featurecol feature-left">
                    <div class="single-feature">

                        <div class="detail">
                            <h6>100% Safety</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-bell"></i>
                        </div>


                    </div>
                    <div class="single-feature">

                        <div class="detail">
                            <h6>Friendly Doctors</h6>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 featur-image">
                    <img src="assets/images/boct.jpg" alt="">
                </div>
                <div data-aos="fade-left" data-aos-duration="1500" class="col-md-4 featurecol feature-right">

                    <div class="single-feature">
                        <div class="icon">
                            <i class="far fa-images"></i>
                        </div>
                        <div class="detail">
                            <h6>Clean Environment</h6>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipi sicing elit.
                                Voluptatem, inventore</p>
                        </div>
                    </div>
                    <div class="single-feature">
                        <div class="icon">
                            <i class="fab fa-audible"></i>
                        </div>
                        <div class="detail">
                            <h6>Medical Research</h6>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit.
                                Voluptatem, inventore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--*************** Our Services Starts Here ***************-->


    <section class="our-service container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Our Services</h2>
                <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/service-1.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Deperssion</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/service-2.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Anxity</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary ">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/service-3.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Relationship Issue</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/s1.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Relationship Issue</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/s2.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Paediatric Issue</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/services/service-2.jpg" alt="">

                            <div class="blog-single-det">

                                <h6>Neurology Issue</h6>

                                <a href="blog_single.html">
                                    <button class="btn btn-primary">More Detail</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!--*************** About Us Starts Here ***************-->

    @include('user.aboutus')

    <!--  *************************Our Team Start Here ************************** -->

    @include('user.ourteam')

    <!-- ######## Our Team End ####### -->

    <!--***************  Appointment starts Here ***************-->
     @include('user.Appointment')


    <!-- ######## Appointment End ####### -->
    
    
    <!--*************** Our Blog Starts Here ***************-->
                     
    <div id="blog" class="container-fluid blog">
        <div class="container">
             <div class="session-title">
                <h2>Our Blog</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum. Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
            </div>
                <div class="blog-row row">
                    <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                            <img src="assets/images/services/s1.jpg" alt="">
                            <span>August 9, 2019</span>
                            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent accumsan, leo in venenatis dictum, </p>
                       </div>
                       
                    </div>
                     <div class="col-lg-4 col-md-6">
                       <div class="blog-col">
                            <img src="assets/images/services/s2.jpg" alt="">
                            <span>August 9, 2019</span>
                            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent accumsan, leo in venenatis dictum, </p>
                       </div>
                       
                    </div>
                     <div class="col-lg-4 col-md-6 ">
                       <div class="blog-col">
                            <img src="assets/images/services/service-1.jpg" alt="">
                            <span>August 9, 2019</span>
                            <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent accumsan, leo in venenatis dictum, </p>
                       </div>
                       
                    </div>
                     
            </div>
        </div>
        
    </div>  
    
        <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Rose Street (K.K District) <br>
                        Toranto, Canada <br>
                        Phone: +44 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>

</body>



<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>