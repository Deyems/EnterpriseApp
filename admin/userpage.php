<!DOCTYPE html>
<?php
    include "../connection.php";
    include "../function.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <menu>
                <div>
                    <img src="../userresources/userimages/profile.png" alt="profile picture">
                </div>
                <div>
                    <h1>Welcome...Admin</h1>
                </div>
            </menu>
            <nav>
                <ul>
                    <li><a href="landing.php">Index</a></li>
                    <li><a href="userpage.php">Userpage</a></li>
                    <li><a href="gateway.php">Gateways</a></li>
                </ul>
                <div>
                    <button type="submit">logout</button>
                    <div class="nav_buttons">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <h1>The Landing Page</h1>
            
            <?php //include "../userresources/header.php"; ?>

            <header>
                <div> <!--1ST child-->
                    <?php
                        //if(isset()){
                            if(isset($_POST["change_dp"])){
                                $file_name = $_FILES["defaultpixs"]["name"];
                                $file_type = $_FILES["defaultpixs"]["type"];
                                $file_tmp_name = $_FILES["defaultpixs"]["tmp_name"];
                                $file_size = $_FILES["defaultpixs"]["size"];
                                $file_error = $_FILES["defaultpixs"]["error"];
                                $c_user = $_POST['users'];

                                $file_unique_name = uniqid();

                                $target_dir = "../userresources/userimages/";

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
                        //}
                    ?>
                    <form action="" enctype = "multipart/form-data" method="post">
                        <input type="file" name="defaultpixs" id="">
                        <?php
                            $userlog = "SELECT * FROM `logo` ";
                            $result = mysqli_query($conn,$userlog);

                            echo "<select name='users'>";
                            while($row = mysqli_fetch_array($result)){
                                $loguser_image = $row['f_url'];
                                $loguser_name = $row['user_logger'];
                                echo "<option value='$loguser_name'> 
                                    $loguser_name
                                </option>";
                            }
                            echo "</select>";
                        ?>
                        
                        <input type="submit" name="change_dp" value="change dp">
                    </form>
                </div>

                <div>
                    <!-- <li>Wallet Balance: N<?php  //echo $balance ?></li> -->
                    <form action="" method="post">
                        <?php
                            if(isset($_POST['edit'])){
                                $cha_val = $_POST['logout'];
                                //echo "<script>window.location= 'logout.php'</script>";
                            }
                        ?>
                        <div>
                            <input type="text" name="logout" value = "log out"  id="">
                        </div>
                        <input type="submit" name="edit" value="Edit">
                    </form>
                </div>

                <section> <!--1st child of Nav-->
                    <div>
                    <?php
                        if(isset($_POST["menutext"])){
                            $menu1 = $_POST["menu1"];
                            $menu2 = $_POST["menu2"];
                            $menu3 = $_POST["menu3"];
                            $menu4 = $_POST["menu4"];
                            $menu5 = $_POST["menu5"];
                            $menu6 = $_POST["menu6"];

                            if(!$menu1 && !$menu2 && !$menu3 && !$menu4 && !$menu5 && !$menu6){
                                echo "<span>your fields are empty....</span>";
                            }
                            if($menu1 && $menu2 && $menu3 && $menu4 && $menu5 && $menu6){
                                $menu_upd1 = "UPDATE `menu` SET menu_text = '$menu1' WHERE id = 1 ";
                                $menu_upd2 = "UPDATE `menu` SET menu_text = '$menu2' WHERE id = 2 ";
                                $menu_upd3 = "UPDATE `menu` SET menu_text = '$menu3' WHERE id = 3 ";
                                $menu_upd4 = "UPDATE `menu` SET menu_text = '$menu4' WHERE id = 4 ";
                                $menu_upd5 = "UPDATE `menu` SET menu_text = '$menu5' WHERE id = 5 ";
                                $menu_upd6 = "UPDATE `menu` SET menu_text = '$menu6' WHERE id = 6 ";

                                $result_mu_1 = mysqli_query($conn, $menu_upd1);
                                $result_mu_2 = mysqli_query($conn, $menu_upd2);
                                $result_mu_3 = mysqli_query($conn, $menu_upd3);
                                $result_mu_4 = mysqli_query($conn, $menu_upd4);
                                $result_mu_5 = mysqli_query($conn, $menu_upd5);
                                $result_mu_6 = mysqli_query($conn, $menu_upd6);

                                if($result_mu_1 && $result_mu_2 && $result_mu_3 && $result_mu_4 && $result_mu_5 && $result_mu_6){
                                    echo "<p>records updated successfully</p>";
                                } else { echo "Error in updating".mysqli_error($conn); }
                            }

                        }
                        ?>
                    </div>
                    <form action="" method="post">
                        <div>
                            <h2>Menu Content</h2>
                            <input type="text" name="menu1" value ="<?php echo "$menu_text_1" ?>" id="">
                            <input type="text" name="menu2" value ="<?php echo "$menu_text_2" ?>" id="">
                            <input type="text" name="menu3" value ="<?php echo "$menu_text_3" ?>" id="">
                            <input type="text" name="menu4" value ="<?php echo "$menu_text_4" ?>" id="">
                            <input type="text" name="menu5" value ="<?php echo "$menu_text_5" ?>" id="">
                            <input type="text" name="menu6" value ="<?php echo "$menu_text_6" ?>" id="">
                            <input type="submit" name="menutext" value="update text">
                        </div>
                    </form>
                        
                    <form action = "" method = "post">
                        <div>
                        <?php
                        if(isset($_POST["menulink"])){
                            $menulink1 = $_POST["menulink1"];
                            $menulink2 = $_POST["menulink2"];
                            $menulink3 = $_POST["menulink3"];
                            $menulink4 = $_POST["menulink4"];
                            $menulink5 = $_POST["menulink5"];
                            $menulink6 = $_POST["menulink6"];

                            if(!$menulink1 && !$menulink2 && !$menulink3 && !$menulink4 && !$menulink5 && !$menulink6){
                                echo "<span>your fields are empty....</span>";
                            }
                            if($menulink1 && $menulink2 && $menulink3 && $menulink4 && $menulink5 && $menulink6){
                                $menulink_upd1 = "UPDATE `menu` SET menu_alt = '$menulink1' WHERE id = 1 ";
                                $menulink_upd2 = "UPDATE `menu` SET menu_alt = '$menulink2' WHERE id = 2 ";
                                $menulink_upd3 = "UPDATE `menu` SET menu_alt = '$menulink3' WHERE id = 3 ";
                                $menulink_upd4 = "UPDATE `menu` SET menu_alt = '$menulink4' WHERE id = 4 ";
                                $menulink_upd5 = "UPDATE `menu` SET menu_alt = '$menulink5' WHERE id = 5 ";
                                $menulink_upd6 = "UPDATE `menu` SET menu_alt = '$menulink6' WHERE id = 6 ";

                                $result_mul_1 = mysqli_query($conn, $menulink_upd1);
                                $result_mul_2 = mysqli_query($conn, $menulink_upd2);
                                $result_mul_3 = mysqli_query($conn, $menulink_upd3);
                                $result_mul_4 = mysqli_query($conn, $menulink_upd4);
                                $result_mul_5 = mysqli_query($conn, $menulink_upd5);
                                $result_mul_6 = mysqli_query($conn, $menulink_upd6);

                                if($result_mul_1 && $result_mul_2 && $result_mul_3 && $result_mul_4 && $result_mul_5 && $result_mul_6){
                                    echo "<p>records updated successfully</p>";
                                } else { echo "Error in updating".mysqli_error($conn); }
                            }

                        }
                        ?>
                        </div>

                        <div>
                            <h2>Menu Links</h2>
                            <input type="text" name="menulink1" value ="<?php echo "$menu_alt_1" ?>" id="">
                            <input type="text" name="menulink2" value ="<?php echo "$menu_alt_2" ?>" id="">
                            <input type="text" name="menulink3" value ="<?php echo "$menu_alt_3" ?>" id="">
                            <input type="text" name="menulink4" value ="<?php echo "$menu_alt_4" ?>" id="">
                            <input type="text" name="menulink5" value ="<?php echo "$menu_alt_5" ?>" id="">
                            <input type="text" name="menulink6" value ="<?php echo "$menu_alt_6" ?>" id="">
                            <input type="submit" name="menulink" value="update links">
                        </div>
                    </form>
                    
                </section>
            </header>

            <section>
                <h2>Navigation</h2>

                <div>
                    <div class="brund">
                        <button class="anime">userboard</button>

                        <div class="show"> <!--FOR USER SERVICES-->
                            <h2>Content heading</h2>
                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["h_text"])){
                                        $h_u_text = $_POST["headertext1"];
                                        if(!$h_u_text){
                                            echo "<span>Your Fields are empty...</span>";
                                        }
                                        if($h_u_text){
                                            $upd_h_txt = "UPDATE `headers` SET home = '$h_u_text' where id = 1 ";
                                            $q_upd_h_txt = mysqli_query($conn,$upd_h_txt);
                                            if($q_upd_h_txt){
                                                echo "<p>updated text to database</p>";
                                            } else { echo "Error in update". mysqli_error($conn); }
                                        }
                                    }
                                ?>
                                <input type="text" name="headertext1" value ="Make your e-money Count" id="">
                                <input type="submit" name="h_text" value="update">
                            </form>
                            
                            <div>
                                <h2>Services</h2>
                                <div>
                                    <div>
                                        <?php
                                            if(isset($_POST["service1"])){
                                                $servicetype1 = $_POST["servicetype1"];
                                                $servicelink1 = $_POST["servicelink1"];
                                                $fontawesometype1 = $_POST["fontawesometype1"];
                                                $fontawesomesize1 = $_POST["fontawesomesize1"];
                                                
                                                if(!$servicetype1 && !$servicelink1 && !$fontawesometype1 && !$fontawesomesize1){
                                                    echo "<span>your fields are empty....</span>";
                                                }
                                                if($servicetype1 && $servicelink1 && $fontawesometype1 && $fontawesomesize1){
                                                    $service_t_upd1 = "UPDATE `dashboard` SET services = '$servicetype1' WHERE id = 1 ";
                                                    $service_l_upd1 = "UPDATE `dashboard` SET alt = '$servicelink1' WHERE id = 1 ";
                                                    $f_awe_t_upd1 = "UPDATE `dashboard` SET icons = '$fontawesometype1' WHERE id = 1 ";
                                                    $f_awe_s_upd1 = "UPDATE `dashboard` SET size = '$fontawesomesize1' WHERE id = 1 ";
                                                    
                                                    $result_s_t_1 = mysqli_query($conn, $service_t_upd1);
                                                    $result_s_l_1 = mysqli_query($conn, $service_l_upd1);
                                                    $result_f_type_1 = mysqli_query($conn, $f_awe_t_upd1);
                                                    $result_f_size_1 = mysqli_query($conn, $f_awe_s_upd1);
                                                    
                                                    if($result_s_t_1 && $result_s_l_1 && $result_f_type_1 && $result_f_size_1){
                                                        echo "<p>records updated successfully</p>";
                                                    } else { echo "Error in updating".mysqli_error($conn); }
                                                }

                                            }
                                        ?>
                                    </div>
                                    <form action="" method="post">
                                        <input type="text" name="servicetype1" value="<?php echo "$d_services_1" ?>" id="">
                                        <input type="text" name="servicelink1" value="<?php echo "$d_alt_1"?>" id="">
                                        <input type="text" name="fontawesometype1" value="<?php echo "$d_icons_1" ?>" id="">
                                        <input type="text" name="fontawesomesize1" value=" <?php echo "$d_size_1" ?> " id="">
                                        <input type="submit" name="service1" value="update">
                                    </form>
                                </div>

                                <div>

                                <div>
                                    <?php
                                        if(isset($_POST["service2"])){
                                            $servicetype2 = $_POST["servicetype2"];
                                            $servicelink2 = $_POST["servicelink2"];
                                            $fontawesometype2 = $_POST["fontawesometype2"];
                                            $fontawesomesize2 = $_POST["fontawesomesize2"];
                                            
                                            if(!$servicetype2 && !$servicelink2 && !$fontawesometype2 && !$fontawesomesize2){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($servicetype2 && $servicelink2 && $fontawesometype2 && $fontawesomesize2){
                                                $service_t_upd2 = "UPDATE `dashboard` SET services = '$servicetype2' WHERE id = 2 ";
                                                $service_l_upd2 = "UPDATE `dashboard` SET alt = '$servicelink2' WHERE id = 2 ";
                                                $f_awe_t_upd2 = "UPDATE `dashboard` SET icons = '$fontawesometype2' WHERE id = 2 ";
                                                $f_awe_s_upd2 = "UPDATE `dashboard` SET size = '$fontawesomesize2' WHERE id = 2 ";
                                                
                                                $result_s_t_2 = mysqli_query($conn, $service_t_upd2);
                                                $result_s_l_2 = mysqli_query($conn, $service_l_upd2);
                                                $result_f_type_2 = mysqli_query($conn, $f_awe_t_upd2);
                                                $result_f_size_2 = mysqli_query($conn, $f_awe_s_upd2);
                                                
                                                if($result_s_t_2 && $result_s_l_2 && $result_f_type_2 && $result_f_size_2){
                                                    echo "<p>records updated successfully</p>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                </div>

                                    <form action="" method="post">
                                        <input type="text" name="servicetype2" value="<?php echo "$d_services_2" ?>" id="">
                                        <input type="text" name="servicelink2" value="<?php echo "$d_alt_2"?>" id="">
                                        <input type="text" name="fontawesometype2" value="<?php echo "$d_icons_2" ?>" id="">
                                        <input type="text" name="fontawesomesize2" value=" <?php echo "$d_size_2" ?> " id="">
                                        <input type="submit" name="service2" value="update">
                                    </form>
                                </div>

                                <div>
                                    
                                <div>
                                    <?php
                                        if(isset($_POST["service3"])){
                                            $servicetype3 = $_POST["servicetype3"];
                                            $servicelink3 = $_POST["servicelink3"];
                                            $fontawesometype3 = $_POST["fontawesometype3"];
                                            $fontawesomesize3 = $_POST["fontawesomesize3"];
                                            
                                            if(!$servicetype3 && !$servicelink3 && !$fontawesometype3 && !$fontawesomesize3){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($servicetype3 && $servicelink3 && $fontawesometype3 && $fontawesomesize3){
                                                $service_t_upd3 = "UPDATE `dashboard` SET services = '$servicetype3' WHERE id = 3 ";
                                                $service_l_upd3 = "UPDATE `dashboard` SET alt = '$servicelink3' WHERE id = 3 ";
                                                $f_awe_t_upd3 = "UPDATE `dashboard` SET icons = '$fontawesometype3' WHERE id = 3 ";
                                                $f_awe_s_upd3 = "UPDATE `dashboard` SET size = '$fontawesomesize3' WHERE id = 3 ";
                                                
                                                $result_s_t_3 = mysqli_query($conn, $service_t_upd3);
                                                $result_s_l_3 = mysqli_query($conn, $service_l_upd3);
                                                $result_f_type_3 = mysqli_query($conn, $f_awe_t_upd3);
                                                $result_f_size_3 = mysqli_query($conn, $f_awe_s_upd3);
                                                
                                                if($result_s_t_3 && $result_s_l_3 && $result_f_type_3 && $result_f_size_3){
                                                    echo "<p>records updated successfully</p>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                </div>

                                    <form action="" method="post">
                                        <input type="text" name="servicetype3" value="<?php echo "$d_services_3" ?>" id="">
                                        <input type="text" name="servicelink3" value="<?php echo "$d_alt_3"?>" id="">
                                        <input type="text" name="fontawesometype3" value="<?php echo "$d_icons_3" ?>" id="">
                                        <input type="text" name="fontawesomesize3" value=" <?php echo "$d_size_3" ?> " id="">
                                        <input type="submit" name="service3" value="update">
                                    </form>
                                </div>

                                <div>
                                    
                                <div>
                                    <?php
                                        if(isset($_POST["service4"])){
                                            $servicetype4 = $_POST["servicetype4"];
                                            $servicelink4 = $_POST["servicelink4"];
                                            $fontawesometype4 = $_POST["fontawesometype4"];
                                            $fontawesomesize4 = $_POST["fontawesomesize4"];
                                            
                                            if(!$servicetype4 && !$servicelink4 && !$fontawesometype4 && !$fontawesomesize4){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($servicetype4 && $servicelink4 && $fontawesometype4 && $fontawesomesize4){
                                                $service_t_upd4 = "UPDATE `dashboard` SET services = '$servicetype4' WHERE id = 4 ";
                                                $service_l_upd4 = "UPDATE `dashboard` SET alt = '$servicelink4' WHERE id = 4 ";
                                                $f_awe_t_upd4 = "UPDATE `dashboard` SET icons = '$fontawesometype4' WHERE id = 4 ";
                                                $f_awe_s_upd4 = "UPDATE `dashboard` SET size = '$fontawesomesize4' WHERE id = 4 ";
                                                
                                                $result_s_t_4 = mysqli_query($conn, $service_t_upd4);
                                                $result_s_l_4 = mysqli_query($conn, $service_l_upd4);
                                                $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                                $result_f_size_4 = mysqli_query($conn, $f_awe_s_upd4);
                                                
                                                if($result_s_t_4 && $result_s_l_4 && $result_f_type_4 && $result_f_size_4){
                                                    echo "<p>records updated successfully</p>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                </div>

                                    <form action="" method="post">
                                        <input type="text" name="servicetype4" value="<?php echo "$d_services_4" ?>" id="">
                                        <input type="text" name="servicelink4" value="<?php echo "$d_alt_4"?>" id="">
                                        <input type="text" name="fontawesometype4" value="<?php echo "$d_icons_4" ?>" id="">
                                        <input type="text" name="fontawesomesize4" value=" <?php echo "$d_size_4" ?> " id="">
                                        <input type="submit" name="service4" value="update">
                                    </form>
                                </div>

                                <div>
                                    
                                <div>
                                    <?php
                                        if(isset($_POST["service5"])){
                                            $servicetype5 = $_POST["servicetype5"];
                                            $servicelink5 = $_POST["servicelink5"];
                                            $fontawesometype5 = $_POST["fontawesometype5"];
                                            $fontawesomesize5 = $_POST["fontawesomesize5"];
                                            
                                            if(!$servicetype5 && !$servicelink5 && !$fontawesometype5 && !$fontawesomesize5){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($servicetype5 && $servicelink5 && $fontawesometype5 && $fontawesomesize5){
                                                $service_t_upd5 = "UPDATE `dashboard` SET services = '$servicetype5' WHERE id = 5 ";
                                                $service_l_upd5 = "UPDATE `dashboard` SET alt = '$servicelink5' WHERE id = 5 ";
                                                $f_awe_t_upd5 = "UPDATE `dashboard` SET icons = '$fontawesometype5' WHERE id = 5 ";
                                                $f_awe_s_upd5 = "UPDATE `dashboard` SET size = '$fontawesomesize5' WHERE id = 5 ";
                                                
                                                $result_s_t_5 = mysqli_query($conn, $service_t_upd5);
                                                $result_s_l_5 = mysqli_query($conn, $service_l_upd5);
                                                $result_f_type_5 = mysqli_query($conn, $f_awe_t_upd5);
                                                $result_f_size_5 = mysqli_query($conn, $f_awe_s_upd5);
                                                
                                                if($result_s_t_5 && $result_s_l_5 && $result_f_type_5 && $result_f_size_5){
                                                    echo "<p>records updated successfully</p>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                </div>

                                    <form action="" method="post">
                                        <input type="text" name="servicetype5" value="<?php echo "$d_services_5" ?>" id="">
                                        <input type="text" name="servicelink5" value="<?php echo "$d_alt_5"?>" id="">
                                        <input type="text" name="fontawesometype5" value="<?php echo "$d_icons_5" ?>" id="">
                                        <input type="text" name="fontawesomesize5" value=" <?php echo "$d_size_5" ?> " id="">
                                        <input type="submit" name="service5" value="update">
                                    </form>
                                </div>

                                <div>
                                    
                                <div>
                                    <?php
                                        if(isset($_POST["service6"])){
                                            $servicetype6 = $_POST["servicetype6"];
                                            $servicelink6 = $_POST["servicelink6"];
                                            $fontawesometype6 = $_POST["fontawesometype6"];
                                            $fontawesomesize6 = $_POST["fontawesomesize6"];
                                            
                                            if(!$servicetype6 && !$servicelink6 && !$fontawesometype6 && !$fontawesomesize6){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($servicetype6 && $servicelink6 && $fontawesometype6 && $fontawesomesize6){
                                                $service_t_upd6 = "UPDATE `dashboard` SET services = '$servicetype6' WHERE id = 6 ";
                                                $service_l_upd6 = "UPDATE `dashboard` SET alt = '$servicelink6' WHERE id = 6 ";
                                                $f_awe_t_upd6 = "UPDATE `dashboard` SET icons = '$fontawesometype6' WHERE id = 6 ";
                                                $f_awe_s_upd6 = "UPDATE `dashboard` SET size = '$fontawesomesize6' WHERE id = 6 ";
                                                
                                                $result_s_t_6 = mysqli_query($conn, $service_t_upd6);
                                                $result_s_l_6 = mysqli_query($conn, $service_l_upd6);
                                                $result_f_type_6 = mysqli_query($conn, $f_awe_t_upd6);
                                                $result_f_size_6 = mysqli_query($conn, $f_awe_s_upd6);
                                                
                                                if($result_s_t_6 && $result_s_l_6 && $result_f_type_6 && $result_f_size_6){
                                                    echo "<p>records updated successfully</p>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                </div>

                                    <form action="" method="post">
                                        <input type="text" name="servicetype6" value="<?php echo "$d_services_6" ?>" id="">
                                        <input type="text" name="servicelink6" value="<?php echo "$d_alt_6"?>" id="">
                                        <input type="text" name="fontawesometype6" value="<?php echo "$d_icons_6" ?>" id="">
                                        <input type="text" name="fontawesomesize6" value=" <?php echo "$d_size_6" ?> " id="">
                                        <input type="submit" name="service6" value="update">
                                    </form>
                                </div>

                                
                            </div>
                        </div>
                    </div>


                    <div class="brund">
                        <button class="anime">Users</button>
                            
                        <div class="show">    <!--DISPLAY USERS-->
                            <div class="users">
                                <table>
                                    <tr>
                                    <th><?php echo "Usernames" ?></th>
                                    <th><?php echo "Emails" ?></th>
                                    <th><?php echo "Contact" ?></th>
                                    <th><?php echo "Status" ?></th>
                                    <th><?php echo "balance" ?></th>
                                    <th><?php echo "Location" ?></th>
                                    </tr>
                                    
                                    <?php
                                        // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                        $sql_loggers = mysqli_query($conn,"SELECT * FROM user_login ");
                                            while($run_sql_loggers = mysqli_fetch_array($sql_loggers)){
                                                $usernames = $run_sql_loggers['username'];
                                                $email = $run_sql_loggers['email'];
                                                $contact = $run_sql_loggers['contact'];
                                                $status = $run_sql_loggers['status'];
                                                $balance = $run_sql_loggers['balance'];
                                                $u_location = $run_sql_loggers['u_location'];

                                                echo "<tr><td>$usernames</td>
                                                <td>$email</td>
                                                <td>$contact</td>
                                                <td>$balance</td>
                                                <td>$u_location</td>
                                                <td><button>$status</button></td>
                                                </tr>";
                                            }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="brund">                    
                        <button class="anime">Payment</button>
                        
                        <div class="show"> <!--DISPLAY PAYMENT DETAILS-->
                            <div class="payment">
                                <table>
                                    <tr>
                                    <th><?php echo "Amount Loaded" ?></th>
                                    <th><?php echo "Time" ?></th>
                                    <th><?php echo "Date" ?></th>
                                    <th><?php echo "Status" ?></th>
                                    </tr>
                                    
                                    <?php
                                        // WHERE users = 'NAME_of_USER'.... TO BE ADDED LATER
                                        $sqlresult = mysqli_query($conn,"SELECT * FROM payment ");
                                            while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                $amount = $run_sqlresult['amount'];
                                                $p_time = $run_sqlresult['p_time'];
                                                $p_date = $run_sqlresult['p_date'];
                                                $status = $run_sqlresult['approval'];
                                                echo "<tr><td>$amount</td>
                                                <td>$p_date</td>
                                                <td>$p_time</td>
                                                <td><button>$status</button></td>
                                                </tr>";
                                            }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="brund">
                        <button class="anime">Transactions</button>
                            
                        <div class="show"> <!--DISPLAY USERS TRANSACTIONS-->
                            <div class="flexer">
                                <h1>Transactions History</h1>
                            
                                
                                <div class="accord">
                                    <h3><?php echo "BulkSMS"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'BulkSMS' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>
                                    
                                </div>

                                <div class="accord">
                                    <h3><?php echo "Airtime"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Airtime' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>

                                </div>

                                <div class="accord">
                                    <h3><?php echo "3G Data Subscription"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = '3G Data Subscription' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>
                                </div>

                                <div class="accord">
                                    <h3><?php echo "Smile"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'Smile' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>
                                </div>

                                <div class="accord">
                                    <h3><?php echo "TV Subscription"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'TV subscription' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>
                                </div>


                                <div class="accord">
                                    <h3><?php echo "Electricity Bills"?></h3>
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
                                            $sqlresult = mysqli_query($conn,"SELECT * FROM transactions WHERE service_type = 'electricity bills' ");
                                                while($run_sqlresult = mysqli_fetch_array($sqlresult)){
                                                    $service = $run_sqlresult['service_type'];
                                                    $charges = $run_sqlresult['charges'];
                                                    $timer = $run_sqlresult['t_time'];
                                                    $dater = $run_sqlresult['t_date'];
                                                    $status = $run_sqlresult['t_status'];
                                                    echo "<tr><td>$service</td>
                                                    <td>N$charges</td>
                                                    <td>$timer</td>
                                                    <td>$dater</td>
                                                    <td>$status</td>
                                                    </tr>";
                                                }
                                        ?>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div>                    
                        <button class="anime">Analytics</button>
                        <div class="brund">
                            <button class="anime">images</button>
                            <div> <!--DISPLAY USERS IMAGES-->
                        
                            </div>
                        </div>
                    </div>

            </section>

        <h2>Footer</h2>
        <div>
            <form action="" method="post">
                <input type="text" name="f_title1" value="<?php echo "$f_h1_1"?>" id="">
                <div>
                <input type="text" name="f_icon1" value="<?php echo "$f_icons_1" ?>" id="">
                <input type="text" name="f_icon1size" value="<?php echo "$f_size_1" ?>" id="">
                </div>
                <input type="submit" name="upd_caller" value="update">
            </form>
        </div>

        <div>
        
            <h2>Social Icons</h2>
            <div>
                <form action="" method="post">
                    <input type="text" name="f_title1" value="<?php echo "$f_h1_2"?>" id="">
                    <input type="submit" name="upd_soc_1" value ="update">
                </form>
            </div>

            <div>
                <form action="" method="post">
                    <input type="text" name="f_icon1" value="<?php echo "$f_icons_2" ?>" id="">
                    <input type="text" name="f_icon1size" value="<?php echo "$f_size_2" ?>" id="">
                    
                    <input type="text" name="f_alt1" value="<?php echo "$f_alt_2" ?>" id="">
                    <input type="text" name="f_link1" value="<?php echo "$f_links_2" ?>" id="">
                    <input type="submit" name="upd_soc_1" value ="update">
                </form>
            </div>
            
            <div>
            <form action="" method="post"></form>
                <input type="text" name="f_icon1" value="<?php echo "$f_icons_3" ?>" id="">
                <input type="text" name="f_icon1size" value="<?php echo "$f_size_3" ?>" id="">

                <input type="text" name="f_alt1" value="<?php echo "$f_alt_3" ?>" id="">
                <input type="text" name="f_alt1" value="<?php echo "$f_links_3" ?>" id="">
                <input type="submit" name="upd_soc_2" value ="update">
            </div>

            <div>
            <form action="" method="post"></form>
                <input type="text" name="f_icon1" value="<?php echo "$f_icons_4" ?>" id="">
                <input type="text" name="f_icon1size" value="<?php echo "$f_size_4" ?>" id="">

                <input type="text" name="f_alt1" value="<?php echo "$f_alt_4" ?>" id="">
                <input type="text" name="f_alt1" value="<?php echo "$f_links_4" ?>" id="">
                <input type="submit" name="upd_soc_3" value ="update">
            </div>
        </div>

        <div>
            <form action="" method="post">
                <input type="text" name="f_title6" value="<?php echo "$f_h1_6"?>" id="">
                <input type="submit" name="upd_title" value="update title">
            </form>
            <div>
                <form action="" method="post">
                    <input type="text" name="f_email_link" value="<?php echo "$f_alt_6" ?>" id="">
                    <input type="text" name="f_email_text" value="<?php echo "$f_links_6" ?>" id="">
                    <input type="submit" name="upd_soc_1" value ="update">
                </form>
            </div>
            <div>
                <form action="" method="post">
                    <input type="text" name="f_message_link" value="<?php echo "$f_alt_7" ?>" id="">
                    <input type="text" name="f_message_text" value="<?php echo "$f_links_7" ?>" id="">
                    <input type="submit" name="upd_soc_1" value ="update">
                </form>
            </div>
            <div>
                <form action="" method="post">
                    <input type="text" name="f_call_link" value="<?php echo "$f_alt_8" ?>" id="">
                    <input type="text" name="f_call_text" value="<?php echo "$f_links_8" ?>" id="">
                    <input type="submit" name="upd_soc_1" value ="update">
                </form>
            </div>
        </div>

        </section>

        

    </div> <!--END OF WRAPPER-->
</body>
<style>
    .anime{
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    }
    .active, .anime:hover{
    background-color: #555;
    }

    .anime:after{
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
    }

    .active:after{
        content: "\2212";
    }

    .show{
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
    }
    /*
    .brund{
        display: flex;
    }
    .brund>*{
        flex:1;
    }
    .brund>div{
        margin-top:-30px;
    }
    */
</style>
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
        /*
        
        //alert("I work man");
        droplist[i].style.display = "block";
        btn[i].classList.add("show");
        btn[i].style.display = "block";
    
    */

    }
    
</script>
</html>