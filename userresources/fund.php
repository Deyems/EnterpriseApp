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
    <title>fund wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <script src="../fontawesome-free-5.5.0-web\js\all.js"></script>
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
                        <h1>Fund your wallet now</h1>
                        <div>
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['pay'])){
                                        $amount = chk(str_replace("-","",$_POST['amount']));
                                        $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                        //chk($_POST['amount']);
                                        if($amount){
                                            $approval = 'unapproved';

                                            date_default_timezone_set("Africa/Lagos");
                                            $p_date = date("Y/m/d"); // To get the Date of the transaction
                                            $p_time = date("h:i:sa"); // To get the time of transaction
                                            echo "$c_user";

                                            $sql = "INSERT INTO `payment` (id,amount,p_date, p_time,approval,user_logger) 
                                                    VALUES (null,'$amount','$p_date','$p_time', '$approval','$c_user') ";
                                                
                                                $result = mysqli_query($conn, $sql);
                                                if($result){
                                                    echo "<span class='con'>You just loaded '$amount'!</span><br>";
                                                    echo "<span class='con'>Wait for payment approval and/or Reload page to see approval!</span>";
                                                }else{
                                                    echo mysqli_error($conn)."Error in Payment";
                                                }

                                                $total = $balance + $amount;

                                                $bal_upd = "UPDATE `user_login` 
                                                SET balance = '$total'
                                                WHERE username = '$c_user' ";
                                            $r_bal_up = mysqli_query($conn,$bal_upd);
                                            if($r_bal_up){
                                                echo "Wallet balance will be updated soon...";
                                            } else {
                                                echo "error in uploading";
                                            }
                                        }else{
                                            echo "You have an invalid Input";
                                        }
                                        // End of IF amount is true
                                        
                                    } // End of If isset
                                ?>
                                <div>
                                    <label for="amount">Amount to load</label>
                                    <input type="text" name="amount" id="amount" required="required"/>
                                </div>
                                <div>
                                    <input type="submit" name="pay" value="Pay">
                                </div> 
                            </form>
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