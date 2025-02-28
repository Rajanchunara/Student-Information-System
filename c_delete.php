<?php

@include 'db.php';

$id = $_GET['id'];

//$select = "DELETE FROM course_tbl WHERE c_id = '$id'";
$select = "update course_tbl set flag = 1 where c_id =".$id;
$data = mysqli_query($conn,$select);

if($data){
     
     echo "<script>alert('Record deleted')</script>"

     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/SIS/course.php">
      <?php
}
else{
     echo "Faild to delete";
}

?>