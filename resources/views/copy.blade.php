<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gagan Yadav Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <!-- Favicons -->
    <link href="assets/img/log1.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <!-- =======================================================
  * Template Name: Personal - v4.3.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@if(session('message'))
    <div class="alert alert-info" role="alert" style="margin:auto;">
        <strong>{{session('message')}}</strong>
        <button style="float:right;" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container ">

            <h1><a href="{{route('gagan')}}">Gagan Yadav</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span>PHP Developer</span> from Kanpur</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="https://twitter.com/Yadavgagan7081" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/gagan.yadav.752861" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/mr.__mister_g.g.n/" class="instagram"><i class="bi bi-instagram"></i></a>
                <!-- <a href="live:.cid.ff3d3d4d32808a1f" class="google-plus"><i class="bi bi-skype"></i></a> -->
                <a href="https://www.linkedin.com/in/gagan-ydv/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>


        </div>
    </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/me.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <!-- <h3>UI/UX &amp; PHP Developer</h3> -->
                    <h3>PHP Developer</h3>
                    <p class="fst-italic">
                        Innovative and deadline-driven PHP Developer with 5+ months of experience designing and developing user-centered dynamic websites from initial concept to final, polished deliverable.

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>28 July 1997</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.gagan.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+91 7897544882</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Kanpur, Uttar Pradesh</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>gaganydv7@gmail.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Company:</strong> <span>Waycool Foods</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        I am a hard-working and driven individual who isn’t afraid to face a challenge.

                        I’m passionate about my work and I know how to get the job done.

                        I would describe myself as an open and honest person who doesn’t believe in misleading other people and tries to be fair in everything I do.
                    </p>
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Counts ======= -->
        <div class="counts container">

            <div class="row">

                <div class="col-lg-4 col-md-8">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>YEARS OF EXPERIENCE</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                        <p><a href="https://github.com/Gaganydv7?tab=repositories">Projects</a></p>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="146" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div> -->

                <div class="col-lg-4 col-md-8 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div><!-- End Counts -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">PHP <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">C <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">Laravel <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Python <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">sql <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                    <div class="progress">
                        <span class="skill">API <i class="val">40%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- End Skills -->

        <!-- ======= Interests ======= -->
        <div class="interests container">

            <div class="section-title">
                <h2>Interests</h2>
            </div>

            <!-- these are iconify icons -->
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box">
                        <!-- <i class="round-sports-volleyball" style="color: #ffbb2c;"></i> -->
                        <i class="iconify" data-icon="bi:people-fill" style="color:#ffbb2c; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Volunteer Work</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <!-- <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i> -->
                        <i class="iconify" data-icon="ic:round-sports-volleyball" style="color:#5578ff; font-size:32px;"></i>
                        <h3>&nbsp&nbsp volleyball</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <!-- <i class="ri-calendar-todo-line" style="color: #e80368;"></i> -->
                        <i class="iconify" data-icon="maki:gaming-15" style="color:#e80368; font-size:32px;"></i>

                        <h3>&nbsp&nbsp Gaming</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <!-- <i class="ri-paint-brush-line" style="color: #e361ff;"></i> -->
                        <i class="iconify" data-icon="simple-icons:happycow" style="color:#e361ff; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Pet Care</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <!-- <i class="ri-database-2-line" style="color: #47aeff;"></i> -->
                        <i class="iconify" data-icon="cib:apple-music" style="color:#47aeff; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Music</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <!-- <i class="ri-gradienter-line" style="color: #ffa76e;"></i> -->
                        <i class="iconify" data-icon="dashicons:food" style="color:#ffa76e; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Cooking</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <!-- <i class="ri-file-list-3-line" style="color: #11dbcf;"></i> -->
                        <i class="iconify" data-icon="emojione:cricket-game" style="color:#11dbcf; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Cricket</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <!-- <i class="ri-price-tag-2-line" style="color: #4233ff;"></i> -->
                        <i class="iconify" data-icon="fluent:people-team-add-20-regular" style="color:#11dbcf; font-size:32px;"></i>
                        <h3>&nbsp&nbsp Leading The Team</h3>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-anchor-line" style="color: #b2904f;"></i>
                        <h3>Dirada Pack</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-disc-line" style="color: #b20969;"></i>
                        <h3>Moton Ideal</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-base-station-line" style="color: #ff5828;"></i>
                        <h3>Verdo Park</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                        <h3>Flavor Nivelanda</h3>
                    </div> 
                </div>-->
            </div>

        </div><!-- End Interests -->
        <hr>
        <!-- ======= Testimonials ======= -->
        <!-- <div class="testimonials container"> -->

        <div class="section-title footer-copyright text-center py-2">
            <h3 style="color:grey;">Previously worked with </h1>

                <p1 style="color:grey; font-size:14px;">Here are some organisations I had a pleasure to work with on their video, app, website products.</p>
                    <!-- </div> -->

                    <!-- <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="0"> -->

                    {{-- <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="owl-carousel testimonials-carousel">

            </div>--}}
                    <!-- Footer -->
                    <!-- <footer class="page-footer font-small cyan darken-3"> -->

                    <!-- Footer Elements -->
                    <div class="counts container ">

                        <!-- Grid row-->
                        <div class="row">

                            <!-- Grid column -->
                            <!-- <div class="col-lg-4 col-md-8"> -->
                            <!-- <div class="mb-5 flex-center"> -->

                            <!-- Byju's -->
                            <div class="col-md-0">
                                <!-- <div class="count-box " style="background-color: transparent;"> -->
                                <!-- <i class="iconify" data-icon="fluent:people-team-add-20-regular" style="color:grey; font-size:70px;"></i> -->
                                <!-- <img style="filter: invert(100%);"  src="assets/img/byjus.jpg" height="80px" width="120px" /> -->
                                <img " src=" assets/img/byjus1.jpg" height="80px" width="120px" />

                                <!-- </div> -->
                                <!-- </div> -->
                                <br>
                                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                <!-- <div class="col-md-0"> -->
                                <!-- <div class="count-box" style="background-color: transparent;"> -->
                                <!-- <i class="iconify" data-icon="fluent:people-team-add-20-regular" style="color:grey; font-size:70px;"></i> -->
                                <img " src=" assets/img/inventics1.jpg" height="80px" width="90px" />


                                <!-- </div> -->
                            </div>



                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- </div> -->
                    <!-- Grid row-->
                    <!-- Copyright -->
                    <!-- <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div> -->
                    <!-- Copyright -->
                    <!-- </div> -->
                    <!-- Footer Elements -->



                    <!-- </footer> -->
                    <!-- Footer -->
        </div><!-- End Testimonials  -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Summary</h3>
                    <div class="resume-item pb-0">
                        <!-- <h4>Alice Barkley</h4> -->
                        <p><em>Dedicated web developer with five months of experience in website design and database administration. Strong creative and analytical skills. Team player with an eye for detail. Html , Css, MySQL, Python, Php, and Laravel.</em></p>
                        <!-- <p>
                        <ul>
                            <li>Portland par 127,Orlando, FL</li>
                            <li>(123) 456-7891</li>
                            <li>alice.barkley@example.com</li>
                        </ul>
                        </p> -->
                    </div>

                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Master of Computer Application</h4>
                        <h5>2018 - 2021</h5>
                        <p><em>Institute of Engineering &amp; Technology, Lucknow, UP</em></p>
                        <!-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> -->
                    </div>
                    <div class="resume-item">
                        <h4>Bachelor of Computer Application</h4>
                        <h5>2015 - 2018</h5>
                        <p><em>Dr Virendra Swarup Institute of Computer Studies, Kanpur, UP</em></p>
                        <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
                    </div>
                    <div class="resume-item">
                        <h4>Intermediate</h4>
                        <h5>2014 - 2015</h5>
                        <p><em>Hal Vidyalaya, Kanpur, UP</em></p>
                        <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
                    </div>
                    <div class="resume-item">
                        <h4>High School</h4>
                        <h5>2012 - 2013</h5>
                        <p><em>Hal Vidyalaya, Kanpur, UP</em></p>
                        <!-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>PHP Developer</h4>
                        <h5>2021 - Present</h5>
                        <p><em>Bangalore, Karnataka </em></p>
                        <p>
                        <ul>
                            <li>Develop front-end components based on provided design</li>
                            <li>Ability to complete duties on time while maintaining a high quality service</li>
                            <li>Understands the impact of good usability and user experience</li>
                            <li>Lead design and development of enterprise application using PHP, JavaScript, JQuery, CSS, HTML), Laravel Framework.</li>
                        </ul>
                        </p>
                    </div>
                    <div class="resume-item">
                        <h4>Web Development Internship</h4>
                        <h5>2021 - 2021</h5>
                        <p><em>Lucknow, UP</em></p>
                        <p>
                        <ul>
                            <li>Automating process with Laravel Framework, JQuery and Mysql.</li>
                            <li>Design, develop, document, and debug sites</li>
                            <li>Works on MVC Model and API</li>
                            <li>Created a Ecommerce Website which includes
                                Ajax Crud operation , Add to Cart and Account Details part,later the project was deployed on Live Server.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">WEB DESIGN</a></h4>
                        <!-- <p>These include Dynamic websites and eCommerce solutions focused on usability and responsive design, creative branding solutions that inject personality into your business, and custom programming for ideas that you need help bringing to fruition.</p> -->
                        <p>Design includes: imagery, typography, links, navigation, drop down navigation, rollovers, calls to actions, taglines, slides for home page and charts/graphs. Photography & Illustrations are included. Anything you send over is included too.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">WEB DEVELOPMENT</a></h4>
                        <p>In the age of interconnectivity, web development services are inevitably on the rise. ... Depending on the project's requirements, they can include solutions like web application development, cybersecurity, testing, maintenance, consultancy, and even UI/UX design.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">RESPONSIVE DESIGN</a></h4>
                        <p>What really matters to the users? A user wants a website that loads quickly, is easy to navigate, contains the information they need, and has an engaging design. In fact, organizations that describe themselves as “design-driven” are 89% more likely than their competitors to exceedtheir business goals. At Waycool Foods, we provide responsive web design services that can stand the test of time and various devices.</p>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">Dele cardo</a></h4>
                        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">Divera don</a></h4>
                        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                    </div>
                </div> -->

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Work &amp; Achievements</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Get In Touch</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>95/1,Ramadevi,Kanpur Nagar-208007</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="https://twitter.com/Yadavgagan7081" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/gagan.yadav.752861" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/mr.__mister_g.g.n/" class="instagram"><i class="bi bi-instagram"></i></a>
                            <!-- <a href="live:.cid.ff3d3d4d32808a1f" class="google-plus"><i class="bi bi-skype"></i></a> -->
                            <a href="https://www.linkedin.com/in/gagan-ydv/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/Gaganydv7?tab=repositories" class="github"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>gaganydv7@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+91 7897544882</p>
                    </div>
                </div>
            </div>

            <!-- {{--<form action="{{route('contact')}}" id="addform" method="post" role="form" class="php-email-form mt-4">--}} -->
            <form action="{{route('contact')}}" id="addform" method="post" role="form" class=" mt-4">
            {{csrf_field() }}
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <!-- <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->
                <br>
                <div class="text-center"><button class="btn btn-success" type="submit">Send Message</button></div> 
            </form>

        </div>
    </section><!-- End Contact Section -->

    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
        Designed by <a href="{{route('gagan')}}">Gagan Yadav</a>
        <!-- Designed by <span style="color:#29cc61">Gagan Yadav</span> -->
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- video -->
    {{--<script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}


    <!-- external -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    {{--<script type='text/javascript'>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#contact').on('submit', '#addtask', function(e) {
                e.preventDefault();
                var frmdata= $(this).serialize();
                $.post("{{route('contact')}}",frmdata,function(data,xhrStatus,xhr){

                })
            });;
        })
    </script>--}}

{{--<script type="text/javascript">
$(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    
    $('#addform').on('submit',function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "{{route('contact')",
            data: $('#addform').serialize(),
            success: function (response){
                console.log(response)
                $('#contact').modal('hide')
                alert("Data saved");
            },
            error: function(error){
                console.log(error)
                alert('Data not saved');
            }
        });
    });
    });
</script>--}}


</body>

</html>