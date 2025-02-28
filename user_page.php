<?php

@include 'db.php';

session_start();

if($_SESSION['user_type']!='user'){
   header('location:index.php');
}

$user_id = $_SESSION['user'];


$sql = "select * from student_tbl where email = '".$user_id."'";

// echo $sql; exit; 

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
   <link rel="stylesheet" href="css/dash.css" />
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <title>Student Information System</title>

</head>
<body>
   
<div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="photos/nast.jpg" alt="">
          <span class="nav-item">NAST</span>
        </a></li>
        <li><a href="user_detail.php" class="student">
          <i class="fas fa-user"></i>
          <span class="nav-item">Personal Details</span>
        </a></li>
       
        <li><a href="course.php">
          <i class="fas fa-book-open"></i>
          <span class="nav-item">Course</span>
        </a></li>
       
        <li><a href="notice.php">
          <i class="fas fa-bell "></i>
          <span class="nav-item">Notice Board</span>
        </a></li>
        
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
       
      </div>

      <section class="main-course">
        <h1>National Academy Science and Technology</h1>
        <div class="course-box">
          
          <div class="course">
            <div class="box">
              <h3>BE Computer</h3> 
            </div>

            <div class="box">
              <h3>BE Civil</h3> 
            </div>

            <div class="box">
              <h3>BCA</h3>  
            </div>

            <div class="box">
              <h3>BBA</h3>
            </div>

          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html>