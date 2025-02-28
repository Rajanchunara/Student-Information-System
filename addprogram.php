<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $p_code = $_POST['p_code'];
    $p_title = $_POST['p_title'];

    $sql = "INSERT INTO `program_tbl`(`p_id`, `p_code`, `p_title`) 
    VALUES (NULL,'$p_code','$p_title')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:program.php?msg=New record created successfully');
     }
     else {
        echo  "Failed: " .mysqli_error($conn);
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Information System</title>
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
     
      <input type="text" name="p_code" required placeholder="Program Code">
      <input type="text" name="p_title" required placeholder="Progra Title">
      
      <input type="submit" name="submit" value="Submit" class="form-btn">
      
   </form>

</div>

</body>
</html>