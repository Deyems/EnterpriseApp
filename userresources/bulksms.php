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
    <title>Send Message</title>
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
                        <h1>SEND YOUR TEXT RIGHT AWAY</h1>
                        <div>
                            <form action="" method="post">
                                <div>
                                    <span>Send to over a million people at once</span>
                                </div>

                                <?php
                                    if(isset($_POST['send'])){
                                        $sender_id = chk($_POST['sender_id']);
                                        $receipient = chk($_POST['receipient']);
                                        $message = chk($_POST['message']);
                                        $backfire = '23';
                                        $refund = 54;
                                        
                                        $service = 'BulkSMS';
                                        $status = 'delivered';
                                        
                                        $num_arr = substr_count($receipient,",") + 1;
                                        $totalCountWords = str_word_count($message);
                                        
                                        $costPerWord = 10; // Cost in Kobo
                                        $charges = (($costPerWord * $totalCountWords)/100)* $num_arr;
                                        $topup = $charges - $balance;

                                        if(($charges < $balance)){
                                            if($appstate =='approved'){
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
                                            
                                            include "sendtransaction.php";

                                        $sql = "INSERT INTO `bulksms` (id,sender_id,receipients,message,charges,undelivered,refund) VALUES (null,'$sender_id','$receipient','$message','$charges','$backfire','$refund') ";
                                            
                                            $result = mysqli_query($conn, $sql);
                                            if($result){
                                                echo "<span class='con'>Messages Sent!</span>";
                                                
                                            }else{
                                                echo mysqli_error($conn)."Not updated to database";
                                            }

                                            include "upd_bal_aft_service.php";
                                            echo "<script>alert('Messages Sent!');
                                                    window.location = 'bulksms.php';</script>";

                                        } else{
                                            echo "<script>
                                                    alert('Your Payment has not been approved');
                                                </script>";
                                        }

                                        } else{
                                            echo "<script>alert('Your wallet balance is not sufficient');
                                                alert('Fund your wallet to continue transaction');
                                            </script>";
                                            echo "<span class='con'>You need to fund your wallet with at least N$topup </span>";
                                        }

                                    }
                                ?>
                                <div>
                                    <label for="sender">Sender</label>
                                    <input type="text" name="sender_id" id="sender" required>
                                </div>
                                <div>
                                    <label for="receipient">Receipient</label>
                                    <textarea name="receipient" id="receipient" required></textarea>
                                </div>
                                <div style="color:red;">
                                    <span>Enter the number in the formats shown</span><br>
                                    <span>7099933301,8099933301,9099933302</span><br>
                                    <span>07099933301,08099933301,09099933302</span><br>
                                    <span>2347099933301,2348099933301,2349099933302</span><br>
                                </div>
                                <div>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" required></textarea>
                                </div>
                                <div>
                                    <input type="submit" name="send" value="send" id="sender">
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