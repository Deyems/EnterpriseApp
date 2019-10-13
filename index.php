<!DOCTYPE html>
<html>
<head>
    <?php include "connection.php";
        error_reporting(E_ERROR);
          include "function.php";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Integrated enterprise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styling.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <script src="js/myscript.js" defer></script>
    <script src="fontawesome-free-5.5.0-web/js/all.js"></script>
</head>
<body>
    <div class="wrapper">
        
        <?php
            include "navigation.php";
        ?>
        
        <header class="hidden">
            <main>
                <div>
                <h1><i> <?php echo "The Six-Agenda Business Platform" ?> </i></h1>
                </div>

                <div>
                    <p> <?php echo "Why not Consider Us today.!!!" ?> </p>
                </div>
                
                <div>    
                    <a class="headerlink" href="<?php echo "signup.php" ?>"> <?php echo "Register Account" ?></a>
                    <a class="headerlink" href="<?php echo "userresources/login.php" ?>"> <?php echo "Login here" ?></a>
                </div>
            </main>
        </header>

        <div class="Uniquefeatures">
            <main>
                <div> <!--1ST TYPE IN MAIN-->
                    <h1><?php echo "$home" ?></h1>
                    <p><?php echo "$sub_home" ?></p>
                </div>
                <div> <!--2ND TYPE IN MAIN-->
                    <div>
                        <i class="<?php echo "$d_icons_1"?> <?php echo "$d_size_1"?>"></i>
                        <p><?php echo "$d_services_1"; ?></p>
                    </div>
                    <div>
                        <i class="<?php echo "$d_icons_2"?> <?php echo "$d_size_2"?>"></i>
                        <p><?php echo "$d_services_2"; ?></p>
                    </div>
                    <div>
                        <i class="<?php echo "$d_icons_4"?> <?php echo "$d_size_4"?>"></i>
                        <p><?php echo "$d_services_4"; ?></p>
                    </div>
                    
                    <div>
                        <i class="<?php echo "$d_icons_3"?> <?php echo "$d_size_3"?>"></i>
                        <p><?php echo "$d_services_3"; ?></p>
                    </div>
                    <div>
                        <i class="<?php echo "$d_icons_5"?> <?php echo "$d_size_5"?>"></i>
                        <p><?php echo "$d_services_5"; ?></p>
                    </div>
                    <div>
                        <i class="<?php echo "$d_icons_6"?> <?php echo "$d_size_6"?>"></i>
                        <p><?php echo "$d_services_6"; ?></p>
                    </div>
                </div>
            </main>
        </div> <!--END OF 3RD TYPE IN THE WRAPPER-->
        
        <div>  <!--4TH TYPE IN THE WRAPPER WHERE TIPS ARE-->
            <main>
                <div>
                    <h1><?php echo "$off_titles_1"; ?></h1>
                    <p> <?php echo "$off_notes_1" ?>
                    </p>
                    <a href="signup.php"><?php echo "$off_reg_link_1"; ?></a>
                </div>
                <div>
                    <h1><?php echo "$off_titles_2"; ?></h1>
                    <p><?php echo "$off_notes_2" ?></p>
                    <a href="signup.php"><?php echo "$off_reg_link_2"; ?></a>
                </div>

                <div>
                    <h1><?php echo "$off_titles_3"; ?></h1>
                    <p><?php echo "$off_notes_3" ?>
                    </p>
                    <a href="signup.php"><?php echo "$off_reg_link_3"; ?></a>
                </div>

                <div>
                    <h1><?php echo "$off_titles_4"; ?></h1>
                    <p><?php echo "$off_notes_4" ?>
                    </p>
                    <a href="signup.php"><?php echo "$off_reg_link_4"; ?></a>
                </div>

                <div>
                    <h1><?php echo "$off_titles_5"; ?></h1>
                    <p> <?php echo "$off_notes_5" ?>
                    </p>
                    <a href="signup.php"><?php echo "$off_reg_link_5"; ?></a>
                </div>

                <div>
                    <h1><?php echo "$off_titles_6"; ?></h1>
                    <p><?php echo "$off_notes_6" ?>
                    </p>
                    <a href="signup.php"><?php echo "$off_reg_link_6"; ?></a>
                </div>

            </main>
        </div> <!--END OF 4TH TYPE IN THE WRAPPER-->


        <!--5th TYPE IN THE WRAPPER To 
        show How JS can Increase Numbers-->
        <div class="counters">
            <main>
                <div>
                    <h3>Years of Existence</h3>
                    <p class="numbers visible">12</p>
                </div>
                <div>
                    <h3>Services Rendered</h3>
                    <p class="numbers visible">6</p>
                </div>
                <div>
                    <h3>Our Customers</h3>
                    <p class="numbers visible">7200</p>
                </div>
            </main>
        </div> <!--END OF 5th TYPE/CHILD IN THE WRAPPER-->
    
        <div class="testimonials"> <!--6th TYPE/CHILD IN THE WRAPPER-->
            <center>
            <div>
                <h1>TESTIMONIALS</h1>
            </div>
            </center>
                
            <div class="foot">
                <div>
                    <i class="fas fa-quote-left fa-3x"></i>
                    <p>This has been a wonderful platform for my organisation
                        .We have had the privilege of numerous payback when our
                        messages did not deliver to their receipients
                    </p>
                    <img src="images/<?php echo "sms.jpg" ?>" alt="<?php echo "cus1" ?>">
                    <p>John Doe</p>
                    <p><i> Company name</i></p>
                </div>
                <div>
                    <i class="fas fa-circle fa-3x"></i>
                    <p>This has been a wonderful platform for my organisation
                        .We have had the privilege of numerous payback when our
                        messages did not deliver to their receipients</p>
                    <img src="images/<?php echo "sms.jpg" ?>" alt="<?php echo "cus2" ?>">
                    <p>John Doe</p>
                    <p><i> Company name</i></p></div>
                <div>
                    <i class="fas fa-quote-right fa-3x"></i>
                    <p>This has been a wonderful platform for my organisation
                        .We have had the privilege of numerous payback when our
                        messages did not deliver to their receipients</p>
                    <img src="images/<?php echo "sms.jpg" ?>" alt="<?php echo "cus3" ?>">
                    <p>John Doe</p>
                    <p><i> Company name</i></p>
                </div>
            </div>
            
        </div>  <!--END OF 6th TYPE/CHILD IN THE WRAPPER-->
    
        <footer class="bottom">
            <main>
                <div>
                    <h4><?php echo "$fl_title1";?></h4>
                    <a href="<?php echo "$fl_link1";?>" target="_blank"><?php echo "$fl_text1";?></a>
                    <a href="<?php echo "$fl_link2";?>" target="_blank"><?php echo "$fl_text2";?></a>
                    <a href="<?php echo "$fl_link3";?>" target="_blank"><?php echo "$fl_text3";?></a>
                    <a href="<?php echo "$fl_link4";?>" target="_blank"><?php echo "$fl_text4";?></a>
                </div>

                <div>
                    <h4><?php echo "$fl_col2_text"?></h4> <br><br>
                    <figure>
                        <img src="images/<?php echo "SMS_LOGO.png" ?> " alt="<?php echo "logo" ?>">
                    </figure>
                </div>
                <div>
                    <h4>Connect With Us</h4>
                    <div>
                        <span href="">
                            <i class="<?php echo "$fl_col3_icon1";?> <?php echo "$fl_col3_size1";?>"></i>
                        </span>
                    </div>

                    <div>
                        <span href="">
                            <i class="<?php echo "$fl_col3_icon2";?> <?php echo "$fl_col3_size2";?>"></i>
                        </span>
                    </div>

                    <div>
                        <span href="">
                            <i class="<?php echo "$fl_col3_icon3";?> <?php echo "$fl_col3_size3";?>"></i>
                        </span>
                    </div>

                    <div>
                        <span href="">
                            <i class="<?php echo "$fl_col3_icon4";?> <?php echo "$fl_col3_size4";?>"></i>
                        </span>
                    </div>
                </div>
                
            </main>
            <div>
                <p>&copy; <?php echo "$fl_copy_text";?> </p>
                
            </div>
        </footer>
    </div> <!--OVERALL WRAPPER-->

</body>
