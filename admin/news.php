<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
    if($_SESSION["logger"]){
    
    ?>
    <head>
        <title>Publish News</title>
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
                        
                    </div>
                    

                    <div>
                        <h1>Update Information to Users</h1>
                        <form action="" method="post">
                            <?php
                                if(isset($_POST["publish"])){
                                    $headline = $_POST["headline"];
                                    $news = $_POST["news"];
                                    if($headline && $news){
                                        $sqlnews = "INSERT INTO `news`(`id`,`headline`,`content`) 
                                            VALUES(null,'$headline','$news')";
                                            if($sqlnews){
                                                $r_sqlnews = mysqli_query($conn,$sqlnews);
                                                if($r_sqlnews){ echo "database updated";
                                                    echo "<script> window.location = 'news.php';</script>";
                                                } else{ echo "Error ".mysqli_error($conn); }
                                            } else{ echo "Error ".mysqli_error($conn);}
                                        } else{ echo "<span>Empty fields</span>";}
                                    }
                            ?>
                            <div>
                                <label for="title">Headline</label>
                                <input type="text" name="headline" value="<?php echo"$headlinedata"?>" id="headline">
                            </div>
                            <div>
                                <label for="news_con">Update News</label>
                                <textarea name="news" id="content" placeholder="<?php echo"$newscontent"?>"></textarea>
                            </div>
                            <div>
                                <input type="submit" name="publish" value="Publish">
                            </div>
                            
                        </form>
                    </div>

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