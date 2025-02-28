<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $date = $_POST['date'];
    $notice = $_POST['notice'];
    

    $uploaddir = './uploads/notices/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
   $file = "";
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        $file = $_FILES['file']['name'];
    } else {
        $file = "";
    }

   
 
    $sql = "INSERT INTO `notice_tbl`(`n_id`, `date`, `notice`, `file`) 
    VALUES (NULL,'$date','$notice','$file')";


     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:notice.php?msg=New record created successfully');
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

  <input type="date" name="date" required placeholder="Date">
  <input type="text" name="notice" required placeholder="Notice Topic">
  <input type="file" name="file" id="fileToUpload">

  <input type="submit" name="submit" value="Submit" class="form-btn">
</form>

</div>

</body>
</html>