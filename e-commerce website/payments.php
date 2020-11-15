<?php
require("includes/common.php");
if(!isset($_SESSION))
{
    session_start();
}


$item_ids_string = $_GET['itemsid'];

$_SESSION['transfer_items_id']=$item_ids_string;
?>

<?php
$sum=$_GET['sum'];
$user_id = $_GET['userid'];
$_SESSION['cart_total'] = $sum;
$_SESSION['transfer_user_id']=$user_id;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payments | Life Style Store</title>
        
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br><br><br>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Payments</h2>
                        <h5>Choose an option</h5>
                        <form  action="payments_script.php" method="POST">
                            <div class="form-group">
                                <input type="radio" name="Payment" value="Credit Card">
                                <label for="Credit Card">Credit Card</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="Payment" value="Debit Card">
                                <label for="Debit Card">Debit Card</label>
                                    
                            </div>
                            <div class="form-group">
                                <input type="radio" name="Payment" value="Netbanking">
                                <label for="Netbanking">Netbanking</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="Payment" value="E-Wallet">
                                <label for="E-Wallet">E-Wallet</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="Payment" value="Pay On Delivery">
                                <label for="Pay On Delivery">Pay on Delivery</label>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary" > <?php echo "Pay Rs " .$sum ; ?></button>
                            <br><br>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>
