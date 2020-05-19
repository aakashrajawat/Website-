<?php
include './includes/common.php';
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        <br><br>
        <br><br>
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <h1>Change Password</h1>
                <form action="settings_script.php" method="post">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="old-password" name="old-password"  required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="new-password" name="password"  required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="re-type new-password" name="password1"  required>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <?php
                        if(isset($_GET['error']))
                        {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?>
                </form>
            </div>
        </div>
        <?php
            include './includes/footer.php';
        ?>.
    </body>
</html>
