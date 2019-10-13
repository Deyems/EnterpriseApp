<?php
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'cable';

    $conn = mysqli_connect($host,$username,$pass,$dbname);
    
    /*
    if(!$conn){
        die ("Connect failed: ");
    } else{
        echo "Connected successfully!";
    }
    */
?>