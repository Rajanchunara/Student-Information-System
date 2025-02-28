<?php

@include 'db.php';

$id = $_GET['id'];

//$select = "DELETE FROM student_tbl WHERE s_id = '$id'";
$select = "update student_tbl set flag = 1 where s_id =".$id;
$data = mysqli_query($conn,$select);

if($data){
     
     echo "<script>alert('Record deleted')</script>"

     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/SIS/student.php">
      <?php
}
else{
     echo "Faild to delete";
}

?>