<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";


    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo "Connection Success";
    }

    else{
        echo "Connection failed".mysqli_connect_errno();
    }
?>