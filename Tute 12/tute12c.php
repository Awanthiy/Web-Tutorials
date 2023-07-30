<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Registration_Form";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo "Connection ok";
    }
    else
    {
        echo "Connection failed".mysqli+connect_error();
    }
?>