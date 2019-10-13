<?php
    include "../connection.php";
    error_reporting(E_ERROR);
    include "../function.php";
    
    function chk($data){
        $data = trim($data);
        //$data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strtolower($data);
        return $data;
    }
    
?>
    <header class="head">
        <div>
            <div class="buttons">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="hiddenbut">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div>
            <div>
                <h3>Control Panel</h3>
            </div>
            <div>
                <figure>
                    <img src="../userresources/userimages/profile.png" alt="profile picture" width="50" height="50" />
                </figure>
                <p> Hi... Admin</p>
            </div>
        </div>
    </header>

    <section class="main_area">
        <aside>
                <br><br><br> <br><br><br><br><br>
            <ul>
                <li><a href="index.php">Userboard</a></li>
                <li><a href="users.php">Approve Users</a></li>
                <li><a href="pay.php">Approve Payment</a></li>
                <li><a href="transact.php">Transactions</a></li>
                <li><a href="analytics.php">Analytics</a></li>
                <li><a href="adminfooter.php">Footer</a></li>
                <li><a href="news.php">Publish News</a></li>
                <li><a href="inviting.php">Landing Page</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>