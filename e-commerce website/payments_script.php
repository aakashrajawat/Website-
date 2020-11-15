<?php

require("includes/common.php");
if(!isset($_SESSION))
{
    session_start();
}
  
  
  $payment = $_POST['Payment'];
  $payment = mysqli_real_escape_string($con, $payment);



  $sum = $_SESSION['cart_total'];
  $user_id = $_SESSION['transfer_user_id'];
  $items_id = $_SESSION['transfer_items_id'];



  if ($payment=="Credit Card")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Credit Card')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  
  if ($payment=="Debit Card")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Debit Card')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="Netbanking")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Netbanking')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="E-Wallet")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','E-Wallet')";
    mysqli_query($con, $query) or die(mysqli_error($con));
   
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="Pay On Delivery")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Pay On Delivery')";
    mysqli_query($con, $query) or die(mysqli_error($con));
  
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
?>
