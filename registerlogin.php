<?php
session_start();
include ('./includes/connect.php');
include ('./functions/common_functions.php');
$ip = getIPAddress();


if(isset($_SESSION['username'])){
            echo "<script>window.location.href = 'pay.php';</script>";
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
    rel="stylesheet" />
  <link rel="stylesheet" href="causes.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
  <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
  <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
  <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
  <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
  <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
  <link rel="stylesheet" href="assets/vendors/halpes-icons/style.css" />
  <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
  <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />

  <!-- template styles -->
  <link rel="stylesheet" href="assets/css/halpes.css" />
  <link rel="stylesheet" href="assets/css/halpes-responsive.css" />
</head>

<body>
  <!-- /.Header Section Start -->
  <div class="page-wrapper">
    <?php
    include ('./includes/site_header.php'); ?>

    <div class="container1">
      <div class="signin-signup">
        <form action="" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="login_username">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="login_password">
          </div>
          <input type="submit" value="Login" name="user_login" class="btn">
          <p class="social-text">Or Sign in with social platform</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="user_username">
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" name="user_email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="user_password">
          </div>
          <input type="submit" value="Sign Up" name="user_register" class="btn">
          <p class="social-text">Or Sign in with social platform</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
        </form>
      </div>
      <div class="panels-container1">
        <div class="panel left-panel">
          <div class="content">
            <h3>Member of Brand?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima
              iure?</p>
            <button class="btn" id="sign-in-btn">Sign in</button>
          </div>
          <img src="signin.svg" alt="" class="image">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>New to Brand?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima
              iure?</p>
            <button class="btn" id="sign-up-btn">Sign up</button>
          </div>
          <img src="signup.svg" alt="" class="image">
        </div>
      </div>
    </div>
    <?php
    include ('./includes/site_footer.php');

    ?>
  </div>
  <!-- /.page-wrapper -->


</body>

<script src="app.js"></script>

</html>





<?php


// if (isset($_POST['user_register'])) {


//   $user_username = $_POST['user_username'];
//   $user_email = $_POST['user_email'];
//   $user_password = $_POST['user_password'];
//   $hash_pass = password_hash($user_password, PASSWORD_DEFAULT);

//   $select_query2 = "select * from `users` where username='$user_username' or email='$user_email'";
//   $result_select2 = mysqli_query($con, $select_query2);
//   $row = mysqli_num_rows($result_select2);
//   if ($row > 0) {
//     echo "<script>alert('Username or email already exists')</script>";
//   } else {
//     $register = "INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `ip_address`) VALUES (NULL, '$user_username', '$user_email', '$hash_pass', '$ip');";
//     $result_register = mysqli_query($con, $register);
//     if ($result_register) {
//       echo "<script>alert('User Registered Successfully. Please Login to Continue');</script>";
//     } else {
//       die(mysqli_error($con));
//     }
//   }

//   // $select_cart_items="select * from `cart` where ip_address='$ip'";
// // $result_select_cart_items=mysqli_query($con,$result_select_cart_items);
// // $rows=mysqli_num_rows($result_select_cart_items);
// // if($rows>0){
// //   $_SESSION['usermame']=$user_username;
// //   echo "<script>alert('You have some items in the cart');</script>";
// //   echo "<script>window.open('../checkout.php')</script>";
// // }else{
// //   echo "<script>window.open('../checkout.php')</script>";

//   // }



// }
if (isset($_POST['user_register'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_pass = password_hash($user_password, PASSWORD_DEFAULT);

    // Check if username or email already exists
    $select_query2 = "SELECT * FROM users WHERE username=? OR email=?";
    $stmt = $con->prepare($select_query2);
    $stmt->bind_param("ss", $user_username, $user_email);
    $stmt->execute();
    $result_select2 = $stmt->get_result();
    $row = $result_select2->num_rows;

    if ($row > 0) {
        echo "<script>alert('Username or email already exists')</script>";
    } else {
        // Insert new user into the database
        $register = "INSERT INTO users (username, email, password, ip_address) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($register);
        $stmt->bind_param("ssss", $user_username, $user_email, $hash_pass, $ip);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('User Registered Successfully. Please Login to Continue');</script>";
        } else {
            die("Error: " . $stmt->error);
        }
    }
}



// if (isset($_POST['user_login'])) {

//   $login_username = $_POST['login_username'];
//   $login_pass = $_POST['login_password'];
//   $select_login = "select * from `users` where username='$login_username'";
//   $result_login = mysqli_query($con, $select_login);
//   $row1 = mysqli_num_rows($result_login);
//   $rowdata = mysqli_fetch_assoc($result_login);


//   if ($result_login != NULL) {

//     if ($row1 > 0) {
//       if ($rowdata) {
//         $real_pass = $rowdata['password'];

//       }
//       if (password_verify($login_pass, $real_pass)) {
//                   $_SESSION['username'] = $login_username;
//         echo "<script>alert('Login Successful, Welcome back $login_username');</script>";

//         // $get_user_id = "select user_id from `users` where username='$login_username'";
//         // $result_user_id = mysqli_query($con, $get_user_id);

//         // if ($row_user_id = mysqli_fetch_assoc($result_user_id)) {
          
//         //   $user_id = $row_user_id['user_id'];
//         //   $_SESSION['user_id']=$user_id;

//         //   // Now you can use $user_id as needed
//         // } else {
//         //   // Handle error if the query fails
//         //   echo "Error: " . mysqli_error($con);
//         // }
//         //updating cart
// //         $select_query = "SELECT * FROM cart WHERE ip_address='$ip' AND status='pending' AND username IS NULL";
// // $result_select = mysqli_query($con, $select_query);

// // while ($row = mysqli_fetch_assoc($result_select)) {
// //     $product_id = $row['product_id'];
// // echo $product_id;
// //     $select_query2 = "SELECT * FROM cart WHERE ip_address='$ip' AND status='pending'";
// //     $result_select2 = mysqli_query($con, $select_query2);
// //     $num_rows=mysqli_num_rows($result_select2);
// //     while ($row2 = mysqli_fetch_assoc($result_select2)) {
// //         $product_id2 = $row2['product_id'];
// //         $quantity = $row2['quantity'] + 1;

// //         if ($product_id != $product_id2) {
// //             $update_cart = "UPDATE cart SET username='$login_username' WHERE ip_address='$ip' AND username IS NULL AND status='pending' AND product_id=$product_id";
// //             $result_update = mysqli_query($con, $update_cart);
// //         } else {
// //             $update_cart = "UPDATE cart SET quantity=$quantity WHERE ip_address='$ip' AND username='$username' AND status='pending' AND product_id=$product_id";
// //             $result_update = mysqli_query($con, $update_cart);
// //         }
// //     }
// //     if($num_rows=0){
// //       $update_cart = "UPDATE cart SET username='$login_username' WHERE ip_address='$ip' AND username IS NULL AND status='pending' AND product_id=$product_id";
// //         $result_update = mysqli_query($con, $update_cart);
// //     }
// // }
// // $select = "SELECT product_id FROM cart WHERE username='$login_username' AND status='pending'";
// // $result = mysqli_query($con, $select);
// // while($row = mysqli_fetch_assoc($result)){
// //     $product_id=$row['product_id'];
// // $update_cart = "UPDATE cart SET username='$login_username' WHERE ip_address='$ip' AND status='pending' AND username IS NULL AND product_id !=$product_id";
// // $result_update = mysqli_query($con, $update_cart);
// // if($result_update){
// //             echo "<script>alert('New Items added to cart');</script>";
// // }
// // }
// // $select = "SELECT product_id FROM cart WHERE username='$login_username' AND status='pending'";
// // $result = mysqli_query($con, $select);

// // // Fetch all product IDs associated with the user
// // $product_ids = array();
// // while($row = mysqli_fetch_assoc($result)) {
// //     $product_ids[] = $row['product_id'];
// // }

// // // Update cart for all matching rows
// // $update_cart = "UPDATE cart SET username='$login_username' WHERE ip_address='$ip' AND status='pending' AND username IS NULL AND product_id NOT IN (" . implode(",", $product_ids) . ")";
// // $result_update = mysqli_query($con, $update_cart);

// // if ($result_update) {
// //     echo "<script>alert('New items added to cart');</script>";
// // }

// if(isset($_SESSION['product_id'])){
//     $product_id=$_SESSION['product_id'];
//           echo "<script>window.location.href = 'index2.php?add_to_cart=$product_id';</script>";
// exit; 
// }



//         echo "<script>window.location.href = 'cart.php';</script>";
//         exit;
//       } else {
//         echo "<script>alert('Incorrect Password');</script>";
//       }

//     } else {
//       echo "<script>alert('No user found with username - $login_username');</script>";
//     }

//   }
// }


if (isset($_POST['user_login'])) {
    $login_username = $_POST['login_username'];
    $login_pass = $_POST['login_password'];

    // Prepare and execute the query to retrieve user information based on username
    $select_login = "SELECT * FROM users WHERE username=?";
    $stmt = $con->prepare($select_login);
    $stmt->bind_param("s", $login_username);
    $stmt->execute();
    $result_login = $stmt->get_result();

    // Check if a row with the provided username exists
    if ($result_login->num_rows > 0) {
        $rowdata = $result_login->fetch_assoc();
        $real_pass = $rowdata['password'];

        // Verify the entered password against the hashed password retrieved from the database
        if (password_verify($login_pass, $real_pass)) {
            $_SESSION['username'] = $login_username;
            echo "<script>alert('Login Successful, Welcome back $login_username');</script>";

            // If a product was selected for addition to cart before login, redirect to the cart page with the product ID
            if (isset($_SESSION['product_id'])) {
                $product_id = $_SESSION['product_id'];
                echo "<script>window.location.href = 'index2.php?add_to_cart=$product_id';</script>";
                exit;
            } else {
                // If no product was selected, redirect to the cart page
                echo "<script>window.location.href = 'cart.php';</script>";
                exit;
            }
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect Password');</script>";
        }
    } else {
        // No user found with the provided username
        echo "<script>alert('No user found with username - $login_username');</script>";
    }
}



?>