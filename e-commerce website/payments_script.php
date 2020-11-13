<?php

require("includes/common.php");
if(!isset($_SESSION))
{
    session_start();
}
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  
  $payment = $_POST['Payment'];
  $payment = mysqli_real_escape_string($con, $payment);

  //$sum=$_POST['Total'];
  //$sum = mysqli_real_escape_string($con, $sum);

  $sum = $_SESSION['cart_total'];
  $user_id = $_SESSION['transfer_user_id'];
  $items_id = $_SESSION['transfer_items_id'];

  //echo "userid=".$user_id."items_id=".$items_id;

  /*
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO transactions(amount,mode)VALUES('" . $sum . "','" . $email . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: success.php');
  }
  */

  if ($payment=="Credit Card")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Credit Card')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    ///$_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  
  if ($payment=="Debit Card")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Debit Card')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    ///$_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="Netbanking")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Netbanking')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    ///$_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="E-Wallet")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','E-Wallet')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    ///$_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
  if ($payment=="Pay On Delivery")
  {
    $query = "INSERT INTO transactions(amount,mode)VALUES('". $sum ."','Pay On Delivery')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    ///$_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['items_id'] = $items_id;
    header('location: success.php');
  }
?>