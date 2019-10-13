<?php
    session_start();
    error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
    <?php
        if($_SESSION["logger"]){
    ?>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Userboard</title>
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
                        <h1><?php echo "$home" ?></h1>
                        <div class="cent">
                            <div><a href="<?php echo "$d_alt_1"?>">
                                    <i class="<?php echo "$d_icons_1" ?> <?php echo "$d_size_1" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_1" ?></p></div>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo "$d_alt_2"?>">
                                    <i class="<?php echo "$d_icons_2" ?> <?php echo "$d_size_2" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_2" ?></p></div>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo "$d_alt_3"?>">
                                    <i class="<?php echo "$d_icons_3" ?> <?php echo "$d_size_3" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_3" ?></p></div>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo "$d_alt_4"?>">
                                    <i class="<?php echo "$d_icons_4" ?> <?php echo "$d_size_4" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_4" ?></p></div>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo "$d_alt_5"?>">
                                    <i class="<?php echo "$d_icons_5" ?> <?php echo "$d_size_5" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_5" ?></p></div>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo "$d_alt_6"?>">
                                    <i class="<?php echo "$d_icons_6" ?> <?php echo "$d_size_6" ?>"></i>
                                    <div class="plain"><p><?php echo "$d_services_6" ?></p></div>
                                </a>
                            </div>
                            
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