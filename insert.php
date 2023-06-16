<?php
    include('connection.php');
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert data into database</title>
</head>
<body>
    <form action="" method="GET">
        Roll no <input type="text" name="rollno" value=""><br><br>
        Student Name <input type="text" name="studentname" value=""><br><br>
        Class <input type="text" name="class" value=""><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        // $rn = $_GET['rollno'];
        // $sn = $_GET['studentname'];
        // $cl = $_GET['class'];
        // $QUERY = "INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
        // $result = mysqli_query($conn,$QUERY);
        // if($result){
        //     echo "data sucesfully inserted";
        // }
                  
        
        if($_GET['submit']){
            $rn = $_GET['rollno'];
            $sn = $_GET['studentname'];
            $cl = $_GET['class'];
            
            if($rn!="" && $sn!="" && $cl!="")
            {
                $QUERY = "INSERT INTO STUDENT VALUES('$r','$sn','$cl')";
                $result = mysqli_query($conn,$QUERY);
                if($result){
                    echo "data sucesfully inserted";
                }
                else{
                    echo "Database has no records";
                }
               

        }
    }
    
    ?>
</body>
</html>