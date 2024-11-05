 
<?php 
session_start();
include('./includes/connect.php');

$order_id=$_GET['oid'];
$username=$_SESSION['username'];
$update="UPDATE `orders` SET `status` = 'failed' WHERE `orders`.`order_id` = '$order_id';";
$result_order=mysqli_query($con,$update);

// $update="UPDATE cart SET order_id = '$order_id', status = 'success' WHERE username = '$username' AND order_id IS NULL AND status='pending';";
// $result_order=mysqli_query($con,$update);
// if(isset($_GET)){
    
//     echo "<pre>";
//     print_r($_GET);
//     echo "</p>";
  
// }




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
  <p class="success-message">Error!Payment Failed - Please try again.</p>
  
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
