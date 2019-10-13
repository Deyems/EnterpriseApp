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
    <title>Recharge smile</title>
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

                <div>
                    <div>
                        <h1>Connect the World with your Smile</h1>
                        <div>
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['send'])){
                                        $smile_id = chk($_POST['smile_id']);
                                        $email_id = chk($_POST['email_id']);
                                        $mobile = chk($_POST['m_number']);
                                        $amount = chk($_POST['amount']);
                                        
                                        $service = 'smile';
                                        $status = 'success';

                                        $mobile = filter_var($mobile, FILTER_VALIDATE_INT);
                                        $email_id = filter_var($email_id, FILTER_VALIDATE_EMAIL);

                                        $amount = chk(str_replace("-","",$_POST['amount']));
                                        $amount = filter_var($amount, FILTER_VALIDATE_INT);

                                        if($amount){
                                            if($mobile == 0 || $mobile){
                                                if($email_id){
                                                    if($smile_id){

                                                        // Cost in Kobo
                                                        $charges = $amount * 0.95;
                                                        
                                                        $topup = $charges - $balance;
                                                        if($charges < $balance){
                                                            include "sendtransaction.php";

                                                            $sql = "INSERT INTO `smile` (id,mobile,email_add,smile_id,charges,amount,status) 
                                                            VALUES (null,'$mobile','$email_id', '$smile_id','$charges','$amount','$status') ";
                                                                
                                                                $result = mysqli_query($conn, $sql);
                                                                if($result){
                                                                    echo "<span class='con'>Subscription Successful!</span>";
                                                                }else{
                                                                    echo mysqli_error($conn)."Error in subscription and database";
                                                                }

                                                                include "upd_bal_aft_service.php";
                                                                echo "<script>window.location='smile_recharge.php'</script>";

                                                        } else{
                                                            echo "<script>alert('Your wallet balance is not sufficient');
                                                                alert('Fund your wallet to continue transaction');
                                                            </script>";
                                                            echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                                        }


                                                    } else{ echo "Invalid Number";}
                                                }   else{ echo "Invalid Email";}
                                            }   else{ echo "Invalid Phone Number";}
                                        }   else{ echo "Invalid Amount to load";}
                                        
                                    }
                                ?>

                                <div>
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email_id" id="email" required="required">
                                </div>
                                <div>
                                    <label for="m_number">Mobile Number</label>
                                    <input type="text" name="m_number" id="m_number" maxlength="13" required="required">
                                </div>
                                <div>
                                    <label for="smile_id">Smile ID</label>
                                    <input type="text" name="smile_id" id="smile_id" required="required">
                                </div>
                                <div>
                                    <label for="amount">Amount</label>
                                    <input type="text" name="amount" id="amount" required="required">
                                </div>
                                <div>
                                    <input type="submit" name="send" value="load" id="sender">
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