<?php
    include('connection.php');
    error_reporting('0');
    $rollno = $_GET['rn'];
    $QUERY = "DELETE FROM STUDENT WHERE ROLLNO ='$rollno'";
    $data = mysqli_query($conn,$QUERY);
    
    if($data){
        echo "Deleted Sucessfully";
    }
    else{
        echo "Data not deleted";
    }
?>