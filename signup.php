<?php
    session_start();
    include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="">
    <script src="js/main.js" defer></script>
</head>

<body>
    <style>
        body{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }

        .wrapper{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-image: url('userresources/images/email-or-fax.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            /*background-color: rgba(255, 60, 8, 0.45);
            background-blend-mode: overlay;
            */
            min-height: 100vh;
            padding:1% 0;
            color:white;
            font-family: 'Monotype corsiva';
        }

        .wrapper> div:nth-child(1){
            min-height: 90vh;
            border-radius: 30px;
            background-color: rgba(32,30,30,0.5);
            text-align: center;
            padding: 1.5% 2%;
            width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper> div:nth-child(1)>div:nth-child(1){
            width:80%;
            margin:auto;
            font-size: 1.2rem;
        }

        input[type="text"],input[type="password"],input[type="email"]{
            border: none;
            background-color: rgba(32,30,30,0.8);
            color: white;
            border-radius: 15px;
            padding: 2% 4%;
            outline: none;
            font-size: 0.9rem;
            transition: all 0.8s;
            width: 90%;
        }

        input[type="text"]:focus, input[type="password"]:focus{
            background-color: rgba(32,30,30,0.3);
        }

        input[type="submit"]{
            border: none;
            background-color:rgba(32,30,30,1);
            color: white;
            border-radius: 15px;
            padding: 3%;
            outline: none;
            font-size: 1.3rem;
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
            display:flex;
            flex-direction:column;
        }

        form>*{
            margin: 2% 0;
            width: 100%;
            display:flex;
            justify-content: space-between;
        }

        form>*>*{
            flex:1;
        }
        
        form> div label{
            padding: 1% 0;
        }
        
        #toload{
            color: green;
        }

        #toerror{
            color: red;
        }

        @media screen and (max-width:500px){
            .wrapper> div:nth-child(1){
                width: 80%;
                display: block;
                padding-top: 8%;
            }
            .wrapper> div:nth-child(1)>div:nth-child(1){
                display: block;
            }
            form{
                display: block;
            }
            form>*{
                display: block;
            }
            form>*>*{
                display: block;
                width: 80%;
            }
        }
        @media screen and (max-width:850px){
            .wrapper> div:nth-child(1){
                width: 80%;
                display: block;
                padding-top: 2%;
            }
            .wrapper> div:nth-child(1)>div:nth-child(1){
                display: block;
            }
            form{
                display: block;
            }
            form>*{
                display: block;
            }
            form>*>*{
                display: block;
                width: 80%;
            }
        }
    </style>

    <div class="wrapper">
        <div>
        <?php
            function chk($data){
                $data = strip_tags($data);
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = strtolower($data);
                return $data;
            }
        ?>
            <?php
                
                if(isset($_POST['signup'])){
                    $username_s = chk($_POST['username']);
                    $email_s = chk($_POST['email']);
                    $c_email_s = chk($_POST['c_email']);
                    $pass = $_POST['password'];
                    $c_pass = $_POST['c_password'];
                    $contact_s = chk($_POST['contact']);
                    $c_contact_s = chk($_POST['c_contact']);
                    
                    $start_bal = 0.0;
                    $status_s = '';
                    $location_s = '';

                    $empty = 'your field was empty';
                    if(!$username_s && !$email_s && !$c_email_s && !$pass && !$c_pass && !$contact_s && !$c_contact_s  ){
                        echo "<span id='toerror'>Empty field...</span><script>alert('Your fields are empty')</script>";
                    }
                        else{
                            //include "function.php";
                            $reg_users = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$username_s' ");
                                        while($r_reg_users = mysqli_fetch_array($reg_users)){
                                            $usernames = $r_reg_users['username'];
                                            $passkeys = $r_reg_users['passkey'];

                                            if($username_s == $usernames){
                                                echo "User name already exists";
                                                //$off = false;
                                                echo "<script>window.location = 'signup.php'</script>";
                                                //break;
                                            } 
                                        } // end of the query on data base end of while loop
                                        
                                    

                                        if(($email_s == $c_email_s) && (mysqli_num_rows($reg_users) == 0) && ($pass == $c_pass) && ($contact_s == $c_contact_s) ){
                                            $sql = "INSERT INTO `user_login` (id,username,passkey,c_passkey,email,c_email,contact,c_contact,status,balance,u_location)
                                            VALUES(null,'$username_s', '$pass', '$c_pass', '$email_s', '$c_email_s', '$contact_s', '$c_contact_s', '$status_s', '$start_bal', '$location_s')  ";
                                            $result = mysqli_query($conn,$sql);
            
                                            if($result) {
                                                /*
                                                $d_time = '00:00:00';
                                                $d_date = '0000-00-00';
                                                $d_service_type = 'None';
                                                $d_charges = 0.0;
                                                $d_status = 'None';
                                                */

                                                $d_pixs = "INSERT INTO `logo` (id, f_url,alt,user_logger) 
                                                VALUES(null,'profile.png','image','$username_s') ";
                                                $re_d_pixs = mysqli_query($conn,$d_pixs);
                                                    if($re_d_pixs){
                                                        //echo "default image updated";
                                                    } else{
                                                        echo "No default image here";
                                                    }
                                            
            
                                                /*
                                                $lastService = "INSERT INTO `transactions` (id, service_type,charges,t_time,t_date,t_status,user_logger)
                                                VALUES(null,'Nil','0.0','00:00:00','0000-00-00','Nil','$username_s') ";
                                                $send_lastService = mysqli_query($conn,$sql);
                                                    if($send_lastService){
                                                        echo "<p>it is working<p>";
                                                    } else{
                                                        echo mysqli_error($conn). "Not working";
                                                    }
                                                */
                                                echo "<span id='toload'>Registration Successful</span>";
                                                //$_SESSION['logger'] = "$user";
                                                echo "<script>window.alert('loading...')</script>
                                                <script>window.location = 'userresources/login.php'</script>";
                                                } else{
                                                    echo mysqli_error($conn). "error in registration";
                                                }
                                            } else{
                                            echo "<p>The details entered do not match....!</p><p>Confirm details again</p>";
                                            //break;
                                        }   //end of small else of POSTED/INPUT details

                            
                                //echo "$username";
                        
                        }
                    }//USERNAME end of Isset
            ?>
            
            <div>
                <div>
                    <h1>Sign Up</h1>
                </div>
                
                <form action="" method="post">
                    <div>
                        <label for="user">Choose Username:</label>
                        <input type="text" name="username" id="user" required >
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required >
                    </div>
                    <div>
                        <label for="c_email">Confirm Email:</label>
                        <input type="email" name="c_email" id="c_email"  required>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label for="c_password">Re-enter Password</label>
                        <input type="password" name="c_password" id="c_password" required>
                    </div>
                    <div>
                        <label for="contact">Mobile Number:</label>
                        <input type="text" name="contact" id="contact" required>
                    </div>
                    <div>
                        <label for="c_contact">Confirm Mobile Number:</label>
                        <input type="text" name="c_contact" id="c_contact" required>
                    </div>
                    <div>
                        <input type="submit" name="signup" value="Signup">
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