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
    <title>Transactions history</title>
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
                    <h1>Transactions History</h1>
                    
                    <div class="accord">
                        <h3><?php echo "$d_services_1" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        
                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>
                            
                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'delivered'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }

                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>
                        
                    </div>

                    <div class="accord">
                        <h3><?php echo "$d_services_2" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>

                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'delivered'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }
                                        
                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>

                    </div>

                    <div class="accord">
                        <h3><?php echo "$d_services_4" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">
                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>
                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'Subscribed'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }
                                        
                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>
                    </div>

                    <div class="accord">
                        <h3><?php echo "$d_services_3" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>
                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'success'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }
                                        
                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>
                    </div>

                    <div class="accord">
                        <h3><?php echo "$d_services_5" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>
                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'success'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }
                                        
                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>
                    </div>


                    <div class="accord">
                        <h3><?php echo "$d_services_6" ?></h3>
                        <div>
                            <i class="fa fa-cross"></i>
                        </div>
                    </div>

                    <div class="accord_hide">

                        <table>
                            <tr>
                            <th><?php echo"Service"?></th>
                            <th><?php echo"Charges"?></th>
                            <th><?php echo"Time"?></th>
                            <th><?php echo"Date"?></th>
                            <th><?php echo"Status"?></th>
                            </tr>
                            <?php
                                $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' AND user_logger = '$currentlogger' ");
                                    while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                        $service = $run_sqlresult['service_type'];
                                        $charges = $run_sqlresult['charges'];
                                        $timer = $run_sqlresult['t_time'];
                                        $dater = $run_sqlresult['t_date'];
                                        $status = $run_sqlresult['t_status'];

                                        if($status == 'Paid'){
                                            $color = 'blue';
                                        } else{
                                            $color = 'red';
                                        }
                                        
                                        echo "<tr><td>$service</td>
                                        <td>N$charges</td>
                                        <td>$timer</td>
                                        <td>$dater</td>
                                        <td style='color:$color'>$status</td>
                                        </tr>";
                                    }
                            ?>
                        </table>
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