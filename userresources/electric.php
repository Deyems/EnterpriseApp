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
    <title>Electricty Bills</title>
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
            
                <?php include "ShowlastTransaction.php" ?>

                <div>
                    <div>
                        <h1>Pay your Electricity Bills on the go</h1>
                        <div>
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['pay'])){
                                        $account_no = chk($_POST['account_no']);
                                        $email_id = chk($_POST['email_id']);
                                        $mobile = chk($_POST['m_number']);
                                        //$amount = chk($_POST['amount']);
                                        $amount = chk(str_replace("-","",$_POST['amount']));
                                        $mobile = chk(str_replace("-","",$_POST['m_number']));
                                        
                                        $service = 'electricity bills';

                                        $status = 'Paid';

                                        $checker = filter_var($mobile, FILTER_VALIDATE_INT);
                                        $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);
                                        $mobile = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);
                                        $account_no = filter_var($account_no, FILTER_SANITIZE_NUMBER_INT);
                                        $chk_account_no = filter_var($account_no, FILTER_VALIDATE_INT);
                                        
                                        $amount = filter_var($amount, FILTER_VALIDATE_INT);
                                        
                                        if($amount){
                                            if($checker == 0 || $checker){
                                                if($email_id){
                                                    if($chk_account_no == 0 || $chk_account_no){
                                                        if($account_no){
                                                            if($mobile){

                                                                // Cost in Kobo
                                                                $charges = $amount * 0.95;
                                                                
                                                                $topup = $charges - $balance;
                                                                if($charges < $balance){
                                                                    include "sendtransaction.php";

                                                                    $sql = "INSERT INTO `electricity` (id,mobile,email_add,account_no,amount,status) 
                                                                    VALUES (null,'$mobile','$email_id', '$account_no','$amount','$status') ";
                                                                        
                                                                        $result = mysqli_query($conn, $sql);
                                                                        if($result){
                                                                            echo "<span class='con'>Payment Successful!</span>";
                                                                        }else{
                                                                            echo mysqli_error($conn)."Error in Payment and database";
                                                                        }
                                                                        
                                                                        include "upd_bal_aft_service.php";
                                                                        echo "<script>window.location='electric.php';</script>";

                                                                }   else{
                                                                    echo "<script>alert('Your wallet balance is not sufficient');
                                                                        alert('Fund your wallet to continue transaction');
                                                                    </script>";
                                                                    echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                                    }
                                                            } else{ echo "<span> Enter Mobile Number</span>";}
                                                        } else{ echo "<span> Enter Account Number</span>";}
                                                    } else{ echo "<span> Invalid Account Number</span>";}
                                                } else{ echo "<span> Enter email Address </span>";}
                                            } else{ echo "<span> Invalid Mobile No</span>";}
                                        }   else{ echo "<span>Invalid Money Format</span>";}
                                    }
                                ?>

                                <div>
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email_id" id="email" required="required"/>
                                </div>
                                <div>
                                    <label for="m_number">Mobile Number</label>
                                    <input type="text" name="m_number" id="m_number" maxlength="13" required="required"/>
                                </div>
                                <div>
                                    <label for="account_no">Account Number</label>
                                    <input type="text" name="account_no" id="account_no" required="required"/>
                                </div>
                                <div>
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" id="amount" required="required"/>
                                </div>
                                <div>
                                    <input type="submit" name="pay" value="Pay instantly" id="sender">
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