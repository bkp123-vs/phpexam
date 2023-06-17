<?php
    include('connection.php');
    error_reporting('0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert data into database</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Roll no <input type="text" name="rollno" value=""><br><br>
        Student Name <input type="text" name="studentname" value=""><br><br>
        Class <input type="text" name="class" value=""><br><br>
        <input type="file" name="uploadfile" value=""><br><br>
        <input type="submit" name="submit" value="UploadImage"><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>

    <?php
        // $rn = $_POST['rollno'];
        // $sn = $_POST['studentname'];
        // $cl = $_POST['class'];
        // $QUERY = "INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
        // $result = mysqli_query($conn,$QUERY);
        // if($result){
        //     echo "data sucesfully inserted";
        // }
                  
        
        if($_POST['submit']){
            $rn = $_POST['rollno'];
            $sn = $_POST['studentname'];
            $cl = $_POST['class'];
            $filename = $_FILES['uploadfile']['name'];
            $tempname =$_FILES['uploadfile']['tmp_name'];
            //    echo $tempname."<br>";
            //    echo $filename."<br>";
            $folder = "image/".$filename;
            //    echo $folder;
            // echo $folder;
            move_uploaded_file($tempname,$folder);
            
            if($rn!="" && $sn!="" && $cl!="" && $filename!="")
             {
                $QUERY = "INSERT INTO STUDENT VALUES('$r','$sn','$cl','$folder')";
                $result = mysqli_query($conn,$QUERY);
                if($result){
                    // echo "data sucesfully inserted";
                }
                else{
                    echo "Database has no records";
                }
               

        }
    }
    
    ?>
</body>
</html>