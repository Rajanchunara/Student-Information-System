<?php

@include 'db.php';

$id = $_GET['id'];

$select = "DELETE FROM notice_tbl WHERE n_id = '$id'";
$data = mysqli_query($conn,$select);

if($data){
     
     echo "<script>alert('Record deleted')</script>"

     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/SIS/notice.php">
      <?php
}
else{
     echo "Faild to delete";
}

?>