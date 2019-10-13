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
    <title>Data Subscription</title>
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
            
                <?php include "ShowlastTransaction.php" ?>

                <div class="flexer">
                    <h1>Data Subscription made Easy</h1>
                    
                    <div class="accord">
                        <h3><?php echo "MTN"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <form action="" method="post">
                            <?php
                                if(isset($_POST['datamtn'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $network = 'mtn';
                                    $amount = chk($_POST['amount']);

                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no){
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

                                                $service = '3G data subscription';
                                                $status = 'Subscribed';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `datasub` (id,mobilenumber,email_add,network,amount,charges,status) 
                                                VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Subscription Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }
                                                    
                                                    include "upd_bal_aft_service2.php";
                                                    echo "<script>
                                                            alert('Data Subscription successful');
                                                            window.location = 'data.php';</script>";

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
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required="required"/>
                            </div>
                            <div>
                                <label for="dataBundle">Amount</label>
                                <input type="text" name="amount" id="dataBundle" required="required"/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" required="required"/>
                            </div>
                            <div>
                                <input type="submit" name="datamtn" value="Recharge">
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
                                if(isset($_POST['dataairtel'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $amount = chk($_POST['amount']);

                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no){
                                            if($email){
                                    
                                                $network = 'airtel';
                                                
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount * 0.9);

                                                $service = '3G data subscription';
                                                $status = 'Subscribed';
                                                

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `datasub` (id,mobilenumber,email_add,network,amount,charges,status) 
                                                VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Subscription Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }
                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Data Subscription successful');
                                                            window.location = 'data.php';</script>";

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
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="dataBundle">Amount</label>
                                <input type="text" name="amount" id="dataBundle" required="required"/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" required="required"/>
                            </div>
                            <div>
                                <input type="submit" name="dataairtel" value="Recharge">
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
                                if(isset($_POST['dataetis'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $amount = chk($_POST['amount']);

                                    $network = 'etisalat';

                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no){
                                            if($email){
                                    
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount * 0.9);

                                                $service = '3G data subscription';
                                                $status = 'Subscribed';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `datasub` (id,mobilenumber,email_add,network,amount,charges,status) 
                                                VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Subscription Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Data Subscription successful');
                                                            window.location = 'data.php';</script>";

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
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="dataBundle">Amount</label>
                                <input type="text" name="amount" id="dataBundle" required="required"/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" required="required"/>
                            </div>
                            <div>
                                <input type="submit" name="dataetis" value="Recharge">
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
                                if(isset($_POST['dataglo'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $amount = chk($_POST['amount']);

                                    $network = 'glo';

                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no){
                                            if($email){
                                    
                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount * 0.9);

                                                $service = '3G data subscription';
                                                $status = 'Subscribed';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `datasub` (id,mobilenumber,email_add,network,amount,charges,status) 
                                                VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Subscription Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Data Subscription successful');
                                                            window.location = 'data.php';</script>";

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
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="dataBundle">Amount</label>
                                <input type="text" name="amount" id="dataBundle" required="required"/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" required="required"/>
                            </div>
                            <div>
                                <input type="submit" name="dataglo" value="Recharge">
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
                                if(isset($_POST['datastar'])){
                                    $mobile_no = chk($_POST['mobilenumber']);
                                    $email = chk($_POST['email']);
                                    $amount = chk($_POST['amount']);

                                    $network = 'starcomms';
                                    
                                    $mobile_no = filter_var($mobile_no, FILTER_SANITIZE_NUMBER_INT);
                                    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($mobile_no){
                                            if($email){

                                                //$costPerWord = 10; // Cost in Kobo
                                                $charges = ($amount * 0.9);

                                                $service = '3G data subscription';
                                                $status = 'Subscribed';

                                                $topup = $charges - $balance;
                                                if($charges < $balance){
                                                include "sendtransaction.php";
                                                
                                                $sql = "INSERT INTO `datasub` (id,mobilenumber,email_add,network,amount,charges,status) 
                                                VALUES (null,'$mobile_no','$email','$network','$amount','$charges','$status') ";
                                                    
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo "<span class='con'>Subscription Successful!</span>";
                                                        
                                                    }else{
                                                        echo mysqli_error($conn)."Error in recharging";
                                                    }

                                                    include "upd_bal_aft_service.php";
                                                    echo "<script>
                                                            alert('Data Subscription successful');
                                                            window.location = 'data.php';</script>";

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
                                <label for="mobilenumber">Mobile Number</label>
                                <input type="text" name="mobilenumber" maxlength="13" id="mobilenumber" required/>
                            </div>
                            <div>
                                <label for="dataBundle">Amount</label>
                                <input type="text" name="amount" id="dataBundle" required="required"/>
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" required="required"/>
                            </div>
                            <div>
                                <input type="submit" name="datastar" value="Recharge">
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