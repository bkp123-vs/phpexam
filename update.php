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
        Roll no <input type="text" name="rollno" 
            value="<?php echo $_GET['rn'];?>"><br><br>
        Student Name <input type="text" name="studentname" 
            value="<?php echo $_GET['sn'];?>"><br><br>
        Class <input type="text" name="class"
            value="<?php echo $_GET['cl'];?>"><br><br>
        <input type="submit" name="submit" value="UPDATE">
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
            $rollno= $_GET['rollno'];
            $sname = $_GET['studentname'];
            $class = $_GET['class'];
            $QUERY = "UPDATE  STUDENT SET NAME='$sname',CLASS='$class' WHERE ROLLNO = '$rollno' ";
            $result = mysqli_query($conn,$QUERY);
            if($result){
                echo "data updated sucesfully inserted";
            }
            else{
                echo "Database has no records";
            }        
            
               

        }
    
    
    ?>
</body>
</html>