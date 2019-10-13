<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        if($_SESSION["logger"]){    
    ?>
    <head>
        <title>User-Transactions</title>
        <?php
            include "linkedfiles.php";
        ?>
    </head>
    <body>
        <div class="wrapper">
            <?php
                include "header.php";
            ?>
                
                <div class="main_con">
                    <div class="main-header">
                        <br><br><br>
                        <h1>User Purchases</h1>
                    </div>
                    
                    <div class="menu_head">
                        <div>
                            <input type="text" name="" id="header_text">
                            <input type="submit" value="update">
                        </div>
                    </div>

                    <!--ONE PURCHASE CATEGORY AT A TIME-->
                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_1" ?></button>

                        <div class="show"> <!--FOR BULK SMS-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    <form action="" id="formuser1" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 3");
                                                    if($defaultsql){
                                                        while($r_defaultsql = mysqli_fetch_array($defaultsql) ){
                                                            $next = $r_defaultsql["next"];
                                                            $tablength = $r_defaultsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 3 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 3 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 3 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 3 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 3 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>
                                
                                </table>
                                <div class="flexload">
                                    <input type="submit" form="formuser1" name="prev" value="Previous">
                                    <input type="submit" form="formuser1" name="next" value="Next">
                                </div>
                            </div>
                            
                        </div> <!--END OF DIV SHOW -->
                    </div> <!--END OF OVERALL DIV BRUND -->

                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_2" ?></button>

                        <div class="show"> <!--FOR AIRTIME TOP UP-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                    <form action="" id="formuser2" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql2 = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 4");
                                                    if($defaultsql2){
                                                        while($r_defaultsql2 = mysqli_fetch_array($defaultsql2) ){
                                                            $next = $r_defaultsql2["next"];
                                                            $tablength = $r_defaultsql2["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next2'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 4 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 4 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 4 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev2'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 4 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 4 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>

                                
                                </table>
                                <div class="flexload">
                                    <input type="submit" form="formuser2" name="prev2" value="Previous">
                                    <input type="submit" form="formuser2" name="next2" value="Next">
                                </div>
                            </div>
                           
                        </div> <!--END OF SHOW-->
                    </div> <!--END OF BRUND-->


                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_4" ?></button>

                        <div class="show"> <!--FOR 3G Data Subscription-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                    <form action="" id="formuser3" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql2 = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 5");
                                                    if($defaultsql2){
                                                        while($r_defaultsql2 = mysqli_fetch_array($defaultsql2) ){
                                                            $next = $r_defaultsql2["next"];
                                                            $tablength = $r_defaultsql2["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next3'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 5 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 5 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 5 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev3'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 5 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 5 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>
                                
                                </table>

                                <div class="flexload">
                                    <input type="submit" form="formuser3" name="prev3" value="Previous">
                                    <input type="submit" form="formuser3" name="next3" value="Next">
                                </div>
                                
                            </div>
                            
                        </div> <!--END OF SHOW-->
                    </div>  <!--END OF BRUND-->

                    

                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_3" ?></button>

                        <div class="show"> <!--FOR Smile-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                    <form action="" id="formuser4" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql2 = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 6");
                                                    if($defaultsql2){
                                                        while($r_defaultsql2 = mysqli_fetch_array($defaultsql2) ){
                                                            $next = $r_defaultsql2["next"];
                                                            $tablength = $r_defaultsql2["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next4'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 6 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 6 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 6 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev4'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 6 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 6 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>
                                </table>
                                
                                <div class="flexload">
                                    <input type="submit" form="formuser4" name="prev" value="Previous">
                                    <input type="submit" form="formuser4" name="next" value="Next">
                                </div>

                            </div>
                         
                        </div> <!--END OF SHOW-->
                    </div> <!--END OF BRUND-->

                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_5" ?></button>

                        <div class="show"> <!--FOR TV Cable Subscription-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                    <form action="" id="formuser5" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql2 = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 7");
                                                    if($defaultsql2){
                                                        while($r_defaultsql2 = mysqli_fetch_array($defaultsql2) ){
                                                            $next = $r_defaultsql2["next"];
                                                            $tablength = $r_defaultsql2["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next5'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 7 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 7 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 7 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev5'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 7 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 7 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>

                                </table>
                                
                                <div class="flexload">
                                    <input type="submit" form="formuser5" name="prev5" value="Previous">
                                    <input type="submit" form="formuser5" name="next5" value="Next">
                                </div>
   
                            </div>
                            
                        </div> <!--end of SHOW-->
                    </div> <!--end of BRUND-->



                    <div class="brund">
                        <button class="anime"><?php echo "$d_services_6" ?></button>

                        <div class="show"> <!--FOR Electricity Bills-->
                            <div>
                                <table>
                                    <tr>
                                        <th>Index</th>
                                        <th>Users</th>
                                        <th>Service</th>
                                        <th>Charges</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    
                                    <form action="" id="formuser6" method="post">
                                        <div>
                                            <?php
                                                // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                                //$counter = 1;
                                                $defaultsql2 = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 8");
                                                    if($defaultsql2){
                                                        while($r_defaultsql2 = mysqli_fetch_array($defaultsql2) ){
                                                            $next = $r_defaultsql2["next"];
                                                            $tablength = $r_defaultsql2["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }

                                                if(isset($_POST['next6'])){
                                                    $tablimit = mysqli_query($conn, "SELECT * FROM transactions");
                                                    $countlimit = mysqli_num_rows($tablimit);

                                                        $nextupd = $next + 5;
                                                        if($nextupd < $countlimit){
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 8 ");
                                                            /*
                                                                if($sql_nxt_upd){
                                                                    echo "database updated";
                                                                } else{
                                                                    echo "Not updated to database";
                                                                }
                                                            */
                                                        } else{
                                                            $nextupd = $nextupd - 5;
                                                            echo "table limit reached";
                                                            $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 8 ");
                                                        }
                                                        
                                                    $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 8 ");
                                                    if($nextsql){
                                                        while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                            $next = $r_nextsql["next"];
                                                            $prev = $r_nextsql["prev"];
                                                            $tablength = $r_nextsql["stretch"];
                                                        }
                                                        $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' LIMIT $next,$tablength ");
                                                        //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                if(isset($_POST['prev6'])){
                                                    $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 8 ");
                                                    if($prevsql){
                                                        while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                            $prev = $r_prevsql["next"];
                                                            //$prev = $r_prevsql["prev"];
                                                            $tablength = $r_prevsql["stretch"];
                                                        }
                                                        $prev = $prev - 5;
                                                        if($prev>=0){
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                            
                                                        } else{
                                                            echo "Database limit reached";
                                                            $prev = 0;
                                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' LIMIT $next,$tablength ");
                                                            //$sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                        }
                                                        
                                                        $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 8 ");
                                                        /*
                                                        if($sql_prev_upd){
                                                            echo "database updated";
                                                        } else{
                                                            echo "Not updated to database";
                                                        } */
                                                    } else{
                                                        echo "Error: ".mysqli_error($conn);
                                                    }
                                                    
                                                }

                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $inde = $run_sqlresult['id'];
                                                    $service = $run_sqlresult['service_type'];
                                                    $purchaser = $run_sqlresult['user_logger'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                            
                                                    if($status == 'delivered'){
                                                        $color = 'green';
                                                    } else{
                                                        $color = 'red';
                                                    }

                                                    echo "<tr>
                                                        <td>$inde</td>
                                                        <td>$purchaser</td>
                                                        <td>$service</td>
                                                        <td>N$charges</td>
                                                        <td>$timer</td>
                                                        <td>$dater</td>
                                                        <td style='color:$color'>$status</td>
                                                        </tr>";
                                                }

                                            ?>
                                        </div>
                                    </form>

                                </table>
                                
                                <div class="flexload">
                                    <input type="submit" form="formuser6" name="prev6" value="Previous">
                                    <input type="submit" form="formuser6" name="next6" value="Next">
                                </div>
                            </div>
                            
                        </div> <!--END OF SHOW-->
                    </div> <!--END OF BRUND-->

                </div> <!--End of Main Con-->
            </section>
            
            <?php
                include "footer.php";
            ?>

        </div> <!--END OF WRAPPER-->
    </body>
    <script>
        let btn = document.querySelectorAll(".anime");
        let droplist = document.querySelectorAll(".show");
        for(let i = 0; i < btn.length; i++){
            btn[i].addEventListener("click", function(){
            this.classList.toggle("active");
            let content = this.nextElementSibling;
            if (content.style.maxHeight){
            content.style.maxHeight = null;
            } else {
            content.style.maxHeight = content.scrollHeight + "px";
            }
        });
        }
    </script>
    <?php
    } else{
        echo "<script>window.location = 'adminlogin.php';</script>";
    }
    ?>
</html>