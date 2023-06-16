
<?php
    include('connection.php');
    $QUERY = "INSERT INTO STUDENT VALUES('3','RITIK','BCOM')";
    $result = mysqli_query($conn,$QUERY);
    if($result){
        echo "data sucesfully inserted";
    }
?>