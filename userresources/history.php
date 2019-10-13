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
    <title>Pay history</title>
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

                <div>
                    <div >
                        <h1>Wallet payment History</h1>
                        <div style="overflow:auto;">
                            <table>
                                <tr>
                                <th><?php echo "Amount Loaded" ?></th>
                                <th><?php echo "Time" ?></th>
                                <th><?php echo "Date" ?></th>
                                <th><?php echo "Status" ?></th>
                                </tr>
                                
                                <?php
                                    // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                    $sqlresult = mysqli_query($conn,"SELECT * FROM payment WHERE user_logger ='$c_user'  ");
                                        while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                            $amount = $run_sqlresult['amount'];
                                            $p_time = $run_sqlresult['p_time'];
                                            $p_date = $run_sqlresult['p_date'];
                                            $status = $run_sqlresult['approval'];

                                            if($status == 'approved'){
                                                $color = 'green';
                                            } else{
                                                $color = 'red';
                                            }
                                            echo "<tr><td>$amount</td>
                                            <td>$p_date</td>
                                            <td>$p_time</td>
                                            <td style='color:$color'>$status</td>
                                            </tr>";
                                        }
                                ?>
                            </table>

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