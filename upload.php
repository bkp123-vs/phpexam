<?php
error_reporting(0);
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile" value="">
    <input type="submit" name="submit" value="UploadImage">
</form>

<?php
   $filename = $_FILES['uploadfile']['name'];
   $tempname =$_FILES['uploadfile']['tmp_name'];
//    echo $tempname."<br>";
//    echo $filename."<br>";
   $folder = "image/".$filename;
//    echo $folder;
   // echo $folder;
   move_uploaded_file($tempname,$folder);

   echo "<img src='$folder' height = '100' width = '100' /> ";
   
?>