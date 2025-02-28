<?php 
@include 'db.php';

$id = $_GET['id'];

$select = "select * from sem_tbl where s_id = '$id'";  
 $result = mysqli_query($conn,$select);  
 

$row = mysqli_fetch_assoc($result);
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
     
      <input type="text" name="sem" required placeholder="Semester"  value = "<?php echo $row['sem']?>">
      
      <input type="submit" name="update" value="Update" class="form-btn">
      
   </form>

</div>

</body>
</html>

<?php
if(isset($_POST['update'])) {
    $sem = $_POST['sem'];
    

   

     $sql ="UPDATE sem_tbl set sem='$sem' WHERE s_id='$id'";

     $result = mysqli_query($conn,$sql);

     if($result){
          
         echo "<script>alert('Record Update')</script>"
         ?>
       <meta http-equiv="refresh" content="0; url=http://localhost/SIS/semester.php">
        <?php
     }
     else {
        echo  "Failed: " .mysqli_error($conn);
     }
}

?>
