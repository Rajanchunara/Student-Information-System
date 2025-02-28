<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $c_code = $_POST['c_code'];
    $c_title = $_POST['c_title'];
    $c_credit = $_POST['c_credit'];
    $c_program = $_POST['c_program'];
    $c_sem = $_POST['c_sem'];

    $uploaddir = './uploads/syllabus/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
   $file = "";
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        $file = $_FILES['file']['name'];
    } else {
        $file = "";
    }


    $sql = "INSERT INTO `course_tbl`(`c_code`, `c_title`, `c_credit`, `c_program`, `c_sem`, `file`)
     VALUES (' $c_code',' $c_title','$c_credit','$c_program','$c_sem', '$file')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:course.php?msg=New record created successfully');
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

   <form action="" method="post" enctype="multipart/form-data">
     
      <input type="text" name="c_code" required placeholder="Course Code">
      <input type="text" name="c_title" required placeholder="Course Title">
      <input type="text" name="c_credit" required placeholder="Credit">
          <select name="c_program">
            <option>Program</option>
               <?php
                  $sql = "SELECT * FROM `program_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row['p_id'] ?>"> <?php echo $row['p_title'] ?> </option>
               <?php 
                }  
               
               ?>
                  
          </select>
      <select name="c_sem">
            <option>Semester</option>
               <?php
                  $sql = "SELECT * FROM `sem_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row['s_id'] ?>"><?php echo $row['sem'] ?></option>
               <?php
                }  
               
               ?>
                  
          </select>

          <input type="file" name="file" id="fileToUpload">
      
      <input type="submit" name="submit" value="Submit" class="form-btn">
      
   </form>

</div>

</body>
</html>