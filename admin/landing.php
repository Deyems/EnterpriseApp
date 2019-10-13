<!DOCTYPE html>
<?php
    include "../connection.php";
    //include "../function.php";
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
                    <img src="profile.png" alt="profile picture">
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
            <h1>Graphs</h1>
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </section>
    </div>
</body>
</html>