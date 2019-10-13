<html>
<head>
        <title>Admin-Users</title>
        <?php
            include "linkedfiles.php";
            include "../connection.php";
        ?>
    </head>
    <body>
        <?php
            $person = $_GET['user'];
            $sqlresult = mysqli_query($conn,"SELECT * FROM payment where user_logger = '$person' ");
            while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                $status = $run_sqlresult['approval'];
            }
            if($status == 'unapproved'){
                $sqlupd = mysqli_query($conn,"UPDATE payment SET approval = 'approved' where user_logger = '$person' ");
            } elseif($status = 'approved'){
                $sqlupd2 = mysqli_query($conn,"UPDATE payment SET approval = 'unapproved' where user_logger = '$person' ");
            }
            echo "<script>window.location='pay.php'</script>";
        ?>
    </body>
</html>