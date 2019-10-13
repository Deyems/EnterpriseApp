<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        if($_SESSION["logger"]){
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <script src="../fontawesome-free-5.5.0-web\js\all.js"></script>
    <!--<script src="js/main.js" defer></script>-->
</head>
<body>
    <div class="wrapper">
        
    <?php include "header.php"; 
        //$currentlogger = $_SESSION["logger"];
    ?>
        
        <main>
        <div class="diamond">

        </div>  
            <section class="container">
            
                <div>
                    <div>
                        <h1>Welcome: <?php echo "$currentlogger" ?></h1>
                        <div>
                            <div><span>NOTICE!!! NOTICE!!!</span></div>
                            <div>
                                <p>Service: <?php echo "After payment of money, kindly send a text to +2348179647183
                                and the Admin will approve your request"?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div>
                        <h1>Your wallet now</h1>
                        <div>
                            <div class="etext">
                                <span>Your Balance:</span>
                                <span>
                                    <?php 
                                        if($appstate == 'approved'){
                                            echo "N"."$balance";
                                        } else{
                                            echo "Payment not verified yet";
                                        }
                                    ?></span>
                                <div>
                                <a href="fund.php">
                                    <input type="submit" value="fund Wallet?">
                                </a>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
        include "footer.php";
        ?>

    </div> <!--END OF WRAPPER-->
</body>
<?php
    }
    else{
        echo "<script>window.location = 'login.php'</script>";
    }
    ?>
</html>