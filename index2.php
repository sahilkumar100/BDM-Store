<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
} 
include ('./includes/connect.php');
include ('./functions/common_functions.php');
// include ('./includes/header.php');
cart();
?>

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

    
  <!-- Product CSS -->
  <link rel="stylesheet" href="product.css">

  </head>

  <body>
    <!-- /.Header Section Start -->
    <div class="page-wrapper">
      
      <?php 
      include('./includes/site_header.php');
      ?>

<!-- /.stricky-header -->
<div id="app"></div>
<div id="temporaryContent">
  <div class="listProduct">
    <!-- //edit 1 -->
    <?php
    getProducts();
    
  
    ?>


  </div>
  <!-- Sidebar -->

    </div>
</div>
<?php
include ('./includes/footer.php');
?>


 <!--Site Footer One Start-->

 <?php 
    // include('./includes/site_footer.php');
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
