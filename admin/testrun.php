<?php
    include "../connection.php";
    error_reporting(E_ERROR);
    include "../function.php";
?>
    <div>
        <table>
            <tr>
                <th>Index</th>
                <th>Select</th>
                <th>Users</th>
                <th>Emails</th>
                <th>Contact</th>
                <th>Balance</th>
                <th>Location</th>
                <th>Status</th>
            </tr>
            
            <form action="" id="formuser" method="post">
                <div>
                    <?php
                        // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                        //$counter = 1;
                        $defaultsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 1");
                            if($defaultsql){
                                while($r_defaultsql = mysqli_fetch_array($defaultsql) ){
                                    $next = $r_defaultsql["next"];
                                    $tablength = $r_defaultsql["stretch"];
                                }
                        $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $next,$tablength ");
                            } else{
                                echo "Error: ".mysqli_error($conn);
                            }

                        if(isset($_POST['next'])){
                            $tablimit = mysqli_query($conn, "SELECT * FROM user_login");
                            $countlimit = mysqli_num_rows($tablimit);

                            echo $nextupd = $next + 5;
                                if($nextupd < $countlimit){
                                    $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 1 ");
                                    /*
                                        if($sql_nxt_upd){
                                            echo "database updated";
                                        } else{
                                            echo "Not updated to database";
                                        }
                                    */
                                } else{
                                    echo $nextupd = $nextupd - 5;
                                    echo "table limit reached";
                                    $sql_nxt_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$nextupd' where id = 1 ");
                                }
                                

                            $nextsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 1");
                            if($nextsql){
                                while($r_nextsql = mysqli_fetch_array($nextsql) ){
                                    $next = $r_nextsql["next"];
                                    $prev = $r_nextsql["prev"];
                                    $tablength = $r_nextsql["stretch"];
                                }
                                
                                $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $next,$tablength ");
                                
                            } else{
                                echo "Error: ".mysqli_error($conn);
                            }
                            
                        }

                        if(isset($_POST['prev'])){

                            $prevsql = mysqli_query($conn, "SELECT * FROM controlbtn2 where id = 1");
                            if($prevsql){
                                while($r_prevsql = mysqli_fetch_array($prevsql) ){
                                    $prev = $r_prevsql["next"];
                                    //$prev = $r_prevsql["prev"];
                                    $tablength = $r_prevsql["stretch"];
                                }
                                $prev = $prev - 5;
                                if($prev>=0){
                                    $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $prev,$tablength ");
                                } else{
                                    echo "Database limit reached";
                                    $prev = 0;
                                    $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login LIMIT $prev,$tablength ");
                                }
                                
                                $sql_prev_upd = mysqli_query($conn, "UPDATE controlbtn2 SET next ='$prev' where id = 1 ");
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
                            
                            while($run_sql_loggers = mysqli_fetch_array($sql_loggers)){
                                $counter = $run_sql_loggers['id'];
                                $usernames = $run_sql_loggers['username'];
                                $email = $run_sql_loggers['email'];
                                $contact = $run_sql_loggers['contact'];
                                $status = $run_sql_loggers['status'];
                                $balance = $run_sql_loggers['balance'];
                                $u_location = $run_sql_loggers['u_location'];
                                
                                if($status == 'activated'){
                                    $color = 'green';
                                } else{
                                    $color = 'red';
                                }
                                
                                echo "<tr>
                                <td>$counter</td>
                                <td><input type='checkbox' name='subscribers' id=''/></td>
                                <td>$usernames</td>
                                <td>$email</td>
                                <td>$contact</td>
                                <td>$balance</td>
                                <td>$u_location</td>
                                <td><a class='tablink' style='color:$color' href='check.php?user=$usernames'>$status</a></td>
                                </tr>";
                                $counter++;
                            }
                    ?>
                </div>
                
            </form>

            
        </table>
            <div>
                <input type="submit" form="formuser" name="prev" value="Previous">
                <input type="submit" form="formuser" name="next" value="Next">
            </div> 
    </div>