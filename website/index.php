<?php
$title = "Home";
?>
<!DOCTYPE html>
<html>

<!-- Head -->
<?php include("includes/head.php") ?>

<body class="appear-animate">

    <!-- Page Loader -->
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->

    <!-- Page Wrap -->
    <div class="page" id="top">

        <!-- Home Section -->
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="images/home-bg.jpg" id="home">
            <div class="js-height-full container" style="text-align:left">

                <!-- Hero Content -->
                <div class="home-content">

                    <div class="home-text">
                        <!--
                            <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-50 mt-sm-0">
                                Thomas Rhythm
                            </h1>
                            
                            <div class="hs-line-6">
                                Extraordinary art studio &&nbsp;creative minimalism lovers
                            </div>-->
                        
                        <div class="row text-center">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="block">
                                    <!--
                                    <h1 class="home-title wow fadeInDown">ECAFT</h1>-->
                                    <img class="main-title wow fadeInDown" src="images/ecaft_logo.png" alt="ECaFT logo" style="height:140px; width:400px">
                                    <p class="title-small wow fadeInDown" data-wow-delay="0.3s" style="font-size:36px">Engineering Career Fair Team</p>
                                </div>
                            </div>
                        </div>
                        <!--
                        <h1 style="margin-bottom:0px;text-align:left">We Are</h1>
                        <h1 style="margin-top:0px;text-align:left">ECaFT</h1>
