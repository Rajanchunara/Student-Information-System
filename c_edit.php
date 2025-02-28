<?php 
@include 'db.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];
}
   $sql = "SELECT 
            * 
            FROM `course_tbl` 
            left join program_tbl on course_tbl.c_program = program_tbl.p_id 
            left join sem_tbl on course_tbl.c_sem = sem_tbl.s_id 
            WHERE `c_id` = '$id'"
            ;
   $result = mysqli_query($conn, $sql);
   
   $row = mysqli_fetch_assoc($result); 

   // echo "<pre>"; print_r($row); exit;

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
     
      <input type="text" name="c_code" required placeholder="Course Code" value = "<?php echo $row['c_code']?>">
      <input type="text" name="c_title" required placeholder="Course Title"value = "<?php echo $row['c_title']?>">
      <input type="text" name="c_credit" required placeholder="Credit"value = "<?php echo $row['c_credit']?>">
      <select name="c_program">
            <option>Program</option>
               <?php
                  $sql = "SELECT * FROM `program_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row_program= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row_program['p_id'] ?>" <?php echo ($row['p_id'] == $row_program['p_id'] ? 'selected' : '');?>> <?php echo $row_program['p_title'] ?> </option>
               <?php 
                }  
               
               ?>
                  
          </select>
          <select name="c_sem">
            <option>Semester</option>
               <?php
                  $sql = "SELECT * FROM `sem_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row_sem= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row_sem['s_id'] ?>" <?php echo ($row['s_id'] == $row_sem['s_id'] ? 'selected' : '');?>><?php echo $row_sem['sem'] ?></option>
               <?php
                }  
               
               ?>
                  
          </select>
          <input type="file" name="file" id="fileToUpload">
          <img src="./uploads/syllabus/<?php echo $row['file']?>" width="100" />
      <input type="submit" name="update" value="Update" class="form-btn">
      
   </form>

</div>

</body>
</html>
  
<?php
if(isset($_POST['update'])) {
    $c_code = $_POST['c_code'];
    $c_title = $_POST['c_title'];
    $c_credit = $_POST['c_credit'];
    $c_program = $_POST['c_program'];
    $c_sem = $_POST['c_sem'];
    $file =$_POST['file'];

   

     $sql ="UPDATE course_tbl set c_code='$c_code', c_title='$c_title',c_credit='$c_credit',c_program='$c_program',c_sem='$c_sem', file='$file' WHERE c_id='$id'";

     $result = mysqli_query($conn,$sql);

     if($result){
          
         echo "<script>alert('Record Update')</script>"
         ?>
       <meta http-equiv="refresh" content="0; url=http://localhost/SIS/course.php">
        <?php
     }
     else {
        echo  "Failed: " .mysqli_error($conn);
     }
}

?>
