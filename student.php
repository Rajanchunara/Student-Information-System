<?php

@include 'db.php'; 
$select = "select * from student_tbl where flag = 0";
$run = mysqli_query($conn,$select);  


if(isset($_GET['search'])){
      $search = $_GET['search'];
      $sql = "SELECT * FROM `student_tbl` where s_name like '%".$search."%' OR roll like '%".$search."%' OR email like '%".$search."%'";
}else{
      $sql = "SELECT * FROM `student_tbl`";

}
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
   <title>Student Information System</title>

</head>
<body>

<div class="container">
      <button class="btn btn-primary my-5">
            <a href="addstudent.php" class="text-light" style="text-decoration: none;">Add New Student</a>
      </button>

      <button class="btn btn-primary my-5">
            <a href="back.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>
      <form action="" method="get">
            <input type="text" class="from-control" name="search" placeholder = "search" required >
            <button type="submit" class= "btn btn-primary">Search</button> 
      </form>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">S_ID</th>
      <th scope="col">Roll No.</th>
      <th scope="col">Student Name </th>
      <th scope="col">Email Id</th>
      <th scope="col">Program</th>
      <th scope="col">Faculty</th>
      <th scope="col">Semester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
           
  <?php
      
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)) {
         ?>
        
          <tr>
                 <td><?php echo $row['s_id']; ?></td>
                 <td><?php echo $row['roll']; ?></td>
                 <td><?php echo $row['s_name']; ?></td>
                 <td><?php echo $row['email']; ?></td>
                 <td>
                 
                 <?php 
                  $facId= $row['program'];
                   $facSql = "SELECT * FROM program_tbl where p_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["p_title"];
                   }
                  ?>     

                 </td>
                 <td> <?php 
                  $facId= $row['faculty'];
                   $facSql = "SELECT * FROM faculty_tbl where f_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["f_title"];
                   }
                  ?> </td>
                 <td>
                  
                 <?php 
                  $facId= $row['semester'];
                   $facSql = "SELECT * FROM sem_tbl where s_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["sem"];
                   }
                  
                  ?>    

                 </td>
                 <td>
                       <a class='btn btn-primary btn-sm' href='view.php?id=<?php echo $row['s_id']; ?>'>View</a>
                       <a class='btn btn-primary btn-sm' href='edit.php?id=<?php echo $row['s_id']; ?>'>Edit</a>
                       <a class='btn btn-danger btn-sm' href='delete.php?id=<?php echo $row['s_id']; ?>'>Delete</a>
                 </td>
        </tr>
        <?php  

      }
   ?>
        

    
   
  </tbody>
</table>

</div>

</body>
</html>
<script>
       function check()
       {
            return confirm('Are you sure?');
       }

</script>
