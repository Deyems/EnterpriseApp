<?php
    session_start();
?>
<?php
    if($_SESSION["logger"]){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Change Index</title>
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
                    <div class="header_area"> <!--BEGIN 1ST NTH OF TYPE-->
                        <br><br><br><br><br><br><br>
                        <?php
                            if(isset($_POST["header"])){
                                //echo "You tapped submit";
                                $menu1 = $_POST["menu1"];
                                $menu2 = $_POST["menu2"];
                                $menu3 = $_POST["menu3"];
                                $menu4 = $_POST["menu4"];
                                $menu5 = $_POST["menu5"];
                                $menu6 = $_POST["menu6"];

                                $h_text1 = $_POST["h_text1"];
                                $h_text2 = $_POST["h_text2"];


                                //DEALING WITH LOGO FILES
                                $logofile_name = $_FILES["logo"]["name"]; // Remember
                                    //print_r ($logofile_name);
                                    $logofile_type = $_FILES["logo"]["type"];
                                    $logofiletmp_name = $_FILES["logo"]["tmp_name"];
                                    $logofile_error = $_FILES["logo"]["error"];
                                    $logofile_size = $_FILES["logo"]["size"];

                                    //echo "<br>";
                                    if(!$logofile_name){
                                        echo "<span class='toerror'>You didnt upload any logo<br>";
                                    } else{
                                        $logo_split_name = explode(".",$logofile_name);
                                    
                                    // Catch the REAL NAME OF FILE
                                    $logo_name_no_ext =  $logo_split_name["0"];
                                    
                                    
                                    $allowed = array("png","jpeg","jpg","gif");
                                    // CATCH the extension of file
                                    $logo_ext_name = strtolower(end(explode(".",$logofile_name)));
                                    
                                    if(in_array($logo_ext_name,$allowed)){
                                        if($logofile_error === 0){
                                            if($logofile_size < 10000001){
                                                $targetdir = "../images/";

                                                // JOIN THE FILENAME AND THE ALLOWED EXTENSION
                                                $real_logo_name = $logo_name_no_ext. '.'.$logo_ext_name;
                                                $targetfile = $targetdir.$real_logo_name;
                                                
                                                move_uploaded_file($logofiletmp_name,$targetfile);
                                                echo "<span class='tosuccess'>file uploaded with success</span>";
                                                $sql_img = "UPDATE index_logo SET images = '$real_logo_name' where id = 1 ";
                                                if($sql_img){
                                                    $sql_img_query = mysqli_query($conn, $sql_img);
                                                    if($sql_img_query){
                                                        echo "<br>"."<span class='tosuccess'>database upload with success</span>";
                                                        echo "<script>window.location='inviting.php';</script>";
                                                    }
                                                } else{ echo "Error: ".mysqli_error($conn); }
                                                
                                            } else{ echo "<span class='toerror'>file size too large</span>"; }
                                        }   else{ echo "<span class='toerror'>Error in upload</span>"; }
                                    }   else{ echo "<span class='toerror'>file type not allowed</span>"; }
                                }

                                if($menu1){
                                    if($menu2){
                                        if($menu3){
                                            if($menu4){
                                                if($menu5){
                                                    if($menu6){
                                                        if($h_text1){
                                                            if($h_text2){
                                                                $upd_index_menu1 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu1' where id = 1 ");

                                                                $upd_index_menu2 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu2' where id = 2 ");

                                                                $upd_index_menu3 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu3' where id = 3 ");

                                                                $upd_index_menu4 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu4' where id = 4 ");

                                                                $upd_index_menu5 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu5' where id = 5 ");

                                                                $upd_index_menu6 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$menu6' where id = 6 ");

                                                                $upd_index_h_text1 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$h_text1' where id = 7 ");

                                                                $upd_index_h_text2 = mysqli_query($conn, 
                                                                "UPDATE index_nav SET tex = '$h_text2' where id = 8 ");

                                                                if(!$upd_index_menu1 && !$upd_index_menu2 && !$upd_index_menu3 && !$upd_index_menu4 && !$upd_index_menu5 && !$upd_index_menu6 && !$upd_index_h_text1 && !$upd_index_h_text2 ){
                                                                    echo "Error: ". mysqli_error($conn);
                                                                } else{ echo "<span class='tosuccess'>Database updated</span>";
                                                                    echo "<script>window.location='inviting.php';</script>";
                                                                 }

                                                            }   else{ echo "<span>head_text2 empty</span>"; }
                                                        }   else{ echo "<span>head_text1 empty</span>"; }
                                                    }   else{ echo "<span>menu6 empty</span>"; }
                                                }   else{ echo "<span>menu5 empty</span>"; }
                                            }   else{ echo "<span>menu4 empty</span>"; }
                                        }   else{ echo "<span>menu3 empty</span>"; }
                                    }   else{ echo "<span>menu2 empty</span>"; }
                                } else{ echo "<span>menu1 empty</span>"; }

                                



                            }
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="menu_logo">
                                <div>
                                    <div>
                                        <div>
                                            <p>Choose Logo</p>
                                        </div>
                                        <img src="../images/<?php echo "$img_name"; ?>" alt="<?php echo "$img_alt";?>">
                                        <input type="file" name="logo" id="">
                                        
                                    </div>
                                </div>
                                <div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav1" ; ?>" name="menu1" id="">
                                    </div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav2" ; ?>" name="menu2" id="">
                                    </div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav3" ; ?>" name="menu3" id="">
                                    </div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav4" ; ?>" name="menu4" id="">
                                    </div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav5" ; ?>" name="menu5" id="">
                                    </div>
                                    <div class="inp-grp">
                                        <input type="text" value="<?php echo "$nav6" ; ?>" name="menu6" id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input id="h_texter" type="text" value="<?php echo "$h_text1" ; ?>" name="h_text1"/>
                                </div>
                                <div>
                                    <input id="h_texter" type="text" value="<?php echo "$h_text2" ; ?>" name="h_text2"/>
                                </div>
                                <div>

                                <?php
                                    //DEALING WITH BACKGROUND FILES
                                    $bgfile_name = $_FILES["headerbg"]["name"]; // Remember
                                        //print_r ($bgfile_name);
                                        $bgfile_type = $_FILES["headerbg"]["type"];
                                        $bgfiletmp_name = $_FILES["headerbg"]["tmp_name"];
                                        $bgfile_error = $_FILES["headerbg"]["error"];
                                        $bgfile_size = $_FILES["headerbg"]["size"];

                                        //echo "<br>";
                                        if(!$bgfile_name){
                                            echo "<span class='toerror'>You didnt upload any background image<br>";
                                        } else{
                                            $bg_split_name = explode(".",$bgfile_name);
                                        
                                        // Catch the REAL NAME OF FILE
                                        $bg_name_no_ext =  $bg_split_name["0"];
                                        
                                        
                                        $allowed = array("png","jpeg","jpg","gif");
                                        // CATCH the extension of file
                                        $bg_ext_name = strtolower(end(explode(".",$bgfile_name)));
                                        
                                        if(in_array($bg_ext_name,$allowed)){
                                            if($bgfile_error === 0){
                                                if($bgfile_size < 10000001){
                                                    $bg_targetdir = "../images/";

                                                    // JOIN THE FILENAME AND THE ALLOWED EXTENSION
                                                    $real_bg_name = $bg_name_no_ext. '.'.$bg_ext_name;
                                                    $bg_targetfile = $bg_targetdir.$real_bg_name;
                                                    
                                                    move_uploaded_file($bgfiletmp_name,$bg_targetfile);
                                                    echo "<span class='tosuccess'>Background-image uploaded with success</span>";
                                                    $sql_bg_img = "UPDATE index_bg_img SET img_name = '$real_bg_name' where id = 1 ";
                                                    if($sql_bg_img){
                                                        $sql_bg_img_query = mysqli_query($conn, $sql_bg_img);
                                                        if($sql_bg_img_query){
                                                            echo "<br>"."<span class='tosuccess'>database also uploaded with success</span>";
                                                            echo "<script>window.location='inviting.php';</script>";
                                                        }
                                                    } else{ echo "Error: ".mysqli_error($conn); }
                                                    
                                                } else{ echo "<span class='toerror'>file size too large</span>"; }
                                            }   else{ echo "<span class='toerror'>Error in upload</span>"; }
                                        }   else{ echo "<span class='toerror'>file type not allowed</span>"; }
                                    }
                                ?>
                                    <p>Choose Background-image</p>  
                                    <input type="file" name="headerbg" id="">
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="header" value="update header">
                            </div>
                        </form>
                    </div> <!--END OF 1ST NTH OF TYPE-->
                    
                    <div class="offers_fonticons"> <!--BEGINNING OF 2ND NTH OF TYPE-->
                        <div>
                            <?php
                                if(isset($_POST["h_text"])){
                                    $h_u_text = $_POST["title"];
                                    $h_u_sub_text = $_POST["title_sub"];

                                    $iconname1 = $_POST["iconname1"];
                                    $iconsize1 = $_POST["iconsize1"];
                                    $service1 = $_POST["service1"];

                                    $iconname2 = $_POST["iconname2"];
                                    $iconsize2 = $_POST["iconsize2"];
                                    $service2 = $_POST["service2"];

                                    $iconname3 = $_POST["iconname3"];
                                    $iconsize3 = $_POST["iconsize3"];
                                    $service3 = $_POST["service3"];

                                    $iconname4 = $_POST["iconname4"];
                                    $iconsize4 = $_POST["iconsize4"];
                                    $service4 = $_POST["service4"];

                                    $iconname5 = $_POST["iconname5"];
                                    $iconsize5 = $_POST["iconsize5"];
                                    $service5 = $_POST["service5"];

                                    $iconname6 = $_POST["iconname6"];
                                    $iconsize6 = $_POST["iconsize6"];
                                    $service6 = $_POST["service6"];

                                    /*
                                    if(!$h_u_text && !$h_u_sub_text){
                                        echo "<span class='toerror'>Your title and Subtitle Fields are empty...</span>";
                                    }
                                    */
                                    if($h_u_text && $h_u_sub_text){
                                        if($service1 && $iconname1 && $iconsize1){
                                            if($service2 && $iconname2 && $iconsize2){
                                                if($service3 && $iconname3 && $iconsize3){
                                                    if($service4 && $iconname4 && $iconsize4){
                                                        if($service5 && $iconname5 && $iconsize5){
                                                            if($service6 && $iconname6 && $iconsize6){
                                                                
                                                                $upd_h_txt = "UPDATE `headers` SET home = '$h_u_text' where id = 1 ";
                                                                $q_upd_h_txt = mysqli_query($conn,$upd_h_txt);
                                                                if($q_upd_h_txt){
                                                                    echo "<script>alert('updated text to database');</script>";
                                                                    echo "<script>window.location = 'inviting.php';</script>";
                                                                } else { echo "Error in update". mysqli_error($conn); }


                                                                $upd_h_sub_txt = "UPDATE `headers` SET home = '$h_u_sub_text' where id = 2 ";
                                                                $q_upd_h_sub_txt = mysqli_query($conn,$upd_h_sub_txt);
                                                                if($q_upd_h_sub_txt){
                                                                    echo "<script>alert('updated sub_text to database');</script>";
                                                                    echo "<script>window.location = 'inviting.php';</script>";
                                                                } else { echo "Error in update". mysqli_error($conn); }



                                                                $upd_service1 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service1' where id = 1 ");
                                                                $upd_iconname1 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname1' where id = 1 ");
                                                                $upd_iconsize1 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize1' where id = 1 ");

                                                                $upd_service2 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service2' where id = 2 ");
                                                                $upd_iconname2 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname2' where id = 2 ");
                                                                $upd_iconsize2 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize2' where id = 2 ");

                                                                $upd_service3 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service3' where id = 3 ");
                                                                $upd_iconname3 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname3' where id = 3 ");
                                                                $upd_iconsize3 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize3' where id = 3 ");

                                                                $upd_service4 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service4' where id = 4 ");
                                                                $upd_iconname4 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname4' where id = 4 ");
                                                                $upd_iconsize4 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize4' where id = 4 ");

                                                                $upd_service5 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service5' where id = 5 ");
                                                                $upd_iconname5 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname5' where id = 5 ");
                                                                $upd_iconsize5 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize5' where id = 5 ");

                                                                $upd_service6 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET services = '$service6' where id = 6 ");
                                                                $upd_iconname6 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET icons = '$iconname6' where id = 6 ");
                                                                $upd_iconsize6 = mysqli_query($conn, 
                                                                "UPDATE dashboard SET size = '$iconsize6' where id = 6 ");

                                                                if($upd_service6 && $upd_iconname6 && $upd_iconsize6 ){
                                                                    if($upd_service5 && $upd_iconname5 && $upd_iconsize5 ){
                                                                        if($upd_service4 && $upd_iconname4 && $upd_iconsize4 ){
                                                                            if($upd_service3 && $upd_iconname3 && $upd_iconsize3 ){
                                                                                if($upd_service2 && $upd_iconname2 && $upd_iconsize2 ){
                                                                                    if($upd_service1 && $upd_iconname1 && $upd_iconsize1 ){
                                                                                        echo "<script>alert('updated all details to database');</script>";
                                                                                        echo "<script>window.location = 'inviting.php';</script>";
                                                                                    } else { echo "Error in update1". mysqli_error($conn); }
                                                                                } else { echo "Error in update2". mysqli_error($conn); }
                                                                            } else { echo "Error in update3". mysqli_error($conn); }
                                                                        } else { echo "Error in update4". mysqli_error($conn); }
                                                                    } else { echo "Error in update5". mysqli_error($conn); }
                                                                } else { echo "Error in update6". mysqli_error($conn); }

                                                            } else{ echo "<span class='toerror'>Your 6th Service, iconname and iconsize Fields are empty...</span>"; }
                                                        }   else{ echo "<span class='toerror'>Your 5th Service, iconname and iconsize Fields are empty...</span>"; }
                                                    }   else{ echo "<span class='toerror'>Your 4th Service, iconname and iconsize Fields are empty...</span>"; }
                                                }   else{ echo "<span class='toerror'>Your 3rd Service, iconname and iconsize Fields are empty...</span>"; }
                                            }   else{ echo "<span class='toerror'>Your 2nd Service, iconname and iconsize Fields are empty...</span>"; }
                                        }   else{ echo "<span class='toerror'>Your 1st Service, iconname and iconsize Fields are empty...</span>"; }
                                    } else{ echo "<span class='toerror'>Your title and Subtitle Fields are empty...</span>"; }
                                }
                            ?>
                            <div>
                                <form action="" method="post">
                                    
                                    <div> 
                                        <input type="text" name="title" value="<?php echo "$home" ; ?>" id="">
                                    </div>
                                    <div>
                                        <input type="text" name="title_sub" value="<?php echo "$sub_home"; ?>" id="">
                                    </div>
                                    <div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_1"?> <?php echo "$d_size_1"?>"></i></div>
                                            <div>
                                                <input type="text" name="service1" value="<?php echo "$d_services_1"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname1" value="<?php echo "$d_icons_1"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize1" value="<?php echo "$d_size_1"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_2"?> <?php echo "$d_size_2"?>"></i></div>
                                            <div>
                                                <input type="text" name="service2" value="<?php echo "$d_services_2"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname2" value="<?php echo "$d_icons_2"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize2" value="<?php echo "$d_size_2"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_4"?> <?php echo "$d_size_4"?>"></i></div>
                                            <div>
                                                <input type="text" name="service4" value="<?php echo "$d_services_4"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname4" value="<?php echo "$d_icons_4"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize4" value="<?php echo "$d_size_4"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_3"?> <?php echo "$d_size_3"?>"></i></div>
                                            <div>
                                                <input type="text" name="service3" value="<?php echo "$d_services_3"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname3" value="<?php echo "$d_icons_3"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize3" value="<?php echo "$d_size_3"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_5"?> <?php echo "$d_size_5"?>"></i></div>
                                            <div>
                                                <input type="text" name="service5" value="<?php echo "$d_services_5"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname5" value="<?php echo "$d_icons_5"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize5" value="<?php echo "$d_size_5"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show_service">
                                            <div><i class="<?php echo "$d_icons_6"?> <?php echo "$d_size_6"?>"></i></div>
                                            <div>
                                                <input type="text" name="service6" value="<?php echo "$d_services_6"; ?>" id="">
                                            </div>
                                            <div>
                                                <div>
                                                    <input type="text" name="iconname6" value="<?php echo "$d_icons_6"; ?>" id="">
                                                </div>
                                                <div>
                                                    <input type="text" name="iconsize6" value="<?php echo "$d_size_6"; ?>" id="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="submit" name="h_text" value="Update Services">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!--END OF 2ND NTH OF TYPE-->

                    <div class="service_desc"> <!--begin 3RD NTH OF TYPE-->
                        <form action="" method="post">
                            <?php
                                if(isset($_POST["serv_desc"])){
                                    
                                    $desc_titles_1 = chk($_POST["off_titles_1"]);
                                    $desc_notes_1 = chk($_POST["off_notes_1"]);
                                    $desc_reg_link_1 = chk($_POST["off_reg_link_1"]);

                                    $desc_titles_2 = chk($_POST["off_titles_2"]);
                                    $desc_notes_2 = chk($_POST["off_notes_2"]);
                                    $desc_reg_link_2 = chk($_POST["off_reg_link_2"]);

                                    $desc_titles_3 = chk($_POST["off_titles_3"]);
                                    $desc_notes_3 = chk($_POST["off_notes_3"]);
                                    $desc_reg_link_3 = chk($_POST["off_reg_link_3"]);

                                    $desc_titles_4 = chk($_POST["off_titles_4"]);
                                    $desc_notes_4 = chk($_POST["off_notes_4"]);
                                    $desc_reg_link_4 = chk($_POST["off_reg_link_4"]);

                                    $desc_titles_5 = chk($_POST["off_titles_5"]);
                                    $desc_notes_5 = chk($_POST["off_notes_5"]);
                                    $desc_reg_link_5 = chk($_POST["off_reg_link_5"]);

                                    $desc_titles_6 = chk($_POST["off_titles_6"]);
                                    $desc_notes_6 = chk($_POST["off_notes_6"]);
                                    $desc_reg_link_6 = chk($_POST["off_reg_link_6"]);

                                    if($desc_notes_1 && $desc_titles_1 && $desc_reg_link_1){
                                        if($desc_notes_2 && $desc_titles_2 && $desc_reg_link_2){
                                            if($desc_notes_3 && $desc_titles_3 && $desc_reg_link_3){
                                                if($desc_notes_4 && $desc_titles_4 && $desc_reg_link_4){
                                                    if($desc_notes_5 && $desc_titles_5 && $desc_reg_link_5){
                                                        if($desc_notes_6 && $desc_titles_6 && $desc_reg_link_6){

                                                            $upd_desc_notes_1 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_1' where id = 1 ");
                                                            $upd_desc_titles_1 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_1' where id = 1 ");
                                                            $upd_desc_reg_link_1 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_1' where id = 1 ");

                                                            $upd_desc_notes_2 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_2' where id = 2 ");
                                                            $upd_desc_titles_2 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_2' where id = 2 ");
                                                            $upd_desc_reg_link_2 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_2' where id = 2 ");

                                                            $upd_desc_notes_3 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_3' where id = 3 ");
                                                            $upd_desc_titles_3 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_3' where id = 3 ");
                                                            $upd_desc_reg_link_3 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_3' where id = 3 ");

                                                            $upd_desc_notes_4 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_4' where id = 4 ");
                                                            $upd_desc_titles_4 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_4' where id = 4 ");
                                                            $upd_desc_reg_link_4 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_4' where id = 4 ");

                                                            $upd_desc_notes_5 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_5' where id = 5 ");
                                                            $upd_desc_titles_5 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_5' where id = 5 ");
                                                            $upd_desc_reg_link_5 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_5' where id = 5 ");

                                                            $upd_desc_notes_6 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET notes = '$desc_notes_6' where id = 6 ");
                                                            $upd_desc_titles_6 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET title = '$desc_titles_6' where id = 6 ");
                                                            $upd_desc_reg_link_6 = mysqli_query($conn, 
                                                            "UPDATE index_offers SET reg_link = '$desc_reg_link_6' where id = 6 ");


                                                            if($upd_desc_notes_6 && $upd_desc_titles_6 && $upd_desc_reg_link_6 ){
                                                                if($upd_desc_notes_5 && $upd_desc_titles_5 && $upd_desc_reg_link_5 ){
                                                                    if($upd_desc_notes_4 && $upd_desc_titles_4 && $upd_desc_reg_link_4 ){
                                                                        if($upd_desc_notes_3 && $upd_desc_titles_3 && $upd_desc_reg_link_3 ){
                                                                            if($upd_desc_notes_2 && $upd_desc_titles_2 && $upd_desc_reg_link_2 ){
                                                                                if($upd_desc_notes_1 && $upd_desc_titles_1 && $upd_desc_reg_link_1 ){
                                                                                    echo "<script>alert('updated all details to database');</script>";
                                                                                    echo "<script>window.location = 'inviting.php';</script>";
                                                                                } else { echo "Error in update1". mysqli_error($conn); }
                                                                            } else { echo "Error in update2". mysqli_error($conn); }
                                                                        } else { echo "Error in update3". mysqli_error($conn); }
                                                                    } else { echo "Error in update4". mysqli_error($conn); }
                                                                } else { echo "Error in update5". mysqli_error($conn); }
                                                            } else { echo "Error in update6". mysqli_error($conn); }


                                                        }   else{ echo "<span class ='toerror'> First description empty </span> "; }
                                                    }   else{ echo "<span class ='toerror'> Second description empty </span> "; }
                                                }   else{ echo "<span class ='toerror'> Third description empty </span> "; }
                                            }   else{ echo "<span class ='toerror'> Fourth description empty </span> "; }
                                        }   else{ echo "<span class ='toerror'> Fifth description empty </span> "; }
                                    }   else{ echo "<span class ='toerror'> Sixth description empty </span> "; }

                                }
                                ?>
                            <div>
                                <div>
                                    <div>
                                        <input type="text" name="off_titles_1" value="<?php echo "$off_titles_1"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_1" id=""><?php echo "$off_notes_1" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_1" value="<?php echo "$off_reg_link_1"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input type="text" name="off_titles_2" value="<?php echo "$off_titles_2"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_2" id=""><?php echo "$off_notes_2" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_2" value="<?php echo "$off_reg_link_2"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input type="text" name="off_titles_3" value="<?php echo "$off_titles_3"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_3" id=""><?php echo "$off_notes_3" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_3" value="<?php echo "$off_reg_link_3"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input type="text" name="off_titles_4" value="<?php echo "$off_titles_4"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_4" id=""><?php echo "$off_notes_4" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_4" value="<?php echo "$off_reg_link_4"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input type="text" name="off_titles_5" value="<?php echo "$off_titles_5"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_5" id=""><?php echo "$off_notes_5" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_5" value="<?php echo "$off_reg_link_5"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <input type="text" name="off_titles_6" value="<?php echo "$off_titles_6"; ?>" id="">
                                    </div>
                                    <div>
                                        <textarea name="off_notes_6" id=""><?php echo "$off_notes_6" ?></textarea>
                                    </div>
                                    <div>
                                        <input type="text" name="off_reg_link_6" value="<?php echo "$off_reg_link_6"; ?>" id="" class="serv_inp">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="serv_desc" value="Service Description">
                            </div>
                        </form>
                    </div> <!--END OF 3RD NTH OF TYPE-->

                    <div class="rollnum"> <!--BEGIN 4TH NTH OF TYPE-->
                        <form action="" method="post">
                        <?php
                            if(isset($_POST["counters"])){
                                $t_roll1 = chk($_POST["t_roll1"]);
                                $c_num1 = chk($_POST["c_num1"]);
                                $t_roll2 = chk($_POST["t_roll2"]);
                                $c_num2 = chk($_POST["c_num2"]);
                                $t_roll3 = chk($_POST["t_roll3"]);
                                $c_num3 = chk($_POST["c_num3"]);
                                if($t_roll1 && $c_num1){
                                    if($t_roll2 && $c_num2){
                                        if($t_roll3 && $c_num3){

                                            $upd_t_roll1 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET title = '$upd_t_roll1' where id = 1 ");
                                            $upd_c_num1 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET number = '$upd_c_num1' where id = 1 ");

                                            $upd_t_roll2 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET title = '$upd_t_roll2' where id = 2 ");
                                            $upd_c_num2 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET number = '$upd_c_num2' where id = 2 ");

                                            $upd_t_roll3 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET title = '$upd_t_roll3' where id = 3 ");
                                            $upd_c_num3 = mysqli_query($conn, 
                                            "UPDATE index_rollers SET number = '$upd_c_num3' where id = 3 ");

                                            if($upd_t_roll1 && $upd_c_num1){
                                                if($upd_t_roll2 && $upd_c_num2){
                                                    if($upd_t_roll3 && $upd_c_num3){
                                                        echo "<script>alert('updated all details to database');</script>";
                                                        echo "<script>window.location = 'inviting.php';</script>";
                                                    } else { echo "Error in update third column". mysqli_error($conn); }
                                                } else { echo "Error in update second column". mysqli_error($conn); }
                                            } else { echo "Error in update first column". mysqli_error($conn); }
                                                            

                                        }   else{ echo "<span class ='toerror'> First Column empty </span> "; }

                                    }   else{ echo "<span class ='toerror'> Second Column empty </span> "; }
                                } else{ echo "<span class ='toerror'> Third Column empty </span> "; }
                            }// END OF ISSET FXN
                        ?>
                            <div>
                                <div>
                                    <div>
                                        <input type="text" name="t_roll1" value="<?php echo "$r_tit1"; ?>"  id="">
                                    </div>
                                    <div>
                                        <input type="text" name="c_num1" value="<?php echo "$r_Num1"; ?>"  id="">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <input type="text" name="t_roll2" value="<?php echo "$r_tit2"; ?>"  id="">
                                    </div>
                                    <div>
                                        <input type="text" name="c_num2" value="<?php echo "$r_Num2"; ?>"  id="">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <input type="text" name="t_roll3" value="<?php echo "$r_tit3"; ?>"  id="">
                                    </div>
                                    <div>
                                        <input type="text" name="c_num3" value="<?php echo "$r_Num3"; ?>"  id="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="counters" value="update">
                            </div>
                        </form>
                    </div> <!--END OF 4th NTH OF TYPE-->

                    <div class="footer"> <!--BEGIN OF 5th NTH OF TYPE-->
                            <h1>Footer</h1>
                            <?php
                                if(isset($_POST["footer"])){
                                    $flex1_t = chk($_POST["flex1_t"]);
                                    $flex1_tex1 = chk($_POST["flex1_tex1"]);
                                    $flex1_link1 = chk($_POST["flex1_link1"]);

                                    $flex1_tex2 = chk($_POST["flex1_tex2"]);
                                    $flex1_link2 = chk($_POST["flex1_link2"]);

                                    $flex1_tex3 = chk($_POST["flex1_tex3"]);
                                    $flex1_link3 = chk($_POST["flex1_link3"]);

                                    $flex1_tex4 = chk($_POST["flex1_tex4"]);
                                    $flex1_link4 = chk($_POST["flex1_link4"]);

                                    $flex2_tex1 = chk($_POST["flex2_tex1"]);

                                    $flex3_icon_name1 = chk($_POST["flex3_icon_name1"]);
                                    $flex3_icon_size1 = chk($_POST["flex3_icon_size1"]);

                                    $flex3_icon_name2 = chk($_POST["flex3_icon_name2"]);
                                    $flex3_icon_size2 = chk($_POST["flex3_icon_size2"]);

                                    $flex3_icon_name3 = chk($_POST["flex3_icon_name3"]);
                                    $flex3_icon_size3 = chk($_POST["flex3_icon_size3"]);

                                    $flex3_icon_name4 = chk($_POST["flex3_icon_name4"]);
                                    $flex3_icon_size4 = chk($_POST["flex3_icon_size4"]);

                                    $footer_right = chk($_POST["footer_right"]);

                                    if($flex1_t){
                                        if($flex1_tex1 && $flex1_link1){
                                            if($flex1_tex2 && $flex1_link2){
                                                if($flex1_tex3 && $flex1_link3){
                                                    if($flex1_tex4 && $flex1_link4){
                                                        if($flex2_tex1){
                                                            if($flex3_icon_name1 && $flex3_icon_size1){
                                                                if($flex3_icon_name2 && $flex3_icon_size2){
                                                                    if($flex3_icon_name3 && $flex3_icon_size3){
                                                                        if($flex3_icon_name4 && $flex3_icon_size4){
                                                                            if($footer_right){

                                                                                $upd_flex1_t = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET title = '$flex1_t' where id = 1 ");
                                                                                
                                                                                $upd_flex1_tex1 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET texter = '$flex1_tex1' where id = 1 ");
                                                                                $upd_flex1_link1 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET link = '$flex1_link1' where id = 1 ");

                                                                                $upd_flex1_tex2 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET texter = '$flex1_tex2' where id = 2 ");
                                                                                $upd_flex1_link2 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET link = '$flex1_link2' where id = 2 ");

                                                                                $upd_flex1_tex3 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET texter = '$flex1_tex3' where id = 3 ");
                                                                                $upd_flex1_link3 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET link = '$flex1_link3' where id = 3 ");

                                                                                $upd_flex1_tex4 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET texter = '$flex1_tex4' where id = 4 ");
                                                                                $upd_flex1_link4 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex1 SET link = '$flex1_link4' where id = 4 ");

                                                                                $upd_flex2_tex1 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_flex2 SET heading = '$flex2_tex1' where id = 1 ");

                                                                                $upd_flex3_icon_name1 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_type = '$flex3_icon_name1' where id = 1 ");
                                                                                $upd_flex3_icon_size1 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_size = '$flex3_icon_size1' where id = 1 ");

                                                                                $upd_flex3_icon_name2 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_type = '$flex3_icon_name2' where id = 2 ");
                                                                                $upd_flex3_icon_size2 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_size = '$flex3_icon_size2' where id = 2 ");

                                                                                $upd_flex3_icon_name3 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_type = '$flex3_icon_name3' where id = 3 ");
                                                                                $upd_flex3_icon_size3 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_size = '$flex3_icon_size3' where id = 3 ");

                                                                                $upd_flex3_icon_name4 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_type = '$flex3_icon_name4' where id = 4 ");
                                                                                $upd_flex3_icon_size4 = mysqli_query($conn, 
                                                                                "UPDATE index_footer_social SET icon_size = '$flex3_icon_size4' where id = 4 ");

                                                                                $upd_footer_copyright = mysqli_query($conn, 
                                                                                "UPDATE index_footer_right SET content = '$footer_right' where id = 1 ");

                                                                                if($upd_flex1_t){
                                                                                    if($upd_flex1_tex1 && $upd_flex1_link1){
                                                                                        if($upd_flex1_tex2 && $upd_flex1_link2){
                                                                                            if($upd_flex1_tex3 && $upd_flex1_link3){
                                                                                                if($upd_flex1_tex4 && $upd_flex1_link4){
                                                                                                    if($upd_flex3_icon_name1 && $upd_flex3_icon_size1){
                                                                                                        if($upd_flex3_icon_name2 && $upd_flex3_icon_size2){
                                                                                                            if($upd_flex3_icon_name3 && $upd_flex3_icon_size3){
                                                                                                                if($upd_flex3_icon_name4 && $upd_flex3_icon_size4){
                                                                                                                    if($upd_flex2_tex1){
                                                                                                                        echo "<script>alert('updated all details to database');</script>";
                                                                                                                        echo "<script>window.location = 'inviting.php';</script>";
                                                                                                                    }
                                                                                        
                                                                                                                } else { echo "Error in update flex3 icon4 and size4". mysqli_error($conn); }
                                                                                        
                                                                                                            } else { echo "Error in update flex3 icon3 and size3". mysqli_error($conn); }
                                                                                        
                                                                                                        } else { echo "Error in update flex3 icon2 and size2". mysqli_error($conn); }
                                                                                        
                                                                                                    } else { echo "Error in update flex3 icon1 and size1". mysqli_error($conn); }
                                                                                        
                                                                                                } else { echo "Error in update flex1 Text4 and link4". mysqli_error($conn); }
                                                                                        
                                                                                            } else { echo "Error in update flex1 Text3 and link3". mysqli_error($conn); }
                                                                                        
                                                                                        } else { echo "Error in update flex1 Text2 and link2". mysqli_error($conn); }

                                                                                    } else { echo "Error in update flex1 Text1 and link1". mysqli_error($conn); }

                                                                                } else { echo "Error in update flex1 title". mysqli_error($conn); }

                                                                            } else{ echo "<span class ='toerror'> Copyright update empty </span> "; }

                                                                        } else{ echo "<span class ='toerror'> FLEX3 icon4 and its size empty </span> "; }

                                                                    } else{ echo "<span class ='toerror'> FLEX3 icon3 and its size empty </span> "; }

                                                                } else{ echo "<span class ='toerror'> FLEX3 icon2 and its size empty </span> "; }

                                                            } else{ echo "<span class ='toerror'> FLEX3 icon1 and its size empty </span> "; }

                                                        } else{ echo "<span class ='toerror'> FLEX2 title empty </span> "; }

                                                    } else{ echo "<span class ='toerror'> FLEX1 text4 and link4 empty </span> "; }

                                                } else{ echo "<span class ='toerror'> FLEX1 text3 and link3 empty </span> "; }

                                            } else{ echo "<span class ='toerror'> FLEX1 text2 and link2 empty </span> "; }
                                        } else{ echo "<span class ='toerror'> FLEX1 text1 and link1 empty </span> "; }

                                    } else{ echo "<span class ='toerror'> FLEX1 title empty </span> "; }


                                }
                            ?>
                        <form action="" method="post">
                            <div>
                                <div> <!--FOOTER FLEX ONE 1ST NTH OF TYPE-->
                                <h1><br></h1>
                                    <div>
                                        
                                        <input type="text" name="flex1_t" value="<?php echo "$fl_title1"; ?>" id="">
                                    </div>
                                    <div class="linktext"> <!--container for footer links-->
                                        <div>
                                            <div>
                                                <input type="text" name="flex1_tex1" value="<?php echo "$fl_text1"; ?>" id="">
                                            </div>
                                            <div>
                                                <input type="text" name="flex1_link1" value="<?php echo "$fl_link1"; ?>" id="">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <input type="text" name="flex1_tex2" value="<?php echo "$fl_text2"; ?>" id="">
                                            </div>
                                            <div>
                                                <input type="text" name="flex1_link2" value="<?php echo "$fl_link2"; ?>" id="">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <input type="text" name="flex1_tex3" value="<?php echo "$fl_text3"; ?>" id="">
                                            </div>
                                            <div>
                                                <input type="text" name="flex1_link3" value="<?php echo "$fl_link3"; ?>" id="">
                                            </div>
                                        </div>

                                        <div>
                                            <div>
                                                <input type="text" name="flex1_tex4" value="<?php echo "$fl_text4"; ?>" id="">
                                            </div>
                                            <div>
                                                <input type="text" name="flex1_link4" value="<?php echo "$fl_link4"; ?>" id="">
                                            </div>
                                        </div>
                                    </div> <!--END OF linktext class-->
                                </div> <!--END OF FLEX 1 ON FOOTER-->

                                <div> <!--FOOTER FLEX TWO 2ND NTH OF TYPE-->
                                <h1><br></h1>
                                    <div>
                                        <input type="text" name="flex2_tex1" value="<?php echo "$fl_col2_text"; ?>" id="">
                                    </div>
                                    <div>
                                        <img src="../images/<?php echo "$img_name"; ?>" alt="weblogo">
                                    </div>
                                </div>

                                <div class="soc_icons">
                                    <span>Icon Name&nbsp;&nbsp;&nbsp;</span><span>icon Size</span>
                                    <div>
                                        <div>
                                            <input type="text" name="flex3_icon_name1" value="<?php echo "$fl_col3_icon1"; ?>" id="">
                                        </div>
                                        <div>
                                            <input type="text" name="flex3_icon_size1" value="<?php echo "$fl_col3_size1"; ?>" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <input type="text" name="flex3_icon_name2" value="<?php echo "$fl_col3_icon2"; ?>" id="">
                                        </div>
                                        <div>
                                            <input type="text" name="flex3_icon_size2" value="<?php echo "$fl_col3_size2"; ?>" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <input type="text" name="flex3_icon_name3" value="<?php echo "$fl_col3_icon3"; ?>" id="">
                                        </div>
                                        <div>
                                            <input type="text" name="flex3_icon_size3" value="<?php echo "$fl_col3_size3"; ?>" id="">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <input type="text" name="flex3_icon_name4" value="<?php echo "$fl_col3_icon4"; ?>" id="">
                                        </div>
                                        <div>
                                            <input type="text" name="flex3_icon_size4" value="<?php echo "$fl_col3_size4"; ?>" id="">
                                        </div>
                                    </div>
                                </div> <!--END OF FLEX 3 ON FOOTER-->
                            </div>

                            <div>
                                <div>
                                    <input type="text" name="footer_right" value="<?php echo "$fl_copy_text"; ?>" id="">
                                </div>
                            </div>

                            <div>
                                <div><input type="submit" name="footer" value="Update footer"></div>
                            </div>
                        </form>
                    </div> <!--END OF 5th NTH OF TYPE-->

                </div> <!--END OF MAIN CON-->
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