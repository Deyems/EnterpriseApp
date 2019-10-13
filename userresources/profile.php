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
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <script src="../fontawesome-free-5.5.0-web\js\all.js"></script>
</head>
<body>
    
    <div class="wrapper">
        
    <?php include "header.php"; ?>
        
        <main>
        <div class="diamond">

        </div>  
            <section class="container">
            
                <?php include "ShowlastTransaction.php" ?>

                <div>
                    <div>
                        <h1>Update your Profile Details</h1>
                        <div>
                            
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['profileemail'])){
                                        $old_email = chk($_POST['old_email']);
                                        $email_p = chk($_POST['email']);
                                        $c_email_p = chk($_POST['c_email']);
                                        echo "$c_user"; //echo "<br>";
                                        //echo "$email"."The email from database";
                                        $old_email = filter_var($old_email, FILTER_SANITIZE_EMAIL);
                                        $email_p = filter_var($email_p, FILTER_SANITIZE_EMAIL);
                                        $c_email_p = filter_var($c_email_p, FILTER_SANITIZE_EMAIL);

                                        $old_email = filter_var($old_email, FILTER_VALIDATE_EMAIL);
                                        $email_p = filter_var($email_p, FILTER_VALIDATE_EMAIL);
                                        $c_email_p = filter_var($c_email_p, FILTER_VALIDATE_EMAIL);

                                        $status = 'active';

                                            if($old_email && $email_p && $c_email_p){

                                            
                                                if($email_p == $c_email_p){
                                                        
                                                    if($email == $old_email){
                                                            echo "equal email to database";

                                                        $sql = " UPDATE user_login SET email ='$email_p', c_email = '$c_email_p' WHERE username = '$c_user' ";
                                                        $result_query = mysqli_query($conn,$sql);
                                                        if($result_query){
                                                            echo "<span style='color:red'>You have updated your email</span>";
                                                            echo "<script>window.location='profile.php'</script>";
                                                        } else{
                                                            echo mysqli_error($conn). "Your details were not updated";
                                                            }

                                                    } else{
                                                        echo "Your email doesn't match Old records";
                                                    }
                                                    
                                                } else{
                                                    echo "Your new emails don't match";
                                                }
                                            // end of outer loop
                                        } else{
                                            echo "<span>Enter your email details</span>";
                                        }
                                    }
                                ?>
                                <fieldset>
                                    <legend>Email</legend>
                                    <div>
                                        <label for="old_email"> Old email Address</label>
                                        <input type="email" name="old_email" id="old_email" required="required">
                                    </div>
                                    <div>
                                        <label for="email">New Email Address</label>
                                        <input type="email" name="email" id="email" required="required">
                                    </div>
                                    <div>
                                        <label for="c_email">Confirm Email</label>
                                        <input type="email" name="c_email" id="c_email" required="required">
                                    </div>
                                    <div>
                                        <input type="submit" name="profileemail" value="Update" id="sender">
                                    </div>
                                </fieldset>

                            </form>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['profilenumber'])){
                                        
                                        $old_m_number = chk($_POST['old_m_number']);
                                        $m_number = chk($_POST['m_number']);
                                        $c_m_number = chk($_POST['c_m_number']);

                                        $old_m_number = filter_var($old_m_number, FILTER_SANITIZE_NUMBER_INT);
                                        $m_number = filter_var($m_number, FILTER_SANITIZE_NUMBER_INT);
                                        $c_m_number = filter_var($c_m_number, FILTER_SANITIZE_NUMBER_INT);

                                        $status = 'active';
                                        if($old_m_number && $m_number && $c_m_number){
                                            if($m_number == $c_m_number){
                                                if($contact == $old_m_number){
                                                        echo "equal Phone numbers to database";

                                                        $sql = " UPDATE user_login SET contact = '$m_number', c_contact = '$c_m_number' WHERE username = '$c_user' ";
                                                        $result_query = mysqli_query($conn,$sql);
                                                        if($result_query){
                                                            echo "<span style='color:red'>New Phone Number have been added</span>";
                                                            echo "<script>window.location='profile.php'</script>";
                                                        } else{
                                                            echo mysqli_error($conn). "Your details were not updated";
                                                            }
                                                    
                                                } else{
                                                    echo "Mobile Numbers do not match Old records";
                                                }

                                            } else{
                                                echo " Your new mobile numbers don't match";
                                            }
                                        // end of outer loop
                                        } else { echo "<span>Invalid Number</span>"; }
                                    } // END OF ISSET
                                ?>
                                <fieldset>
                                    <legend>Telephone Number</legend>
                                    <div>
                                        <label for="old_m_number">Old Mobile Number</label>
                                        <input type="text" name="old_m_number" id="old_m_number" maxlength="13" required="required">
                                    </div>
                                    <div>
                                        <label for="m_number">New Mobile Number</label>
                                        <input type="text" name="m_number" id="m_number" maxlength="13" required="required">
                                    </div>
                                    <div>
                                        <label for="c_m_number">Confirm Mobile Number</label>
                                        <input type="text" name="c_m_number" id="c_m_number" maxlength="13" required="required">
                                    </div>
                                    <div>
                                        <input type="submit" name="profilenumber" value="Update" id="sender">
                                    </div>
                                </fieldset>
                            </form>
                            
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST['profilepass'])){
                                        
                                        $old_password = chk($_POST['old_password']);
                                        $new_password = chk($_POST['password']);
                                        $c_password = chk($_POST['c_password']);
                                        
                                        $status = 'active';
    
                                        if($new_password == $c_password){
                                                
                                            if($passkey == $old_password){
                                                    $sql = " UPDATE user_login SET passkey = '$new_password',c_passkey = '$c_password' WHERE username = '$c_user' ";
                                                    $result_query = mysqli_query($conn,$sql);
                                                    if($result_query){
                                                        echo "<span style='color:red'>Records have been updated</span>";
                                                        echo "<script>window.location='profile.php'</script>";
                                                    } else{
                                                        echo mysqli_error($conn). "Your details were not updated";
                                                        }        
                                            } else{
                                                echo "Password doesn't correspond to Old records";
                                            }
                                        } else{
                                            echo "Your new passwords don't match";
                                        }

                                        // end of outer loop
                                    }
                                
                                ?>
                                <fieldset>
                                    <legend>Password</legend>
                                    <div>
                                        <label for="old_password">Old Password:</label>
                                        <input type="password" name="old_password" id="old_password" required="required">
                                    </div>
                                    <div>
                                        <label for="password">New Password:</label>
                                        <input type="password" name="password" id="password" required="required">
                                    </div>
                                    <div>
                                        <label for="c_password">Confirm Password:</label>
                                        <input type="password" name="c_password" id="c_password" required="required">
                                    </div>
                                    <div>
                                        <input type="submit" name="profilepass" value="Update" id="sender">
                                    </div>
                                </fieldset>
                            </form>

                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                    if(isset($_POST["profilepixs"])){
                                        $file_name = $_FILES["profile_dp"]["name"];
                                        $file_type = $_FILES["profile_dp"]["type"];
                                        $file_tmp_name = $_FILES["profile_dp"]["tmp_name"];
                                        $file_size = $_FILES["profile_dp"]["size"];
                                        $file_error = $_FILES["profile_dp"]["error"];
                                        $file_unique_name = uniqid();

                                        $target_dir = "userimages/";

                                        $file_ext = explode('.',$file_name);
                                        $filerealext = strtolower(end($file_ext));
                                        $allowed = array('jpg','jpeg','png','gif');

                                        $file_new_name = $file_unique_name.'.'.$filerealext;
                                        $target_file = $target_dir.$file_new_name;

                                        /* TO CHECK IF THE EXTENSION IS FOUND IN THE DEFINED EXTENSIONS */
                                        if(in_array($filerealext, $allowed)){
                                            if($file_error === 0){
                                                if($file_size < 10000001){

                                                    move_uploaded_file($file_tmp_name,$target_file);

                                                    $sql_logo = "UPDATE `logo` SET f_url='$file_new_name' where user_logger='$c_user' ";
                                                        //$subnow = mysqli_query($conn, $sql);
                                                        if(mysqli_query($conn,$sql_logo)){
                                                        //echo "Record Updated Successfully .<br>";
                                                        echo "You have successfully uploaded your logo";
                                                        echo "<script>window.location='profile.php'</script>";
                                                        }
                                                        else {
                                                            echo "Error in Updating facebook.<br>";
                                                        } //5cc4853b63f7f.jpg



                                                    //echo "You have successfully uploaded your logo";

                                                } else{
                                                    echo "Your file is too Large!";
                                                }
                                            } else{
                                                echo "There is error in Uploading";
                                            }
                                        }
                                    }

                                ?>
                                <fieldset>
                                    <legend>Profile picture</legend>
                                    <div>
                                        <input type="file" name="profile_dp">
                                    </div>
                                    <div>
                                        <input type="submit" name="profilepixs" value="Update">
                                    </div>
                                </fieldset>
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