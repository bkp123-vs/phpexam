<?php
include('connection.php');
error_reporting('0');
$QUERY = "SELECT * FROM STUDENT";
$data = mysqli_query($conn,$QUERY);
$result = mysqli_num_rows($data);
?>
<table>
    <tr>
        <th>Roll NO </th>
        <th>Student Name</th>
        <th>Class</th>
        <th>Operations</th>
    </tr>
    <?php 
        if($result!=0){
            while($tabledata = mysqli_fetch_assoc($data)){
                echo "<tr>
                    <td>".$tabledata['rollno']."</td>
                    <td>".$tabledata['name']."</td>
                    <td>".$tabledata['class']."</td>
                    <td> 
                       <a href='update.php?rn=$tabledata[rollno] & sn=$tabledata[name] & cl=$tabledata[class] '>Edit</a>
                    </td>
                    <td>
                       <a href='delete.php?rn=$tabledata[rollno]'>Delete</a>
                    </td>
                    
                ";
            }
        }
        else{
            echo "Record not found";
        }
    ?>
</table>