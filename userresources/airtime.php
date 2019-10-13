<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <?php
        if($_SESSION["logger"]){
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Airtime Recharge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <script src="../fontawesome-free-5.5.0-web\js\all.js"></script>
    <!--<script src="js/main.js" defer></script>-->
</head>
<body>
    <div class="wrapper">
        
    <?php include "header.php"; ?>
        
        <main>
        <div class="diamond">

        </div>  
            <section class="container">
            
                <?php include "ShowlastTransaction.php" ?>
                
                <div class="flexer">
                    <h1>Load Airtime on your network</h1>
                    <span id='cone'>Recharge Successful!</span>

                    <div id="progressBar">
                        <div id="innerBar">10%</div>
                    </div>
                    
                    <div class="accord">
                        <h3><?php echo "MTN"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <form action="" method="post">
                            <?php
                                
                                if(isset($_POST['rechargemtn'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $network = 'mtn';
                                    $amount = chk($_POST['amount']);
                                    $status = 'active';

                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no == 0 || $mobile_no){
                                            if($email){
                                                
                                                /*API KEY FOR SENDING MESSAGES TO PEOPLE FORMAT */
                                                /*
                                                $ch = curl_init();
                                                $timeout = 100;
                                                $myHIturl = " https://www.nellobytesystems.com/APIAirtimeV1.asp?UserID=CK10130881&APIKey=76X36QT01E16W4UCWD8MV8400A2AR328H8WV2E7AR5SGOK96Q23FTLII031FI251&MobileNetwork=03&Amount=100&MobileNumber=$mobile_no2&
                                                                CallBackURL=http://deyems.com.ng";
                                                curl_setopt($ch, CURLOPT_URL, $myHIturl);
                                                curl_setopt($ch,CURLOPT_HEADER,0);
                                                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                                                curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
                                                $file_contents = curl_exec($ch);
                                                $curl_error = curl_errno($ch);
                                                curl_close($ch);
                                                */
                                                
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount * 0.95);

                                                $service = 'Airtime';
                                                $status = 'delivered';
                                                
                                                $topup = $charges - $balance;
                                                if($charges < $balance){

                                                    include "sendtransaction.php";
                                                    
                                                    $sql = "INSERT INTO `airtime` (id,mobilenumber,email_add,network,amount,charges,status,current_logger) 
                                                    VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status','$currentlogger') ";
                                                        
                                                        $result = mysqli_query($conn, $sql);
                                                        if($result){
                                                            echo "<span class='con'>Recharge Successful!</span>";
                                                            
                                                            
                                                        }else{
                                                            echo mysqli_error($conn)."Error in recharging";
                                                        }

                                                        include "upd_bal_aft_service.php";
                                                        echo "<script>
                                                            alert('Recharge successful');
                                                            window.location = 'airtime.php';</script>";

                                                        } else{
                                                        
                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                        alert('Fund your wallet to continue transaction');
                                                    </script>";
                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                }

                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}
                                    
                                    

                                }
                            ?>

                            <div>
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" required/>
                            </div>

                            <div>
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div>
                                <input type="submit" class="subbtn" name="rechargemtn" value="Recharge">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "Airtel"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <form action="" method="post">
                            <?php
                                if(isset($_POST['rechargeairtel'])){
                                    $mobile_no2 = chk($_POST['mobilenumber']);
                                    $email2 = chk($_POST['email']);
                                    $network2 = 'airtel';
                                    $amount2 = chk($_POST['amount']);
                                    $status2 = 'active';
                                    
                                    $mobile_no2 = filter_var($mobile_no2, FILTER_SANITIZE_NUMBER_INT);
                                    $email2 = filter_var($email2, FILTER_VALIDATE_EMAIL);

                                    $amount2 = chk(str_replace("-","",$_POST['amount']));
                                    $amount2 = filter_var($amount2, FILTER_VALIDATE_INT);
                                    
                                    if($amount2){
                                        if($mobile_no2 == 0 || $mobile_no2){
                                            if($email2){

                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount2 * 0.95);

                                                $service = 'Airtime';
                                                $status = 'delivered';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `airtime` (id,mobilenumber,email_add,network,amount,charges,status,current_logger) 
                                                VALUES (null,'$mobile_no2','$email2','$network2','$amount2','$charges','$status2','$currentlogger') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Recharge Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Recharge successful');
                                                            window.location = 'airtime.php';</script>";

                                                    } else{
                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                        alert('Fund your wallet to continue transaction');
                                                    </script>";
                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                }
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}

                                }
                            ?>
                            <div>
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" required/>
                            </div>
                            <div>
                                <label for="mobilenumber2">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber2" required/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div>
                                <input type="submit" class="subbtn" name="rechargeairtel" value="Recharge">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "Etisalat"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <form action="" method="post">

                            <?php
                                if(isset($_POST['rechargeetis'])){
                                    $mobile_no3 = chk($_POST['mobilenumber']);
                                    $email3 = chk($_POST['email']);
                                    $network3 = 'etisalat';
                                    $amount3 = chk($_POST['amount']);
                                    $status3 = 'active';


                                    $mobile_no3 = filter_var($mobile_no3, FILTER_SANITIZE_NUMBER_INT);
                                    $email3 = filter_var($email3, FILTER_VALIDATE_EMAIL);

                                    $amount3 = chk(str_replace("-","",$_POST['amount']));
                                    $amount3 = filter_var($amount3, FILTER_VALIDATE_INT);
                                    
                                    if($amount3){
                                        if($mobile_no3 == 0 || $mobile_no3){
                                            if($email3){
                                    
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount3 * 0.95);

                                                $service = 'Airtime';
                                                $status = 'delivered';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `airtime` (id,mobilenumber,email_add,network,amount,charges,status,'current_logger) 
                                                VALUES (null,'$mobile_no3','$email3','$network3','$amount3','$charges','$status3','$currentlogger') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Recharge Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Recharge successful');
                                                            window.location = 'airtime.php';</script>";

                                                    } else{
                                                        
                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                        alert('Fund your wallet to continue transaction');
                                                    </script>";
                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                }
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}

                                }
                            ?>

                            <div>
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" required/>
                            </div>
                            <div>
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div>
                                <input type="submit" class="subbtn" name="rechargeetis" value="Recharge">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "Glo"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <form action="" method="post">

                            <?php
                                if(isset($_POST['rechargeglo'])){
                                    $mobile_no4 = chk($_POST['mobilenumber']);
                                    $email4 = chk($_POST['email']);
                                    $network4 = 'glo';
                                    $amount4 = chk($_POST['amount']);
                                    $status4 = 'active';

                                    $mobile_no4 = filter_var($mobile_no4, FILTER_SANITIZE_NUMBER_INT);
                                    $email4 = filter_var($email4, FILTER_VALIDATE_EMAIL);

                                    $amount4 = chk(str_replace("-","",$_POST['amount']));
                                    $amount4 = filter_var($amount4, FILTER_VALIDATE_INT);
                                    
                                    if($amount4){
                                        if($mobile_no4 == 0 || $mobile_no4){
                                            if($email4){
                                    
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount4 * 0.95);

                                                $service = 'Airtime';
                                                $status = 'delivered';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `airtime` (id,mobilenumber,email_add,network,amount,charges,status,current_logger) 
                                                VALUES (null,'$mobile_no4','$email4','$network4','$amount4','$charges','$status4','$currentlogger') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Recharge Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Recharge successful');
                                                            window.location = 'airtime.php';</script>";

                                                    } else{
                                                        
                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                        alert('Fund your wallet to continue transaction');
                                                    </script>";
                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                }
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}

                                }
                            ?>

                            <div>
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" required/>
                            </div>
                            <div>
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div>
                                <input type="submit" class="subbtn" name="rechargeglo" value="Recharge">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "Starcomms"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <form action="" method="post">
                            
                            <?php
                                if(isset($_POST['rechargestar'])){
                                    $mobile_no5 = chk($_POST['mobilenumber']);
                                    $email5 = chk($_POST['email']);
                                    $network5 = 'Starcomms';
                                    $amount5 = chk($_POST['amount']);
                                    $status5 = 'active';

                                    $mobile_no5 = filter_var($mobile_no5, FILTER_SANITIZE_NUMBER_INT);
                                    $email5 = filter_var($email5, FILTER_VALIDATE_EMAIL);

                                    $amount5 = chk(str_replace("-","",$_POST['amount']));
                                    $amount5 = filter_var($amount5, FILTER_VALIDATE_INT);
                                    
                                    if($amount5){
                                        if($mobile_no5 == 0 || $mobile_no5){
                                            if($email5){
                                    
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount5 * 0.95);

                                                $service = 'Airtime';
                                                $status = 'delivered';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `airtime` (id,mobilenumber,email_add,network,amount,charges,status,current_logger) 
                                                VALUES (null,'$mobile_no5','$email5','$network5','$amount5','$charges','$status5','$currentlogger') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Recharge Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Recharge successful');
                                                            window.location = 'airtime.php';</script>";

                                                    } else{
                                                        
                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                        alert('Fund your wallet to continue transaction');
                                                    </script>";
                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                }
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}
                                }
                            ?>

                            <div>
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" id="amount" required/>
                            </div>
                            <div>
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div>
                                <input type="submit" class="subbtn" name="rechargestar" value="Recharge">
                            </div>
                        </form>
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