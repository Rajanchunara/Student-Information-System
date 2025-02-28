<?php

@include 'db.php';

$id = $_GET['id'];

//$select = "DELETE FROM program_tbl WHERE p_id = '$id'";
$select = "update program_tbl set flag = 1 where p_id =".$id;
$data = mysqli_query($conn,$select);

if($data){
     
     echo "<script>alert('Record deleted')</script>"

     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/SIS/program.php">
      <?php
}
else{
     echo "Faild to delete";
}

?>