<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
} 
// dependency order maters

include('includes/connect.php');
include('functions/common_functions.php');
$ip=getIPAddress();
global $con;

if(isset($_POST['update_cart'])){

  $product_id = $_POST['update_cart'];
$qty=$_POST['qty_' . $product_id];

  if(isset($_SESSION['username'])){
      $username=$_SESSION['username'];
    $update_query="UPDATE `cart` SET `quantity` = '$qty' WHERE `cart`.`product_id` = $product_id AND `cart`.`username` = '$username' and status='pending';";

  }
  else{
    $update_query="UPDATE `cart` SET `quantity` = '$qty' WHERE `cart`.`product_id` = $product_id AND `cart`.`ip_address` = '$ip' AND `cart`.`username` IS NULL AND `cart`.`status`='pending';";

  }
    $result_update=mysqli_query($con,$update_query);
}



if(isset($_POST['remove_cart'])){
    $product_id = $_POST['remove_cart'];

    if(isset($_SESSION['username'])){
              $username=$_SESSION['username'];

      $delete_query= "DELETE FROM cart WHERE `cart`.`product_id` = $product_id AND `cart`.`username` = '$username' AND `cart`.`status`='pending';";
  
    }
    else{
      $delete_query= "DELETE FROM cart WHERE `cart`.`product_id` = $product_id AND `cart`.`ip_address` = '$ip' AND `cart`.`username` IS NULL AND `cart`.`status`='pending';";
  
    }
    $result_delete=mysqli_query($con,$delete_query);

}

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
  </head>

  <body>
    <!-- /.Header Section Start -->
    <div class="page-wrapper">
      
      <?php 
      include('./includes/site_header.php');
      ?>

<div class="container ">

<div class="row">
    <form action="" method="post">
    <table class="table table-bordered">
       
        <?php 



        $total=0;
        
  if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    $cart_query="select * from `cart` where status='pending' and username='$username'; ";

  }else{
    $username=NULL;
    $cart_query="SELECT * FROM `cart` WHERE ip_address='$ip' AND status='pending' AND username IS NULL;";

  }

        $result_cart=mysqli_query($con,$cart_query);
        $numRows=mysqli_num_rows($result_cart);
        // echo $numRows;
        if($numRows>0){

            echo " <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Update Quantity</th>
                <th>Price</th>
                <th colspan='2'>Operations</th>
            </tr>
        </thead>
        
    
        <tbody>";
        
        while($row=mysqli_fetch_array($result_cart)){
        $product_id=$row['product_id'];
        $quantity=$row['quantity'];
        $price_query="select * from `products` where product_id='$product_id'";
        $result_price=mysqli_query($con,$price_query);
        $row=mysqli_fetch_array($result_price);
        $price=$row['price'];
        $product_title=$row['product_title'];
        $image1=trim($row['image1']);
        // $total_item_price=$price*$quantity;
        // // $total+=$total_item_price;
$total=total_price();
        
           echo "<tr>
           <td>$product_title</td>
           <td><img src='./admin/product_images/$image1'  style='width:100px'></td>
           <td>$quantity</td>
        
           <td><input type='text' name='qty_$product_id' class='form-input w-50'></td>
           <td>$price</td>
           <td>
           <button type='submit' class='bg-info px-3 py-2' name='update_cart' value='$product_id'>Update Cart</button>  
           <button type='submit' class=' px-3 py-2' name='remove_cart' value='$product_id'>Remove Item</button>  

           </td>
       </tr>";


        }
        echo " </tbody>
        </table>
        </form>

        <div class='d-flex' style='justify-content:center'>
            <h4 class='p-3'>Subtotal:<strong class='text-info'> $total</strong></h4>
            <a href='index2.php'><button class='px-3 py-2 mx-3'>Continue Shopping</button></a>
            <a href='checkout.php'><button class='bg-info px-3 py-2'>Checkout</button></a>
        </div>";
    }
    else{
        echo "<div ><H2 style='padding:30px'class='text-center text-danger'>Cart is Empty</H2></div>
        <div class='py-2'><a href='index2.php'><button class='px-3 py-2 mx-3'>Continue Shopping</button></a>
        </div>";    

    }
        
            ?>
       
</div>
</div>



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







            