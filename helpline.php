<!DOCTYPE html>
<html>
<head>
    <?php include "connection.php";
        error_reporting(E_ERROR);
          include "function.php";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Help Line</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styling.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <script src="js/myscript.js" defer></script>
    <script src="fontawesome-free-5.5.0-web/js/all.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
            include "navigation.php";
        ?>
        
        <header>
            <br><br><br><br><br><br><br><br>
            <div class="contactform">
                
                <div>
                    <h2>Our Contacts are below</h2>
                </div>
                <div>
                    <p>Home Contact:+2348179647183</p>
                </div>
                <div>
                    <p>Email Address: adeyemisola11@gmail.com</p>
                    <p>Email Address: adeyemi.sola@yahoo.com</p>
                </div>
                <div>    
                    <a href="<?php echo "signup.php" ?>"> <?php echo "Register Account" ?></a>
                    <a href="<?php echo "userresources/login.php" ?>"> <?php echo "Login here" ?></a>
                </div>
            </div>
        </header>
    
    </div> <!--OVERALL WRAPPER-->

</body>
