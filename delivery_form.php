
<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
} 
?><!DOCTYPE html>
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
   <link rel="stylesheet" href="causes.css">
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
    <style>

body {
  background-color: #f8f9fa;
}

.cont1 {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 30px ;
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}



  </style>
</head>


  <body>
    <!-- /.Header Section Start -->
    <div class="page-wrapper">
  

<?php 
    include('./includes/site_header.php');
    ?>
  <div class="cont1">
    
    <h1 class="text-center mt-5">Delivery Details</h1>
    <form class="deliveryForm" class="mt-4" method="post">
      <div class="form-group">
        <label for="recipientName">Recipient Name</label>
        <input type="text" class="form-control" name="recipientName" placeholder="Enter recipient name" required>
      </div>
      <div class="form-group">
        <label for="mobileNumber">Mobile Number</label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter mobile number" required>
      </div>
      <div class="form-group">
        <label for="deliveryAddress">Delivery Address</label>
        <textarea class="form-control" name="address" rows="3" placeholder="Enter delivery address" required></textarea>
      </div>
      <div class="form-group">
        <label for="additionalRemarks">Additional Remarks</label>
        <textarea class="form-control" name="remarks" rows="3" placeholder="Enter any additional remarks"></textarea>
      </div>
      <button type="submit" name="pay" class="btn btn-primary">Proceed to pay</button>
    </form>
  </div>

  <?php 
  include('./includes/site_footer.php');
  ?>
</div>

 
  <script src="script.js"></script>
</body>
</html>




<?php 
if(isset($_POST['pay'])){
    $name=$_POST['recipientName'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $remarks=$_POST['remarks'];
    $total=total_price();

    $user_id=$_SESSION['user_id'];
    $invoice=mt_rand();

    $insert_order="INSERT INTO `order` (`user_id`, `amount`, `invoice_number`, `order_date`, `order_status`, `name`, `address`, `phone`, `additional`) VALUES ('$user_id', '$total', '$invoice', current_timestamp(), 'pending', '$name', '$address', '$phone', '$remarks');";
    $result_insert_order=mysqli_query($con,$insert_order);
    if($result_insert_order){

    }
    else{
      echo "<script>alert('Cannot Place Order. Please try again later');</script>";
    }


  }




?>