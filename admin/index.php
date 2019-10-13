<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <?php
    if($_SESSION["logger"]){
    
    ?>
    <head>
        <title>Admin Interface</title>
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
                        <h1>Userboard Control</h1>
                    </div>
                    
                    <div class="menu_head">
                        <div>
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
                                            echo "<script>alert('updated text to database');</script>";
                                            echo "<script>window.location = 'index.php';</script>";
                                        } else { echo "Error in update". mysqli_error($conn); }
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <input type="text" name="headertext1" id="header_text" value="<?php echo "$home" ?>">
                            <input type="submit" name="h_text" value="update">
                        </form>
                        </div>
                    </div>

                    <div>
                        <table>
                            <tr>
                                <th>Output</th>
                                <th>Service</th>
                                <th>Title link</th>
                                <th>Icon name</th>
                                <th>Size</th>
                                <th>Settings</th>
                            </tr>
                            <form action="" method="post" class="form-inp">
                            <tr>
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
                                                echo "<script>alert('1st records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>

                                <td> <i class="<?php echo "$d_icons_1"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype1" id="" value="<?php echo "$d_services_1" ?>"> </td>
                                <td> <input type="text" name="servicelink1" id="" value="<?php echo "$d_alt_1" ?>"> </td>
                                <td> <input type="text" name="fontawesometype1" id="" value="<?php echo "$d_icons_1" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize1" id="" value="<?php echo "$d_size_1" ?>"> </td>
                                <td class="flexer"> 
                                    <input type="submit" name="service1" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                            <form action="" method="post">
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
                                                echo "<script>alert('2nd row records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                            <tr>
                                <td> <i class="<?php echo "$d_icons_2"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype2" id="" value="<?php echo "$d_services_2" ?>"> </td>
                                <td> <input type="text" name="servicelink2" id="" value="<?php echo "$d_alt_2" ?>"> </td>
                                <td> <input type="text" name="fontawesometype2" id="" value="<?php echo "$d_icons_2" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize2" id="" value="<?php echo "$d_size_2" ?>"> </td>
                                <td class="flexer"> 
                                    <input type="submit" name="service2" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                            <form action="" method="post">
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
                                                echo "<script>alert('3rd records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                            <tr>
                                <td> <i class="<?php echo "$d_icons_3"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype3" id="" value="<?php echo "$d_services_3" ?>"> </td>
                                <td> <input type="text" name="servicelink3" id="" value="<?php echo "$d_alt_3" ?>"> </td>
                                <td> <input type="text" name="fontawesometype3" id="" value="<?php echo "$d_icons_3" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize3" id="" value="<?php echo "$d_size_3" ?>"> </td>
                                <td class="flexer"> 
                                    <input type="submit" name="service3" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                            <form action="" method="post">
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
                                                echo "<script>alert('4th records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                            <tr>
                                <td> <i class="<?php echo "$d_icons_4"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype4" id="" value="<?php echo "$d_services_4" ?>"> </td>
                                <td> <input type="text" name="servicelink4" id="" value="<?php echo "$d_alt_4" ?>"> </td>
                                <td> <input type="text" name="fontawesometype4" id="" value="<?php echo "$d_icons_4" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize4" id="" value="<?php echo "$d_size_4" ?>"> </td>
                                <td class="flexer"> 
                                    <input type="submit" name="service4" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                            <form action="" method="post">
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
                                                echo "<script>alert('5th records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                            <tr>
                                <td> <i class="<?php echo "$d_icons_5"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype5" id="" value="<?php echo "$d_services_5" ?>"> </td>
                                <td> <input type="text" name="servicelink5" id="" value="<?php echo "$d_alt_5" ?>"> </td>
                                <td> <input type="text" name="fontawesometype5" id="" value="<?php echo "$d_icons_5" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize5" id="" value="<?php echo "$d_size_5" ?>"> </td>
                                <td class="flexer">
                                    <input type="submit" name="service5" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                            <form action="" method="post">
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
                                                echo "<script>alert('6th records updated successfully');</script>";
                                                echo "<script>window.location = 'index.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                            <tr>
                                <td> <i class="<?php echo "$d_icons_6"." fa-2x"; ?>"></i> </td>
                                <td> <input type="text" name="servicetype6" id="" value="<?php echo "$d_services_6" ?>"> </td>
                                <td> <input type="text" name="servicelink6" id="" value="<?php echo "$d_alt_6" ?>"> </td>
                                <td> <input type="text" name="fontawesometype6" id="" value="<?php echo "$d_icons_6" ?>"> </td>
                                <td> <input type="text" name="fontawesomesize6" id="" value="<?php echo "$d_size_6" ?>"> </td>
                                <td class="flexer"> 
                                    <input type="submit" name="service6" id="" value="<?php echo "upd" ?>">
                                    <input type="submit" name="" id="" value="<?php echo "Del" ?>">
                                </td>
                            </tr>
                            </form>

                        </table>
                    </div>
                </div>
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