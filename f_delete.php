<?php

@include 'db.php';

$id = $_GET['id'];

//$select = "DELETE FROM faculty_tbl WHERE f_id = '$id'";
$select = "update faculty_tbl set flag = 1 where f_id =".$id;
$data = mysqli_query($conn,$select);

if($data){
     
     echo "<script>alert('Record deleted')</script>"

     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/SIS/faculty.php">
      <?php
}
else{
     echo "Faild to delete";
}

?>