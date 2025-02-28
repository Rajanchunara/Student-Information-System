<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $f_code = $_POST['f_code'];
    $f_title = $_POST['f_title'];

    $sql = "INSERT INTO `faculty_tbl`(`f_id`, `f_code`, `f_title`) 
    VALUES (NULL,'$f_code','$f_title')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:faculty.php?msg=New record created successfully');
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
     
      <input type="text" name="f_code" required placeholder="Faculty Code">
      <input type="text" name="f_title" required placeholder="Faculty Title">
      
      <input type="submit" name="submit" value="Submit" class="form-btn">
      
   </form>

</div>

</body>
</html>