-->
                    </div>

                </div>
                <!-- End Hero Content -->

                <!-- Scroll Down -->
                <div class="local-scroll">
                    <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
                </div>
                <!-- End Scroll Down -->

            </div>
        </section>
        <!-- End Home Section -->

        <!-- Navigation panel -->
        <?php include("includes/navbar.php") ?>


        <!-- About Section -->
        <section class="page-section" id="about">
            <div class="container relative">

                <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                    We are the Engineering Career Fair Team

                    <a href="about.php" class="section-more right">More about us <i class="fa fa-angle-right"></i></a>

                </h2>

                <div class="section-text">
                    <div class="row">
                        <!--
                            <div class="col-md-4 mb-sm-50 mb-xs-30">
                                 
                                <!-- Bar Item 
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        Branding, % <span>90</span>
                                    </div>
                                </div>
                                <!-- End Bar Item -->

                        <!-- Bar Item 
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        Design, % <span>80</span>
                                    </div>
                                </div>
                                <!-- End Bar Item -->

                        <!-- Bar Item 
                                <div class="progress tpl-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        Development, % <span>85</span>
                                    </div>
                                </div>
                                <!-- End Bar Item 
                                 
                            </div> -->

                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:100%">
                            Our goal is to empower and engage the Cornell community by connecting employers to students and improving students' professional development skills through our workshops, career fair prep events, and outreach events.
                        </div>

                        <img src="images/team_photo2018.jpg" style="display:block; margin-top:70px; width:50%; margin-left:auto; margin-right:auto">

                        <!-- <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
                            </div> 

                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    To improve students' professional development skills, we plan events such as: 
                                    <ul>
                                        <li>The Spring Career Fair</li>
                                        <li>Resume Reviews</li>
                                    </ul>
                            </div>
                            

                            <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    As part of our community engagement initiative, we plan events such as: 
                                    <ul>
                                        <li>Headshot Campaigns</li>
                                        <li>The Project Team Fest</li>
                                    </ul>
                            </div> -->

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- Divider -->
        <hr class="mt-0 mb-0 " />
        <!-- End Divider -->

        <!-- Services Section -->
        <section class="page-section" id="services">
            <div class="container relative">

                <h2 class="section-title font-alt mb-70 mb-sm-40">
                    Events
                </h2>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">
                    <li class="active">
                        <a href="#service-branding" data-toggle="tab">

                            <div class="alt-tabs-icon">
                                <span class="icon-tools"></span>
                            </div>

                            Career Fair
                        </a>
                    </li>
                    <!-- <li>
                            <a href="#service-web-design" data-toggle="tab">
                                
                                <div class="alt-tabs-icon">
                                    <span class="icon-desktop"></span>
                                </div>
                                
                                Web Design
                            </a>
                        </li> -->
                    <li>
                        <a href="#service-graphic" data-toggle="tab">

                            <div class="alt-tabs-icon">
                                <span class="icon-presentation"></span>
                            </div>

                            Project Showcase
                        </a>
                    </li>
                    <!-- <li>
                            <a href="#service-development" data-toggle="tab">
                                
                                <div class="alt-tabs-icon">
                                    <span class="icon-gears"></span>
                                </div>
                                
                                Development
                            </a>
                        </li> -->
                    <li>
                        <a href="#service-photography" data-toggle="tab">

                            <div class="alt-tabs-icon">
                                <span class="icon-camera"></span>
                            </div>

                            Other Events
                        </a>
                    </li>
                </ul>
                <!-- End Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content tpl-tabs-cont">

                    <!-- Service Item -->
                    <div class="tab-pane fade in active" id="service-branding">

                        <div class="section-text">
                            <div class="row">
                                <!-- <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p>
                                                A&nbsp;brand for a&nbsp;company is&nbsp;like a&nbsp;reputation 
                                                for a&nbsp;person. You earn reputation by&nbsp;trying to&nbsp;do&nbsp;hard 
                                                things well.
                                            </p>
                                            <footer>
                                                Jeff Bezos
                                            </footer>
                                        </blockquote>
                                    </div> -->
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%">
                                    <img src="images/careerfair16.jpg" style="width:100%">
                                </div>

                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%;">
                                    <div>ECaFT's largest networking event, the Spring Career Fair offers recruiters the chance to meet Cornell's brightest and students the chance to find career opportunities with over 150 employers.</div>
                                    <div style="text-align: left">
                                        <a href="careerFair.php" style="text-align: left" class="section-more font-alt">More about the Career Fair <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="tab-pane fade" id="service-web-design">

                        <div class="section-text">
                            <div class="row">
                                <div class="col-md-4 mb-md-40 mb-xs-30">
                                    <blockquote class="mb-0">
                                        <p>
                                            It&nbsp;doesn&rsquo;t matter how many times&nbsp;I have to&nbsp;click, as&nbsp;long
                                            as&nbsp;each click is&nbsp;a&nbsp;mindless, unambiguous choice.
                                        </p>
                                        <footer>
                                            Steve Krug
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    Cras mi tortor, laoreet id ornare et, accumsan non magna. Maecenas vulputate accumsan velit.
                                    Curabitur a nulla ex. Nam a tincidunt ante. Vitae gravida turpis. Vestibulum varius
                                    nulla non nulla scelerisque tristique.
                                </div>
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum.
                                    Nam varius at ipsum id dignissim. Nam a tincidunt ante lorem. Pellentesque suscipit ante
                                    at ullamcorper pulvinar neque porttitor.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="tab-pane fade" id="service-graphic">

                        <div class="section-text">
                            <div class="row">
                                <!-- <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p>
                                                Never fall in&nbsp;love with an&nbsp;idea. They&rsquo;re whores. If&nbsp;the one you&rsquo;re with isn&rsquo;t doing the job, there&rsquo;s always another.
                                            </p>
                                            <footer>
                                                Chip Kidd
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque
                                        mattis. Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Praesent sed nisi eleifend, 
                                        fermentum orci amet, iaculis libero. 
                                    </div> -->
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%">
                                    <img src="images/projshowcase19.jpg" style="width:100%">
                                </div>

                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%;">
                                    <div>Also known as the "reverse career fair", the Project Showcase offers recruiters the chance to learn about the impressive projects undertaken by Cornell Engineers and the bright minds behind them. </div>
                                    <div style="text-align: left">
                                        <a href="showcase.php" style="text-align: left" class="section-more font-alt">More about the Project Showcase <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="tab-pane fade" id="service-development">

                        <div class="section-text">
                            <div class="row">
                                <div class="col-md-4 mb-md-40 mb-xs-30">
                                    <blockquote class="mb-0">
                                        <p>
                                            All that is&nbsp;valuable in&nbsp;human society depends upon the opportunity for development accorded the individual.
                                        </p>
                                        <footer>
                                            Albert Einstein
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    Fusce hendrerit vitae nunc id gravida. Donec euismod quis ante at mattis. Mauris dictum ante sit
                                    amet enim interdum semper. Vestibulum odio justo, faucibus et dictum eu, malesuada nec neque.
                                    Maecenas volutpat, diam enim sagittis.
                                </div>
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                    Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Sed id dolor consectetur fermentum
                                    volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit.
                                    Inmed maximus ligula metus pellentesque.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="tab-pane fade" id="service-photography">

                        <div class="section-text">
                            <div class="row">
                                <!-- <div class="col-md-4 mb-md-40 mb-xs-30">
                                        <blockquote class="mb-0">
                                            <p>
                                                Photography is&nbsp;the simplest thing in&nbsp;the world, but it&nbsp;is&nbsp;incredibly 
                                                complicated to&nbsp;make it&nbsp;really work.
                                            </p>
                                            <footer>
                                                Martin Parr
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                                        Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. 
                                        Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. 
                                        Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. 
                                    </div> -->
                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%">
                                    <img src="images/resume_workshop_def.png" style="width:100%">
                                </div>

                                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30" style="width:50%;">
                                    <div>In addition to the career fair and the project showcase, we offer students many other opportunities to showcase their projects and receive professional development help. Some of the other events we plan include Robotics Day, Free Headshots, Resume Workshops, and the Project Team Fest. </div>
                                    <div style="text-align: left">
                                        <a href="events.php" style="text-align: left" class="section-more font-alt">More about other events <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Service Item -->

                </div>
                <!-- End Tab panes -->



            </div>
        </section>
        <!-- End Services Section -->

        <!-- Blog Section -->
        <section class="page-section" id="news">
            <div class="container relative">

                <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                    Upcoming Events

                    <a href="events.php" class="section-more right">All Events<i class="fa fa-angle-right"></i></a>

                </h2>

                <div class="row multi-columns-row">

                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">

                        <div class="post-prev-img">
                            <a href=""><img src="baja.jpg" alt="" /></a>
                        </div>

                        <div class="post-prev-title font-alt">
                            <a href="">Fall Project Showcase</a>
                        </div>

                        <div class="post-prev-info font-alt">
                            <a href="">Duffield Hall</a> | 10 September
                        </div>

                        <div class="post-prev-text">
                        Come see the projects undertaken by Cornell Engineers and meet the brains behind them! 
                        </div>

                    </div>
                    <!-- End Post Item -->

                    <!-- Post Item 
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">

                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-2.jpg" alt="" /></a>
                        </div>

                        <div class="post-prev-title font-alt">
                            <a href="">Minimalistic Design Forever</a>
                        </div>

                        <div class="post-prev-info font-alt">
                            <a href="">John Doe</a> | 9 December
                        </div>

                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
                            consectetur fermentum nibh volutpat, accumsan purus.
                        </div>

                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post Item -->

                    <!-- Post Item 
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">

                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-3.jpg" alt="" /></a>
                        </div>

                        <div class="post-prev-title font-alt">
                            <a href="">Hipster&rsquo;s Style in&nbsp;Web</a>
                        </div>

                        <div class="post-prev-info font-alt">
                            <a href="">John Doe</a> | 7 December
                        </div>

                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
                            consectetur fermentum nibh volutpat, accumsan purus.
                        </div>

                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- End Post Item -->

                </div>

            </div>
        </section>
        <!-- End Blog Section -->


        <!-- Real Footer Section -->
        <section class="page-section" id="contact">
            <div class="container relative">

                <h2 class="section-title font-alt mb-70 mb-sm-40">
                    Contact Us
                </h2>

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">

                            <!-- Email -->
                            <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                <div class="contact-item">
                                    <div class="ci-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="ci-title font-alt">
                                        Email
                                    </div>
                                    <div class="ci-text">
                                        <a href="mailto:ecaft@cornell.edu">ecaft@cornell.edu</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Email -->

                            <!-- Address -->
                            <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                <div class="contact-item">
                                    <div class="ci-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="ci-title font-alt">
                                        Address
                                    </div>
                                    <div class="ci-text">
                                        201 Carpenter Hall, Ithaca NY, 14853
                                    </div>
                                </div>
                            </div>
                            <!-- End Address -->

                            <!-- Facebook -->
                            <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                <div class="contact-item">
                                    <div class="ci-icon">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                    <div class="ci-title font-alt">
                                        Facebook
                                    </div>
                                    <div class="ci-text">
                                        <a href="https://www.facebook.com/ECaFT/?epa=SEARCH_BOX">Like Us</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Facebook -->

                            

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->


        <!-- Footer --
        <footer class="page-section bg-gray-lighter footer pb-60">
            <div class="container">

                <!-- Footer Logo --
                <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                    <a href="#top"><img src="images/logo-footer.png" width="78" height="36" alt="" /></a>
                </div>
                <!-- End Footer Logo -->

                <!-- Social Links --
                <div class="footer-social-links mb-110 mb-xs-60">
                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                    <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                </div>
                <!-- End Social Links -->

                <!-- Footer Text --
                <div class="footer-text">

                    <!-- Copyright --
                    <div class="footer-copy font-alt">
                        <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Rhythm 2017</a>.
                    </div>
                    <!-- End Copyright --

                    <div class="footer-made">
                        Made with love for great people.
                    </div>

                </div>
                <!-- End Footer Text --

            </div>


            <!-- Top Link --
            <div class="local-scroll">
                <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
            </div>
            <!-- End Top Link --

        </footer>
        <!-- End Foter -->


    </div>
    <!-- End Page Wrap -->


    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/contact-form.js"></script>
    <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

</body>

</html>