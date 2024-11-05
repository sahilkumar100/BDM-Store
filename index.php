<?php 
  session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BDM Store</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap/css/bootstrap.min.css?v=6"
    />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css?v=6" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css?v=6" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css?v=6" />
    <link
      rel="stylesheet"
      href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css?v=6"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.min.css?v=6"
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
      ?>

      <section class="main-slider">
        <div
          class="swiper-container thm-swiper__slider"
          data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/backgrounds/bg-2.jpg);
                "
              ></div>
              <div class="image-layer-overlay"></div>
              <!-- /.image-layer -->
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="main-slider__content">
                      <p>Tea from Assam</p>
                      <h2>
                        Your needs, our curated <br /> 
                        collection.
                      </h2>
                      <a href="index2.php" class="thm-btn"
                        ><i class="fas fa-arrow-circle-right"></i>Buy Now</a
                      >
                      <div class="main-slider__shape-1 zoom-fade">
                        <img
                          src="assets/images/shapes/main-slider-1-shape-1.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/bg-3.jpg);
                "
              ></div>
              <div class="image-layer-overlay"></div>
              <!-- /.image-layer -->
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="main-slider__content">
                      <p>Feel Secure Always</p>
                      <h2>
                        Your needs, our curated <br /> 
                        collection.
                      </h2>
                      <a href="index2.php" class="thm-btn"
                        ><i class="fas fa-arrow-circle-right"></i>Buy Now</a
                      >
                      <div class="main-slider__shape-1 zoom-fade">
                        <img
                          src="assets/images/shapes/main-slider-1-shape-1.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="image-layer"
                style="
                  background-image: url(assets/images/backgrounds/bg\(1\).jpg);
                "
              ></div>
              <div class="image-layer-overlay"></div>
              <!-- /.image-layer -->
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="main-slider__content">
                      <p>comfort diapers</p>
                      <h2>
                        Your needs, our curated <br /> 
                        collection.
                      </h2>
                      <a href="index2.php" class="thm-btn"
                        ><i class="fas fa-arrow-circle-right"></i>Buy Now</a
                      >
                      <div class="main-slider__shape-1 zoom-fade">
                        <img
                          src="assets/images/shapes/main-slider-1-shape-1.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
         
          
        </div>
      </section>

      <!--Welcome One Start-->
      
       <div class="container-1">
           <div class="section-title text-center">
            <span class="section-title__tagline">Latest Products</span>
             </div>
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-05-31 at 20.13.17_176632b5.jpg" alt="img-1" />
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-05-31 at 20.13.17_4ffb060f.jpg" alt="img-2" />
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-06-01 at 22.54.40_d2f66525.jpg" alt="img-3" />
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-05-31 at 20.13.17_176632b5.jpg" alt="img-1" />
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-05-31 at 20.13.17_4ffb060f.jpg" alt="img-2" />
          <img class="image-item" src="assets/images/backgrounds/WhatsApp Image 2024-06-01 at 22.54.40_d2f66525.jpg" alt="img-3" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
    
      <!--Welcome One End-->

      <!--Join One Start-->
      <section class="join-one">
        <div
          class="join-one-bg jarallax"
          data-jarallax
          data-speed="0.2"
          data-imgPosition="50% 0%"
          style="background-image: url(assets/images/backgrounds/pads.jpg)"
        ></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="join-one__inner">
  <h3 class="join-one__title">
    A BETTER LIFE WITH<br />A BETTER SANITARY NAPKIN
  </h3>

  <p>
    Sanitary napkins are essential products designed to provide comfort, hygiene, and dignity to women during their menstrual cycle. They play a crucial role in managing menstrual flow, allowing women to continue their daily activities with confidence and ease. Made from soft, absorbent materials, sanitary napkins offer a reliable and discreet solution to menstrual management.

Our commitment is to ensure that every woman has access to high-quality sanitary napkins that prioritize both comfort and protection. We understand the importance of menstrual hygiene in maintaining overall health and well-being, and we strive to break the stigma surrounding periods by promoting open conversations and education about menstrual health.

By providing sanitary napkins, we aim to empower women to live their lives without interruption, ensuring that no girl has to miss out on her education or opportunities due to her period. We believe that access to sanitary napkins is a fundamental right, not a luxury, and we are dedicated to making this a reality for all women.

Join us in supporting menstrual health and hygiene, and let's work together to create a world where every woman can menstruate with dignity and confidence.
  </p>
