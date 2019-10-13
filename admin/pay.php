<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<?php
    if($_SESSION["logger"]){
    ?>
    <head>
        <title>Admin-Payers</title>
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
                        <h1>Wallet Funds</h1>
                    </div>
                    
                    <div class="menu_head">
                        <div>
                            <input type="text" name="" id="header_text">
                            <input type="submit" value="update">
                        </div>
                    </div>

                    <div>
                        <table>
                            <tr>
                                <th>S/N</th>
                                <th>Users</th>
                                <th>Amount</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            <form action="" id="formuser" method="post">
                            
                                <div>
                                    <?php
                                        // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                        //$counter = 1;
                                        $defaultsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 2");
                                            if($defaultsql){
                                                while($r_defaultsql = mysqli_fetch_array($defaultsql) ){
                                                    $next = $r_defaultsql["next"];
                                                    $tablength = $r_defaultsql["stretch"];
                                                }
                                                $sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                        //$sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $next,$tablength ");
                                            } else{
                                                echo "Error: ".mysqli_error($conn);
                                            }

                                        if(isset($_POST['next'])){
                                            $tablimit = mysqli_query($conn, "SELECT * FROM payment");
                                            $countlimit = mysqli_num_rows($tablimit);

                                                $nextupd = $next + 5;
                                                if($nextupd < $countlimit){
                                                    $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 2 ");
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
                                                    $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 2 ");
                                                }
                                                

                                            $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 2 ");
                                            if($nextsql){
                                                while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                                    $next = $r_nextsql["next"];
                                                    $prev = $r_nextsql["prev"];
                                                    $tablength = $r_nextsql["stretch"];
                                                }
                                                
                                                $sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $next,$tablength ");
                                                //$sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $next,$tablength ");
                                                
                                            } else{
                                                echo "Error: ".mysqli_error($conn);
                                            }
                                            
                                        }

                                        if(isset($_POST['prev'])){

                                            $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 2 ");
                                            if($prevsql){
                                                while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                                    $prev = $r_prevsql["next"];
                                                    //$prev = $r_prevsql["prev"];
                                                    $tablength = $r_prevsql["stretch"];
                                                }
                                                $prev = $prev - 5;
                                                if($prev>=0){
                                                    $sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                    //$sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $prev,$tablength ");
                                                } else{
                                                    echo "Database limit reached";
                                                    $prev = 0;
                                                    $sqlresult = mysqli_query($conn,"SELECT * FROM payment LIMIT $prev,$tablength ");
                                                    //$sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $prev,$tablength ");
                                                }
                                                
                                                $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 2 ");
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

                                        //$sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $prex,5 ");
                                            
                                        
                                        while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                            $inde = $run_sqlresult['id'];
                                            $amount = $run_sqlresult['amount'];
                                            $p_time = $run_sqlresult['p_time'];
                                            $p_date = $run_sqlresult['p_date'];
                                            $status = $run_sqlresult['approval'];
                                            $payguy = $run_sqlresult['user_logger'];
                                            
                                                if($status == 'approved'){
                                                    $color = 'green';
                                                } else{
                                                    $color = 'red';
                                                }

                                            echo "<tr>
                                            <td>$inde</td>
                                            <td>$payguy</td>
                                            <td>$amount</td>
                                            <td>$p_time</td>
                                            <td>$p_date</td>
                                            <td><a class='tablink' style='color:$color' href='checkapp.php?user=$payguy'>$status</a></td>
                                            </tr>";
                                        }

                                    ?>
                                </div>

                            </form>
                            
                        </table>

                        <div class="flexload">
                            <input type="submit" form="formuser" name="prev" value="Previous">
                            <input type="submit" form="formuser" name="next" value="Next">
                        </div>
                    </div>

                </div> <!--End of Main Con-->
            </section>
            
            <?php
                include "footer.php";
            ?>

        </div> <!--END OF WRAPPER-->
    </body>
    <?php
    } else{
        echo "<script>window.location = 'adminlogin.php';</script>";
    }
    ?>
</html>