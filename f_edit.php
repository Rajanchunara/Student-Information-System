<?php 
@include 'db.php';

$id = $_GET['id'];

$select = "select * from faculty_tbl where f_id = '$id'";  
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
     
      <input type="text" name="f_code" required placeholder="Faculty Code" value = "<?php echo $row['f_code']?>">
      <input type="text" name="f_title" required placeholder="Faculty Title" value = "<?php echo $row['f_title']?>">
      
      <input type="submit" name="update" value="Update" class="form-btn">
      
   </form>

</div>

</body>
</html>

<?php
if(isset($_POST['update'])) {
    $f_code = $_POST['f_code'];
    $f_title = $_POST['f_title'];

   

     $sql ="UPDATE faculty_tbl set f_code='$f_code', f_title='$f_title' WHERE f_id='$id'";

     $result = mysqli_query($conn,$sql);

     if($result){
          
         echo "<script>alert('Record Update')</script>"
         ?>
       <meta http-equiv="refresh" content="0; url=http://localhost/SIS/faculty.php">
        <?php
     }
     else {
        echo  "Failed: " .mysqli_error($conn);
     }
}

?>