</div>

            </div>
          </div>
        </div>
      </section>
      <!--Join One End-->

     
      <!--Helping One Start-->
      <section class="helping-one">
        <div class="container">
          <div class="section-title text-center">
            <span class="section-title__tagline">Join Us</span>
            
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="helping-one__left">
          
                <div class="helping-one__left-img">
                  <img src="assets/images/resources/h-1.jpg" alt="" />
                  <div class="helping-one__left-icon-box">
                    <span class="icon-heart"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="helping-one__right">
                <form action="" class="helping-one__right-form">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="helping-one__right-input-box">
                        
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <input type="text" name="name" placeholder="Your Name" />
                    </div>
                    <div class="col-lg-6">
                      <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                      />
                    </div>
                    <div class="col-lg-12">
                      <input
                        type="text"
                        name="phone"
                        placeholder="Phone Number"
                      />
                    </div>
                    <div class="col-lg-12">
                      <textarea
                        name="message"
                        placeholder="Write Message"
                      ></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button
                        type="submit"
                        class="thm-btn helping-one__right-btn"
                      >
                        <i class="fas fa-arrow-circle-right"></i>Continue Now
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Helping One End-->

     

      <!--Testimonial One Start-->
      <section class="testimonial-one">
        <div
          class="testimonial-one-bg"
          style="
            background-image: url(assets/images/backgrounds/bg-cover-2.jpg);
          "
        ></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-4">
              <div class="testimonial-one__left">
                <div class="section-title text-left">
                  <span class="section-title__tagline">Coustomer Review</span>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="testimonial-one__right">
                <div class="testimonial-one__carousel owl-theme owl-carousel">
                  <!--Testimonial One Single-->
                  <div class="testimonial-one__single">
                    <p class="testimonial-one__text">
                      "Amazing product! Best tea and Sanitary Napkins I've ever used. Will definitely buy again!"
                    </p>
                    <div class="testimonial-one__client-info">
                      <div class="testimonial-one__client-img">
                        <img
                          src="assets/images/testimonial/testimonial-1-img-1.png"
                          alt=""
                        />
                        <div class="testimonial-one__quote"></div>
                      </div>
                      <div class="testimonial-one__client-name">
                        <h3>Surbhi Kumari</h3>
                        
                      </div>
                    </div>
                  </div>
                  <!--Testimonial One Single-->
                  <div class="testimonial-one__single">
                    <p class="testimonial-one__text">
                      "Top-notch quality and great customer service. I'm a loyal customer now."

                    </p>
                    <div class="testimonial-one__client-info">
                      <div class="testimonial-one__client-img">
                        <img
                          src="assets/images/testimonial/testimonial-1-img-2.png"
                          alt=""
                        />
                        <div class="testimonial-one__quote"></div>
                      </div>
                      <div class="testimonial-one__client-name">
                        <h3>Riya Singh</h3>
                        
                      </div>
                    </div>
                  </div>
                  <!--Testimonial One Single-->
                  <div class="testimonial-one__single">
                    <p class="testimonial-one__text">
                      "These tea bags are fantastic, and the Sanitary Napkins are incredibly comfortable. Highly satisfied!"

                    </p>
                    <div class="testimonial-one__client-info">
                      <div class="testimonial-one__client-img">
                        <img
                          src="assets/images/testimonial/testimonial-1-img-1.png"
                          alt=""
                        />
                        <div class="testimonial-one__quote"></div>
                      </div>
                      <div class="testimonial-one__client-name">
                        <h3>Sneha Agrawal</h3>
                       
                      </div>
                    </div>
                  </div>
                  <!--Testimonial One Single-->
                  <div class="testimonial-one__single">
                    <p class="testimonial-one__text">
                      "Fast shipping, excellent quality. Highly recommend this website for tea and Sanitary Napkins."

                    </p>
                    <div class="testimonial-one__client-info">
                      <div class="testimonial-one__client-img">
                        <img
                          src="assets/images/testimonial/testimonial-1-img-2.png"
                          alt=""
                        />
                        <div class="testimonial-one__quote"></div>
                      </div>
                      <div class="testimonial-one__client-name">
                        <h3>Akriti Bhardwaj</h3>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Testimonial One End-->


      <!--Brand One Start-->
      <section class="brand-one">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="brand-one__carousel owl-theme owl-carousel">
                <!--Brand One Single-->
                <div class="brand-one__single">
                  <div class="brand-one__img">
                    <img src="assets/images/resources/brand-1-1.png" alt="" />
                  </div>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                  <div class="brand-one__img">
                    <img src="assets/images/resources/brand-1-2.png" alt="" />
                  </div>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                  <div class="brand-one__img">
                    <img src="assets/images/resources/brand-1-3.png" alt="" />
                  </div>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                  <div class="brand-one__img">
                    <img src="assets/images/resources/brand-1-4.png" alt="" />
                  </div>
                </div>
                <!--Brand One Single-->
                <div class="brand-one__single">
                  <div class="brand-one__img">
                    <img src="assets/images/resources/brand-1-5.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Brand One End-->

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
     <script src="script.js" ></script>
  </body>
</html>
