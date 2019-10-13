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
    <title>tv Subscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <script src="../fontawesome-free-5.5.0-web\js\all.js"></script>
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
                    <h1>Make your Tv outshine others</h1>
                    
                    <div class="accord">
                        <h3><?php echo "GOTV"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <form action="" method="post">
                            <?php
                                if(isset($_POST['loadgotv'])){
                                    $iucnumber = chk($_POST['iucnumber']);
                                    $mobile = chk($_POST['mobilenumber']);
                                    $amount = chk($_POST['amount']);
                                    $email_id = chk($_POST['email']);
                                    $t_type = 'gotv';
                                    
                                    $service = 'TV Subscription';


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

                                    
                                    $checker = filter_var($mobile, FILTER_VALIDATE_INT);
                                    $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
                                    $mobile = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($checker == 0){
                                            if($email_id){
                                                if($iucnumber){

                                                    $status = 'success';
                                                
                                                    // Cost in Kobo
                                                    $charges = $amount * 0.95;
                                                    
                                                    $topup = $charges - $balance;
                                                    if($charges < $balance){

                                                        include "sendtransaction.php";

                                                        $sql = "INSERT INTO `tv_sub` (id,t_type, iuc_number, mobile_number,amount,email_add,charges,status) 
                                                        VALUES (null,'$t_type', '$iucnumber', '$mobile','$amount','$email_id','$charges','$status') ";
                                                            
                                                            $result = mysqli_query($conn, $sql);
                                                            if($result){
                                                                echo "<span class='con'>Subscription Successful!</span>";
                                                            }else{
                                                                echo mysqli_error($conn)."Error in subscription and database";
                                                            }

                                                            include "upd_bal_aft_service.php";
                                                            echo "<script>window.location='tv_sub.php';</script>";

                                                    } else{
                                                        
                                                        echo "<script>alert('Your wallet balance is not sufficient');
                                                            alert('Fund your wallet to continue transaction');
                                                        </script>";
                                                        echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                    }
                                                } else{ echo "<span> Enter your Gotv Number</span>";}
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}
                                }
                            ?>
                            <div>
                                <label for="iucnumber">IUC Number</label>
                                <input type="text" name="iucnumber" id="iucnumber" required="required"/>
                            </div>
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
                                <input type="submit" name="loadgotv" value="load">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "DSTV"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <form action="" method="post">
                            <?php
                                if(isset($_POST['loaddstv'])){
                                    $iucnumber = chk($_POST['iucnumber']);
                                    $mobile = chk($_POST['mobilenumber']);
                                    $amount = chk($_POST['amount']);
                                    $email_id = chk($_POST['email']);
                                    $t_type = 'dstv';
                                    
                                    $service = 'TV Subscription';

                                    $checker = filter_var($mobile, FILTER_VALIDATE_INT);
                                    $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
                                    $mobile = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($checker == 0){
                                            if($email_id){
                                                if($iucnumber){

                                                    $status = 'success';
                                                    
                                                    // Cost in Kobo
                                                    $charges = $amount * 0.95;
                                                    
                                                    $topup = $charges - $balance;
                                                    if($charges < $balance){

                                                        include "sendtransaction.php";

                                                        $sql = "INSERT INTO `tv_sub` (id,t_type, iuc_number, mobile_number,amount,email_add,charges,status) 
                                                        VALUES (null,'$t_type', '$iucnumber', '$mobile','$amount','$email_id','$charges','$status') ";
                                                            
                                                        $result = mysqli_query($conn, $sql);
                                                        if($result){
                                                            echo "<span class='con'>Subscription Successful!</span>";
                                                        }else{
                                                            echo mysqli_error($conn)."Error in subscription and database";
                                                        }
                                                        include "upd_bal_aft_service.php";
                                                            echo "<script>window.location='tv_sub.php';</script>";

                                                        } else{
                                                            echo "<script>alert('Your wallet balance is not sufficient');
                                                                alert('Fund your wallet to continue transaction');
                                                            </script>";
                                                            echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                    }
                                                } else{ echo "<span> Enter your DSTV Number</span>";}
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}
                                }
                            ?>
                            <div>
                                <label for="iucnumber">IUC Number</label>
                                <input type="text" name="iucnumber" id="iucnumber" required="required"/>
                            </div>
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
                                <input type="submit" name="loaddstv" value="load">
                            </div>
                        </form>
                    </div>

                    <div class="accord">
                        <h3><?php echo "STARTIMES"?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <form action="" method="post">
                            <?php
                                if(isset($_POST['loadtimes'])){
                                    $iucnumber = chk($_POST['iucnumber']);
                                    $mobile = chk($_POST['mobilenumber']);
                                    $amount = chk($_POST['amount']);
                                    $email_id = chk($_POST['email']);
                                    $t_type = 'startimes';
                                    
                                    $service = 'TV Subscription';

                                    $checker = filter_var($mobile, FILTER_VALIDATE_INT);
                                    $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
                                    $mobile = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);

                                    $amount = chk(str_replace("-","",$_POST['amount']));
                                    $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                    
                                    if($amount){
                                        if($checker == 0){
                                            if($email_id){
                                                if($iucnumber){

                                                    $status = 'success';
                                                    
                                                    // Cost in Kobo
                                                    $charges = $amount * 0.95;
                                                    
                                                    $topup = $charges - $balance;
                                                    if($charges < $balance){

                                                        include "sendtransaction.php";

                                                        $sql = "INSERT INTO `tv_sub` (id,t_type, iuc_number, mobile_number,amount,email_add,charges,status) 
                                                        VALUES (null,'$t_type', '$iucnumber', '$mobile','$amount','$email_id','$charges','$status') ";
                                                            
                                                        $result = mysqli_query($conn, $sql);
                                                        if($result){
                                                            echo "<span class='con'>Subscription Successful!</span>";
                                                        }else{
                                                            echo mysqli_error($conn)."Error in subscription and database";
                                                        }

                                                        include "upd_bal_aft_service.php";
                                                            echo "<script>window.location='tv_sub.php';</script>";

                                                        } else{
                                                            
                                                            echo "<script>alert('Your wallet balance is not sufficient');
                                                                alert('Fund your wallet to continue transaction');
                                                            </script>";
                                                            echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                    }
                                                } else{ echo "<span> Enter your STARTIMES Number</span>";}
                                            } else{ echo "<span> Invalid Email</span>";}
                                        }   else{ echo "<span>Invalid Mobile No</span>";}
                                    }   else{ echo "<span>Invalid Money Format</span>";}
                                }
                            ?>
                            <div>
                                <label for="iucnumber">IUC Number</label>
                                <input type="text" name="iucnumber" id="iucnumber" required="required"/>
                            </div>
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
                                <input type="submit" name="loadtimes" value="load">
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