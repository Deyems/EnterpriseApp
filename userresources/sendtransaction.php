<?php
/*UPDATE TRANSACTIONS TABLE */
        date_default_timezone_set("Africa/Lagos");
        $t_date = date("Y/m/d"); // To get the Date of the transaction
        $t_time = date("h:i:sa"); // To get the time of transaction

        $sql2 = "INSERT INTO `transactions` (id, service_type,charges,t_time,t_date,t_status,user_logger) 
        VALUES (null, '$service','$charges', '$t_time', '$t_date','$status','$currentlogger' )";
        $result2 = mysqli_query($conn,$sql2);
        
        if($result2){
            echo "<span>Transactions updated</span>";
            echo "<script></script>";
        } else {
            echo mysqli_error($conn). "No transaction added";
        }
        
    
?>