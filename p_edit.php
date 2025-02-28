<?php 
@include 'db.php';

$id = $_GET['id'];

$select = "select * from program_tbl where p_id = '$id'";  
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
     
      <input type="text" name="p_code" required placeholder="Program Code" value = "<?php echo $row['p_code']?>">
      <input type="text" name="p_title" required placeholder="Progra Title" value = "<?php echo $row['p_title']?>">
      
      <input type="submit" name="update" value="Update" class="form-btn">
      
   </form>

</div>

</body>
</html>

<?php
if(isset($_POST['update'])) {
    $p_code = $_POST['p_code'];
    $p_title = $_POST['p_title'];

   

     $sql ="UPDATE program_tbl set p_code='$p_code', p_title='$p_title' WHERE p_id='$id'";

     $result = mysqli_query($conn,$sql);

     if($result){
          
         echo "<script>alert('Record Update')</script>"
         ?>
       <meta http-equiv="refresh" content="0; url=http://localhost/SIS/program.php">
        <?php
     }
     else {
        echo  "Failed: " .mysqli_error($conn);
     }
}

?>
