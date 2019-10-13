<?php include "../connection.php";
    include "../function.php";
    error_reporting(E_ERROR);
?>
<script src="js/main.js" defer></script>
<header class="cont_1">
    <div> <!--1ST child-->
        <figure>
            <img src="<?php echo "userimages/$url" ?>" alt="<?php echo $alt ?>">
        </figure>

        <div>
            <ul>
                <li>Wallet Balance: 
                    <?php
                        if($appstate == 'approved'){
                            echo "N". $balance;
                        } else{
                            echo "Unverified Pay";
                        }
                    ?>
                </li>
                <li>
                    <a href="logout.php">log out</a>
                </li>
            </ul>
        </div>
    </div>
    <nav> <!--2nd Child-->
        

        <section> <!--1st child of Nav-->
            
            <div>
                <ul class="tray">
                    <li><a href="<?php echo "$menu_alt_1" ?>"><?php echo "$menu_text_1" ?></a></li>
                    <li><a href="<?php echo "$menu_alt_2" ?>"><?php echo "$menu_text_2" ?></a></li>
                    <li><a href="<?php echo "$menu_alt_3" ?>"><?php echo "$menu_text_3" ?></a></li>
                    <li><a href="<?php echo "$menu_alt_4" ?>"><?php echo "$menu_text_4" ?></a></li>
                    <li><a href="<?php echo "$menu_alt_5" ?>"><?php echo "$menu_text_5" ?></a></li>
                    <li><a href="<?php echo "$menu_alt_6" ?>"><?php echo "$menu_text_6" ?></a></li>
                </ul>
            </div>
            <div>
                <div class="nav_buttons">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            
            <div>
                <div class="nav_buttons2">
                    <div></div>
                    <div></div>
                </div>
            </div>
            
            
        </section>

        <!--<ul class="navListlinks">
            <li><a href="<?php //echo "$menu_alt_1" ?>"> <?php //echo "$menu_text_1"; ?> </a></li>
            <li><a href="<?php //echo "$menu_alt_2" ?>"> <?php //echo "$menu_text_2"; ?> </a></li>
            <li><a href="<?php //echo "$menu_alt_3" ?>"> <?php //echo "$menu_text_3"; ?> </a></li>
            <li><a href="<?php //echo "$menu_alt_4" ?>"><?php //echo "$menu_text_4"; ?></a></li>
            <li><a href="<?php //echo "$menu_alt_5" ?>"> <?php //echo "$menu_text_5"; ?> </a></li>
        </ul>-->

    </nav>
</header>

<?php
    function chk($data){
        $data = strip_tags($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strtolower($data);
        return $data;
    }
    $currentlogger = $_SESSION["logger"];
?>