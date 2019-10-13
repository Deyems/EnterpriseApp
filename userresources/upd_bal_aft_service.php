<?php
$total = $balance - $charges;

        $bal_upd = "UPDATE `user_login` 
        SET balance = '$total'
        WHERE username = '$c_user' ";
    $r_bal_up = mysqli_query($conn,$bal_upd);
    if($r_bal_up){
        //echo "Wallet balance will be updated soon...";
    } else {
        echo "error in uploading";
}
?>