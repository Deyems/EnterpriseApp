<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
    if($_SESSION["logger"]){   
?>
    <head>
        <title>Userpage-Footer</title>
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
                        <h1>Footer Settings</h1>
                    </div>
                
                    <div>
                        <table>
                            <caption>Flex One</caption>
                            <tr>
                                <th>Title</th>
                                <th>Visual</th>
                                <th>icon-type</th>
                                <th>icon-size</th>
                                <th>Settings</th>
                            </tr>
                            <form action="" method="post">
                                <tr>
                                    <?php
                                        if(isset($_POST["updflex1"])){
                                            $f_title1 = $_POST["f_title1"];
                                            $fontawesometype1 = $_POST["fontawesometype1"];
                                            $fontawesomesize1 = $_POST["fontawesomesize1"];
                                            
                                            if(!$f_title1 && !$fontawesometype1 && !$fontawesomesize1){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($f_title1 && $fontawesometype1 && $fontawesomesize1){
                                                $f_title1_upd1 = "UPDATE `footer` SET h1 = '$f_title1' WHERE id = 1 ";
                                                $f_awe_t_upd1 = "UPDATE `footer` SET icons = '$fontawesometype1' WHERE id = 1 ";
                                                $f_awe_s_upd1 = "UPDATE `footer` SET size = '$fontawesomesize1' WHERE id = 1 ";
                                                
                                                $result_s_t_1 = mysqli_query($conn, $f_title1_upd1);
                                                $result_f_type_1 = mysqli_query($conn, $f_awe_t_upd1);
                                                $result_f_size_1 = mysqli_query($conn, $f_awe_s_upd1);
                                                
                                                if($result_s_t_1 && $result_f_type_1 && $result_f_size_1){
                                                    echo "<p>Flex1 records updated successfully</p>";
                                                    echo "<script>window.location = 'adminfooter.php';</script>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                    <td> <i class="<?php echo "$f_icons_1"." fa-2x"; ?>"></i> </td>
                                    <td> <input type="text" name="f_title1" id="" value="<?php echo "$f_h1_1" ?>"> </td>
                                    <td> <input type="text" name="fontawesometype1" id="" value="<?php echo "$f_icons_1" ?>"> </td>
                                    <td> <input type="text" name="fontawesomesize1" id="" value="<?php echo "$f_size_1" ?>"> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex1" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex1" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        </table>

                        <table>
                            <caption>Flex Two</caption>
                            <tr>
                                <th>Visual</th>
                                <th>Description</th>
                                <th>links</th>
                                <th>Settings</th>
                            </tr>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["updflex2_h"])){
                                        $f_title2_h = $_POST["f_title2_h"];

                                        if(!$f_title2_h ){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($f_title2_h){
                                            $f_title2_h_upd2 = "UPDATE `footer` SET h1 = '$f_title2_h' WHERE id = 2 ";
                                            
                                            $result_s_t_2 = mysqli_query($conn, $f_title2_h_upd2);
                                            
                                            if($result_s_t_2){
                                                echo "<p>Flex2 header records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td>title</td>
                                    <td> <input type="text" name="f_title2_h" id="" value="<?php echo "$f_h1_2" ?>"> </td>
                                    
                                    <td></td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex2_h" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_h" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post"> <!--ROW 2 FLEX 2-->
                                <?php
                                    if(isset($_POST["updflex2_r2"])){
                                        $f_title2_r2 = $_POST["f_title2_r2"];
                                        $flex2_r2_link1 = $_POST["flex2_r2_link1"];
                                        
                                        
                                        if(!$f_title2_r2 && !$flex2_r2_link1){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($f_title2_r2 && $flex2_r2_link1){
                                            $f_title2_r2_upd2 = "UPDATE `footer` SET links = '$f_title2_r2' WHERE id = 2 ";
                                            $f_awe_t_upd2 = "UPDATE `footer` SET alt = '$flex2_r2_link1' WHERE id = 2 ";
                                            
                                            $result_s_t_2 = mysqli_query($conn, $f_title2_r2_upd2);
                                            $result_f_type_2 = mysqli_query($conn, $f_awe_t_upd2);
                                            
                                            if($result_s_t_2 && $result_f_type_2){
                                                echo "<p>Flex2_r2 records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    
                                    <td> <i class="<?php echo "$f_icons_2"." fa-2x"; ?>"></i> </td>
                                    <td> <input type="text" name="f_title2_r2" id="" value="<?php echo "$f_links_2" ?>"> </td>
                                    <td> <input type="text" name="flex2_r2_link1" id="" value="<?php echo "$f_alt_2" ?>"> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex2_r2" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_r2" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post"> <!--ROW 3 FLEX 2-->
                                <?php
                                    if(isset($_POST["updflex2_r3"])){
                                        $f_title2_r3 = $_POST["f_title2_r3"];
                                        $flex2_r3_link1 = $_POST["flex2_r3_link1"];
                                        
                                        
                                        if(!$f_title2_r3 && !$flex2_r3_link1){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($f_title2_r3 && $flex2_r3_link1){
                                            $f_title2_r3_upd3 = "UPDATE `footer` SET links = '$f_title2_r3' WHERE id = 3 ";
                                            $f_awe_t_upd3 = "UPDATE `footer` SET alt = '$flex2_r3_link1' WHERE id = 3 ";
                                            
                                            $result_s_t_3 = mysqli_query($conn, $f_title2_r3_upd3);
                                            $result_f_type_3 = mysqli_query($conn, $f_awe_t_upd3);
                                            
                                            if($result_s_t_3 && $result_f_type_3){
                                                echo "<p>Flex2_r3 records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <i class="<?php echo "$f_icons_3"." fa-2x"; ?>"></i> </td>
                                    <td> <input type="text" name="f_title2_r3" id="" value="<?php echo "$f_links_3" ?>"> </td>
                                    
                                    <td> <input type="text" name="flex2_r3_link1" id="" value="<?php echo "$f_alt_3" ?>"> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex2_r3" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_r3" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post">  <!--ROW 4 FLEX 2-->
                                <?php
                                    if(isset($_POST["updflex2_r4"])){
                                        $f_title2_r4 = $_POST["f_title2_r4"];
                                        $flex4_r4_link1 = $_POST["flex4_r4_link1"];
                                        
                                        
                                        if(!$f_title2_r4 && !$flex4_r4_link1){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($f_title2_r4 && $flex4_r4_link1){
                                            $f_title2_r4_upd4 = "UPDATE `footer` SET links = '$f_title2_r4' WHERE id = 4 ";
                                            $f_awe_t_upd4 = "UPDATE `footer` SET alt = '$flex4_r4_link1' WHERE id = 4 ";
                                            
                                            $result_s_t_4 = mysqli_query($conn, $f_title2_r4_upd4);
                                            $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                            
                                            if($result_s_t_4 && $result_f_type_4){
                                                echo "<p>Flex2_r4 records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <i class="<?php echo "$f_icons_4"." fa-2x"; ?>"></i> </td>
                                    <td> <input type="text" name="f_title2_r4" id="" value="<?php echo "$f_links_4" ?>"> </td>
                                    
                                    <td> <input type="text" name="flex4_r4_link1" id="" value="<?php echo "$f_alt_4" ?>"> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex2_r4" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_r4" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>
                            
                            <form action=""  method="post">
                                <tr class ="add">
                                    <td> <i class="<?php echo "$f_icons_4"." fa-2x"; ?>"></i> </td>
                                    <td> <input type="text" name="f_title2_r5" id="" value="<?php echo "$f_links_4" ?>"> </td>
                                    
                                    <td> <input type="text" name="flex2_r5_link1" id="" value="<?php echo "$f_alt_4" ?>"> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex2_r5" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_r5" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                        </table>

                        <table>
                            <caption>Flex Two - Social Icons</caption>
                                <tr>
                                    <th>Visual</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Settings</th>
                                </tr>
                                <form action="" method="post">
                                    <?php
                                        if(isset($_POST["updflex2_r2_icon1"])){
                                            $f_icon1 = $_POST["f_icon1"];
                                            $f_icon1size = $_POST["f_icon1size"];
                                            
                                            if(!$f_icon1 && !$f_icon1size){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($f_icon1 && $f_icon1size){
                                                $f_icon1_upd4 = "UPDATE `footer` SET icons = '$f_icon1' WHERE id = 2 ";
                                                $f_awe_t_upd4 = "UPDATE `footer` SET size = '$f_icon1size' WHERE id = 2 ";
                                                
                                                $result_s_t_4 = mysqli_query($conn, $f_icon1_upd4);
                                                $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                                
                                                if($result_s_t_4 && $result_f_type_4){
                                                    echo "<p>Flex2_icon1 records updated successfully</p>";
                                                    echo "<script>window.location = 'adminfooter.php';</script>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                    <tr>
                                        <td> <i class="<?php echo "$f_icons_2"." fa-2x"; ?>"></i> </td>
                                        <td> <input type="text" name="f_icon1" value="<?php echo "$f_icons_2" ?>" id=""></td>
                                        <td><input type="text" name="f_icon1size" value="<?php echo "$f_size_2" ?>" id=""></td>
                    
                                        <td class="flexer">
                                            <div>
                                                <input type="submit" name="updflex2_r2_icon1" id="" value="<?php echo "upd" ?>">
                                                <input type="submit" name="clrflex2_r2_icon1" id="" value="<?php echo "Del" ?>">
                                            </div>
                                        </td>
                                    </tr>
                                </form>

                                <form action="" method="post">
                                    <?php
                                        if(isset($_POST["updflex2_r2_icon2"])){
                                            $f_icon2 = $_POST["f_icon2"];
                                            $f_icon2size = $_POST["f_icon2size"];
                                            
                                            if(!$f_icon2 && !$f_icon2size){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($f_icon2 && $f_icon2size){
                                                $f_icon2_upd4 = "UPDATE `footer` SET icons = '$f_icon2' WHERE id = 3 ";
                                                $f_awe_t_upd4 = "UPDATE `footer` SET size = '$f_icon2size' WHERE id = 3 ";
                                                
                                                $result_s_t_4 = mysqli_query($conn, $f_icon2_upd4);
                                                $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                                
                                                if($result_s_t_4 && $result_f_type_4){
                                                    echo "<p>Flex2_icon2 records updated successfully</p>";
                                                    echo "<script>window.location = 'adminfooter.php';</script>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                    <tr>
                                        <td> <i class="<?php echo "$f_icons_3"." fa-2x"; ?>"></i> </td>
                                        <td> <input type="text" name="f_icon2" value="<?php echo "$f_icons_3" ?>" id=""></td>
                                        <td><input type="text" name="f_icon2size" value="<?php echo "$f_size_3" ?>" id=""></td>
                    
                                        <td class="flexer">
                                            <div>
                                                <input type="submit" name="updflex2_r2_icon2" id="" value="<?php echo "upd" ?>">
                                                <input type="submit" name="clrflex2_r2_icon2" id="" value="<?php echo "Del" ?>">
                                            </div>
                                        </td>
                                    </tr>
                                </form>

                                <form action="" method="post">
                                    <?php
                                        if(isset($_POST["updflex2_r2_icon3"])){
                                            $f_icon3 = $_POST["f_icon3"];
                                            $f_icon3size = $_POST["f_icon3size"];
                                            
                                            if(!$f_icon3 && !$f_icon3size){
                                                echo "<span>your fields are empty....</span>";
                                            }
                                            if($f_icon3 && $f_icon3size){
                                                $f_icon3_upd4 = "UPDATE `footer` SET icons = '$f_icon3' WHERE id = 4 ";
                                                $f_awe_t_upd4 = "UPDATE `footer` SET size = '$f_icon3size' WHERE id = 4 ";
                                                
                                                $result_s_t_4 = mysqli_query($conn, $f_icon3_upd4);
                                                $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                                
                                                if($result_s_t_4 && $result_f_type_4){
                                                    echo "<p>Flex2_icon3 records updated successfully</p>";
                                                    echo "<script>window.location = 'adminfooter.php';</script>";
                                                } else { echo "Error in updating".mysqli_error($conn); }
                                            }

                                        }
                                    ?>
                                    <tr>
                                        <td> <i class="<?php echo "$f_icons_4"." fa-2x"; ?>"></i> </td>
                                        <td> <input type="text" name="f_icon3" value="<?php echo "$f_icons_4" ?>" id=""></td>
                                        <td><input type="text" name="f_icon3size" value="<?php echo "$f_size_4" ?>" id=""></td>
                    
                                        <td class="flexer">
                                            <div>
                                                <input type="submit" name="updflex2_r2_icon3" id="" value="<?php echo "upd" ?>">
                                                <input type="submit" name="clrflex2_r2_icon3" id="" value="<?php echo "Del" ?>">
                                            </div>
                                        </td>
                                    </tr>
                                </form>

                                <form action="" method="post">
                                    <tr class="add">
                                        <td> <i class="<?php echo "$f_icons_4"." fa-2x"; ?>"></i> </td>
                                        <td> <input type="text" name="f_icon4" value="<?php echo "$f_icons_4" ?>" id=""></td>
                                        <td><input type="text" name="f_icon4size" value="<?php echo "$f_size_4" ?>" id=""></td>
                    
                                        <td class="flexer">
                                            <div>
                                                <input type="submit" name="updflex2_r2_icon4" id="" value="<?php echo "upd" ?>">
                                                <input type="submit" name="clrflex2_r2_icon4" id="" value="<?php echo "Del" ?>">
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                                
                                
                        </table>

                        <div>
                            <span href="" class="">Add</span>
                        </div>
                            
                        <table>
                            <caption>Flex Three</caption>
                            <tr>
                                <th>links</th>
                                <th>Description</th>
                                <th>Settings</th>
                            </tr>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["updflex3_h"])){
                                        $f_title3_h = $_POST["f_title3_h"];

                                        if(!$f_title3_h ){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($f_title3_h){
                                            $f_title3_h_upd3 = "UPDATE `footer` SET h1 = '$f_title3_h' WHERE id = 6 ";
                                            
                                            $result_s_t_3 = mysqli_query($conn, $f_title3_h_upd3);
                                            
                                            if($result_s_t_3){
                                                echo "<p>Flex3 header records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <input type="text" name="f_title3_h" value="<?php echo "$f_h1_6"?>" id=""> </td>
                                    <td></td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex3_h" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex3_h" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["updflex3_r2"])){
                                        $updflex3_email_link1 = $_POST["updflex3_email_link1"];
                                        $updflex3_email_text1 = $_POST["updflex3_email_text1"];
                                        
                                        if(!$updflex3_email_link1 && !$updflex3_email_text1){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($updflex3_email_link1 && $updflex3_email_text1){
                                            $f_updflex3_email_link1 = "UPDATE `footer` SET alt = '$updflex3_email_link1' WHERE id = 6 ";
                                            $f_awe_t_upd4 = "UPDATE `footer` SET links = '$updflex3_email_text1' WHERE id = 6 ";
                                            
                                            $result_s_t_4 = mysqli_query($conn, $f_updflex3_email_link1);
                                            $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                            
                                            if($result_s_t_4 && $result_f_type_4){
                                                echo "<p>Flex3_email records updated successfully</p>";
                                                echo "<script>window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <input type="text" name="updflex3_email_link1" value="<?php echo "$f_alt_6" ?>" id=""> </td>
                                    <td> <input type="text" name="updflex3_email_text1" value="<?php echo "$f_links_6" ?>" id=""> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex3_r2" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex3_r2" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["updflex3_r3"])){
                                        $updflex3_email_link2 = $_POST["updflex3_email_link2"];
                                        $updflex3_email_text2 = $_POST["updflex3_email_text2"];
                                        
                                        if(!$updflex3_email_link2 && !$updflex3_email_text2){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($updflex3_email_link2 && $updflex3_email_text2){
                                            $f_updflex3_email_link2 = "UPDATE `footer` SET alt = '$updflex3_email_link2' WHERE id = 7 ";
                                            $f_awe_t_upd4 = "UPDATE `footer` SET links = '$updflex3_email_text2' WHERE id = 7 ";
                                            
                                            $result_s_t_4 = mysqli_query($conn, $f_updflex3_email_link2);
                                            $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                            
                                            if($result_s_t_4 && $result_f_type_4){
                                                echo "<script>alert('Flex3_message records updated successfully');
                                                        window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <input type="text" name="updflex3_email_link2" value="<?php echo "$f_alt_7" ?>" id=""> </td>
                                    <td> <input type="text" name="updflex3_email_text2" value="<?php echo "$f_links_7" ?>" id=""> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex3_r3" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex3_r3" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                            <form action="" method="post">
                                <?php
                                    if(isset($_POST["updflex3_r4"])){
                                        $updflex3_email_link3 = $_POST["updflex3_email_link3"];
                                        $updflex3_email_text3 = $_POST["updflex3_email_text3"];
                                        
                                        if(!$updflex3_email_link3 && !$updflex3_email_text3){
                                            echo "<span>your fields are empty....</span>";
                                        }
                                        if($updflex3_email_link3 && $updflex3_email_text3){
                                            $f_updflex3_email_link3 = "UPDATE `footer` SET alt = '$updflex3_email_link3' WHERE id = 8 ";
                                            $f_awe_t_upd4 = "UPDATE `footer` SET links = '$updflex3_email_text3' WHERE id = 8 ";
                                            
                                            $result_s_t_4 = mysqli_query($conn, $f_updflex3_email_link3);
                                            $result_f_type_4 = mysqli_query($conn, $f_awe_t_upd4);
                                            
                                            if($result_s_t_4 && $result_f_type_4){
                                                echo "<script>alert('Flex3_call records updated successfully');
                                                        window.location = 'adminfooter.php';</script>";
                                            } else { echo "Error in updating".mysqli_error($conn); }
                                        }

                                    }
                                ?>
                                <tr>
                                    <td> <input type="text" name="updflex3_email_link3" value="<?php echo "$f_alt_8" ?>" id=""> </td>
                                    <td> <input type="text" name="updflex3_email_text3" value="<?php echo "$f_links_8" ?>" id=""> </td>
                                    <td class="flexer">
                                        <div>
                                            <input type="submit" name="updflex3_r4" id="" value="<?php echo "upd" ?>">
                                            <input type="submit" name="clrflex2_r4" id="" value="<?php echo "Del" ?>">
                                        </div>
                                    </td>
                                </tr>
                            </form>

                        </table>

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