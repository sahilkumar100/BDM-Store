<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/halpes.css" />
    <link rel="stylesheet" href="assets/css/halpes-responsive.css" />
</head>
<body>
  <div class="page-wrapper">
      
    <header class="main-header clearfix">
        <div class="main-header__logo">
          <a href="index.html">
            <img src="assets/images/resources/logo.jpg" alt="" />
          </a>
        </div>
        <div class="main-menu-wrapper">
          <div class="main-menu-wrapper__top">
            <div class="main-menu-wrapper__top-inner">
              <div class="main-menu-wrapper__left">
                <div class="main-menu-wrapper__left-content">
                  <div class="main-menu-wrapper__left-text">
                    <p>Welcome to the BDS Store</p>
                  </div>
                  <div class="main-menu-wrapper__left-email-box">
                    <div class="icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div class="email">
                      <a href="mailto:piyush.rityog@gmail.com"
                        >sahilsoni2005s@gmail.com</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="main-menu-wrapper__right">
                <div class="main-menu-wrapper__right-social">
        
                  <a href="#"><i class="fab fa-facebook-square"></i></a>

                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="main-menu-wrapper__bottom">
            <nav class="main-menu">
              <div class="main-menu__inner">
                <a href="#" class="mobile-nav__toggler"
                  ><i class="fa fa-bars"></i
                ></a>
                <ul class="main-menu__list">
                  <li class="dropdown current">
                    <a href="index.html">Home</a>
                  </li>
                  <li class="dropdown">
                    <a href="about.html">About Us</a>
                  </li>
                  <li class="dropdown">
                    <a href="causes.html">Our Clients</a>
    
                  </li>
                  <li class="dropdown">
                    <a href="events.html">Gallery</a>
                    
                  </li>
                  <li class="dropdown">
                    <a href="index2.html">Products</a>
                    
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="main-menu__right">
                  <div class="icon-cart">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                    </svg>
                    <span class="number">0</span>
                </div>
                  <div class="main-menu__phone-contact">
                    <div class="main-menu__phone-icon">
                      <span class="icon-chat"></span>
                    </div>
                   
                  </div>
                  <a href="causes-details.html" class="main-menu__donate-btn"
                    ><i class="fa-solid fa-user"></i>Log in
                  </a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>
    </div>
  

    
    <div class="container1">
      
      <div id="contentTab">
         
      </div>
  </div>

    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            show
            
        </div>

        
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>
    



    <footer class="site-footer">
      <div
        class="site-footer-bg"
        style="background-image: url(assets/images/backgrounds/footer.jpg)"
      ></div>
      <div class="container">
        <div class="site-footer__top">
        
        </div>
        
      </div>
    </footer>
    <!--Site Footer One End-->
  </div>
  <!-- /.page-wrapper -->

  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"
        ><i class="fa fa-times"></i
      ></span>

      <div class="logo-box">
        <a href="index.html" aria-label="logo image"
          ><img src="assets/images/resources/logoi-01.png" width="155" alt=""
        /></a>
      </div>
      <!-- /.logo-box -->
      <div class="mobile-nav__container"></div>
      <!-- /.mobile-nav__container -->

      <ul class="mobile-nav__contact list-unstyled">
        <li>
          <i class="fa fa-envelope"></i>
          <a href="mailto:needhelp@packageName__.com">sahilsoni2005s@gmail.com</a>
        </li>
        <li>
          <i class="fa fa-phone-alt"></i>
          <a href="#">8287355749</a>
        </li>
      </ul>
      <!-- /.mobile-nav__contact -->
      <div class="mobile-nav__top">
        <div class="mobile-nav__social">
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-facebook-square"></a>
          <a href="#" class="fab fa-pinterest-p"></a>
          <a href="#" class="fab fa-instagram"></a>
        </div>
        <!-- /.mobile-nav__social -->
      </div>
      <!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
  </div>
  <!-- /.mobile-nav__wrapper -->

  <div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
      <form action="#">
        <label for="search" class="sr-only">search here</label
        ><!-- /.sr-only -->
        <input type="text" id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="thm-btn">
          <i class="icon-magnifying-glass"></i>
        </button>
      </form>
    </div>
    <!-- /.search-popup__content -->
  </div>
  <!-- /.search-popup -->

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
    <script src="cart.js" type="module"></script>
</body>
</html>