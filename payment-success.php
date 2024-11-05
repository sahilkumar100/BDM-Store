<?php
session_start();
// error_reporting(E_ALL); ini_set('display_errors', 1);
include('./includes/connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';

$order_id = $_GET['oid'];
$username = $_SESSION['username'];

$verify_query = "SELECT * FROM orders WHERE order_id = ? AND status = 'pending'";
$verify_stmt = mysqli_prepare($con, $verify_query);
mysqli_stmt_bind_param($verify_stmt, "s", $order_id);
mysqli_stmt_execute($verify_stmt);
$result_verify = mysqli_stmt_get_result($verify_stmt);


if($status=='pending'){
    // Prepare and execute the UPDATE query for the orders table
$update_order_query = "UPDATE orders SET status = 'success' WHERE order_id = ?";
$update_order_stmt = mysqli_prepare($con, $update_order_query);
mysqli_stmt_bind_param($update_order_stmt, "s", $order_id);
mysqli_stmt_execute($update_order_stmt);

// Prepare and execute the UPDATE query for the cart table
$update_cart_query = "UPDATE cart SET order_id = ?, status = 'success' WHERE username = ? AND order_id IS NULL AND status = 'pending'";
$update_cart_stmt = mysqli_prepare($con, $update_cart_query);
mysqli_stmt_bind_param($update_cart_stmt, "ss", $order_id, $username);
mysqli_stmt_execute($update_cart_stmt);


// Close the prepared statements
mysqli_stmt_close($update_order_stmt);
mysqli_stmt_close($update_cart_stmt);

$select="select * from `orders` where order_id='$order_id' and status='success'";
$result=mysqli_query($con,$select);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
$address=$row['address'];
$pincode=$row['pincode'];
$amount=$row['amount'];
$remarks=$row['additional'];
$select_product="select * from cart where order_id='$order_id'";
$result_product=mysqli_query($con,$select_product);
$product_list = '';
while($row2=mysqli_fetch_assoc($result_product)){
    $product_id=$row2['product_id'];
    $quantity=$row2['quantity'];
    $select_product_name="select * from products where product_id=$product_id";
    $result_product_name=mysqli_query($con,$select_product_name);
    $row3=mysqli_fetch_assoc($result_product_name);
    $product_name=$row3['product_title'];
    $product_list .=$product_name.' - '.$quantity.' ';
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ordermanager@hazzlenet.com';                     //SMTP username
    $mail->Password   = 'OrderManagerHw6tY$@5jZ';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ordermanager@hazzlenet.com', 'Vishwizard');
    $mail->addAddress('deyamrit959@gmail.com', 'Amrit Dey');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('ordermanager@hazzlenet.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Details of your order';
    $htmlContent = file_get_contents('recepientmail.php');
     $mail->Body    = $htmlContent;
    //  $mail->Body    = 'Thanks for ordering with us.</br>Please verify your order details:</br>Receiver Name : '.$name.' </br>Phone Number : '.$phone.'</br>Address :'. $address.'</br>Your order will be delivered within 7 working days</br>regards,</br>Order Manager';
    $mail->AltBody = 'We have received your order. Your order will be delivered within 7 working days';

    $mail->send();

    echo 'Message has been sent';
    
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$dynamic='Congratulations! Your order was placed';

}
else {
    // Handle the case where the order doesn't exist or its status is not pending
    echo "What you are trying to do is not allowed!";
    $dynamic='Please Finish Payment First!';

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
  }
  .success-container {
    text-align: center;
  }
  .success-icon {
    font-size: 5em;
    color: #28a745;
  }
  .success-message {
    font-size: 1.5em;
    color: #333;
    margin-top: 10px;
  }
</style>
</head>
<body>
<div class="success-container">
  <i class="fas fa-check-circle success-icon"></i>
  <p class="success-message"><?php echo $dynamic;?></p>
  
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

// <script>
  // Redirect to home page after 5 seconds
  setTimeout(function() {
    window.location.href = 'index.php'; // Replace 'home.html' with the URL of your home page
  }, 5000); // 5000 milliseconds = 5 seconds
// </script>
</body>
</html>
