<?php
    session_start();
    error_reporting(E_ERROR);
    include "../connection.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="">
    <script src="js/main.js" defer></script>
</head>

<body>
    <style>
        body{
            margin:0;
            padding:0;
        }

        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('../userresources/images/email-or-fax.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            /*background-color: rgba(255, 60, 8, 0.45);
            background-blend-mode: overlay;
            */
            height: 100vh;
            color:white;
            font-family: 'Monotype corsiva';
        }

        .wrapper> div:nth-child(1){
            min-height: 40vh;
            border-radius: 30px;
            background-color: rgba(32,30,30,0.5);
            text-align: center;
            padding: 1.5% 2%;
        }

        .wrapper> div:nth-child(1)>div:nth-child(1){
            width:80%;
            margin:auto;
            font-size: 1.4rem;
        }

        input[type="text"],input[type="password"]{
            border: none;
            background-color:rgba(32,30,30,0.6);
            color: white;
            border-radius: 20px;
            padding: 3% 6%;
            outline: none;
            font-size: 1.0rem;
            transition: all 0.8s;
        }

        input[type="text"]:focus, input[type="password"]:focus{
            background-color: rgba(32,30,30,0.3);
        }

        input[type="submit"]{
            border: none;
            background-color:rgba(32,30,30,0.6);
            color: white;
            border-radius: 20px;
            padding: 5%;
            outline: none;
            font-size: 1.4rem;
            width:50%;
            font-family: 'Monotype corsiva';
            cursor: pointer;
            transition: all 0.7s;
        }

        input[type="submit"]:hover{
            color: blue;
        }

        form{
            width:100%;
        }

        form>*{
            margin: 4% 0;
        }
        #toload{
            color: green;
        }

        #toerror{
            color: red;
        }
    </style>

    <div class="wrapper">
        <div>
        <?php
            if(isset($_POST['login'])){
                $username = strtolower($_POST['username']);
                $pass = $_POST['password'];
                $empty = 'your field was empty';
                if(!$username && !$pass){
                    echo "<span id='toerror'>Empty field...</span><script>alert('Your fields are empty')</script>";
                }
                    else{

                        $sql = "SELECT * FROM `admin` where `username` = '$username' AND `password` = '$pass' ";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                            $user = $row['username'];
                            $passkey = $row['password'];
                            $status = $row['status'];
                        }

                        if($username == $user){
                            if ($passkey == $pass){
                            $_SESSION['logger'] = "$user";
                            echo "<script>window.alert('loading...')</script>";
                            echo "<script>window.location = 'index.php'</script>";
                            } else{ echo "<span> Your Password is not correct </span>"; }
                        } else { echo " <span>Incorrect Username $passkey </span>";}
                    } //end of else
                }//USERNAME
        ?>
            <div>
                <h1>Login</h1>
                <form action="" method="post">
                    <div>
                        <label for="user">Username:</label>
                        <input type="text" name="username" id="user">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" >
                    </div>
                    <div>
                        <input type="submit" name="login" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let userfield = document.queryselector('#user');
        let passfield = document.queryselector('#password');
        userfield.addEventlistener('input',function(){
            document.getElementById('user').value = "";
        });
    </script>
</body>
</html>