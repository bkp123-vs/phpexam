<?php
    include('connection.php');
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data into database</title>
</head>
<body>
    <form action="" method="GET">
        Roll no <input type="text" name="rollno"
        value="<?php echo $_GET['rn'];?>"><br><br>
        Student Name <input type="text" name="studentname"
        value="<?php echo $_GET['sn'];?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>   
    <?php
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