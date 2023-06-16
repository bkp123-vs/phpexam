<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbmame = "school";
    

    $conn = mysqli_connect($servername,$username,$password,$dbmame);
    if($conn){
        // echo "Connection okk!!!";
        
    }else{
        echo "Connection failed !! ";
    }
?>