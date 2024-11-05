

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BDS Store</title>
    <!-- favicons Icons -->
    <!-- <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" /> -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.pips.css"
    />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/halpes-icons/style.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/tiny-slider/tiny-slider.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/owl.theme.default.min.css"
    />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/halpes.css" />
    <link rel="stylesheet" href="assets/css/halpes-responsive.css" />
  </head>

  <body>
    <!-- /.Header Section Start -->
    <div class="page-wrapper">
      
      <?php 
      include('./includes/site_header.php');
      ?><!-- /.stricky-header -->

       <!--Page Header Start-->
       <section class="page-header">
            <div class="page-header__bg" class="object-fit-contain border rounded"  style="background-image: url(assets/images/resources/contact.jpg); "></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li class="color-thm-gray">/</li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact With Us</span>
                    <h2 class="section-title__title">We love to hear from our <br> happy customers</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__left">
                            <div class="contact-page__img">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/009/385/064/small/contact-us-buttons-clipart-design-illustration-free-png.png" alt="">
                            </div>
                            
                            <div class="contact-page__contact-info">
                                <ul class="contact-page__contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-chat"></span>
                                        </div>
                                        <div class="text">
                                            <p>Call Anytime</p>
                                            <a href="tel:92 666 888 0000">92 666 888 0000</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <p>Send Email</p>
                                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-address"></span>
                                        </div>
                                        <div class="text">
                                            <p>Visit Office</p>
                                            <h5>80 broklyn golden street</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__form">
                            <form action="assets/inc/sendemail.php" class="contact-page__main-form contact-form-validated">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Phone Number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>Send a Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact page End-->

        <!--Contact Page Google Map Start-->

        






        <section class="contact-page-google-map">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57462.742499652144!2d87.4196750191751!3d25.822655804356337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sEuropean%20colony%2C%20near%20Indira%20Gandhi%20stadium%2C%20Srinagar%20road%C2%A0purnea%C2%A0854301!5e0!3m2!1sen!2sin!4v1705686455267!5m2!1sen!2sin"  class="contact-page-google-map__one" allowfullscreen></iframe>
    
        </section>
        <!--Contact Page Google Map End-->

     

        <!--Site Footer One Start-->
        <?php 
    include('./includes/site_footer.php');
    ?>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"
      ><i class="fa fa-angle-up"></i
    ></a>

    <script src="assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <!-- template js -->
    <script src="assets/js/halpes.js"></script>
    <script src="https://kit.fontawesome.com/e0b5f7b282.js" crossorigin="anonymous"></script>
  </body>
</html>