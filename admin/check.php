<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin-Users</title>
        <?php
            include "linkedfiles.php";
            include "../connection.php";
        ?>
    </head>
    <body>
    <?php
        $user = $_GET['user'];
        $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login WHERE username = '$user' ");
            while($run_sql_loggers = mysqli_fetch_array($sql_loggers)){
                $usernames = $run_sql_loggers['username'];
                $email = $run_sql_loggers['email'];
                $contact = $run_sql_loggers['contact'];
                $status = $run_sql_loggers['status'];
                $balance = $run_sql_loggers['balance'];
                $u_location = $run_sql_loggers['u_location'];
            }

        if($status == "deactivated"){
                $mact = mysqli_query($conn, "UPDATE user_login SET status = 'activated' WHERE username ='$user'");
        }elseif($status == "activated") {
                $mact = mysqli_query($conn, "UPDATE user_login SET status = 'deactivated' WHERE username ='$user'");
        }                                  
        
        echo "<script>window.location='users.php'</script>";
    ?>
    </body>
</html>