<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $sem = $_POST['sem'];

    $sql = "INSERT INTO `sem_tbl`(`s_id`, `sem`)
     VALUES (NULL,'$sem')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:semester.php?msg=New record created successfully');
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
     
      <input type="text" name="sem" required placeholder="Semester">
      
      <input type="submit" name="submit" value="Submit" class="form-btn">
      
   </form>

</div>

</body>
</html>