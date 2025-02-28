<?php

session_start();

$user_type = $_SESSION['user_type'];

@include 'db.php'; 

$select = "select * from course_tbl where flag = 0";  
 $run = mysqli_query($conn,$select);  

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
   <title>Student Information System</title>

</head>
<body>
   
<div class="container">

<?php if($user_type != "user"){?>
        
      <button class="btn btn-primary my-5">
            <a href="addcourse.php" class="text-light" style="text-decoration: none;">Add Course</a>
      </button>
<?php }?>
     
      <button class="btn btn-primary my-5">
            <a href="back.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">C_Id</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Credit</th>
      <th scope="col">Program</th>
      <th scope="col">Semester</th>
      <th scope="col">Syllabus</th>
      <th scope="col">Action</th>  

      
    </tr>
  </thead>
  <tbody>

  <?php
      // $sql = "SELECT * FROM `course_tbl`";
      // $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($run)) {
         ?>       
            <tr>
            <td><?php echo $row['c_id']; ?></td>
            <td><?php echo $row['c_code']; ?></td>
            <td><?php echo $row['c_title']; ?></td>
            <td><?php echo $row['c_credit']; ?></td>
            <td>
              
            <?php 
                  $facId= $row['c_program'];
                   $facSql = "SELECT * FROM program_tbl where p_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["p_title"];
                   }
                  
                  ?>       

            </td>
            <td>
              
            <?php 
                  $facId= $row['c_sem'];
                   $facSql = "SELECT * FROM sem_tbl where s_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["sem"];
                   }
                  
                  ?>     

            </td>
            <td><?php echo $row['file']; ?></td>
               
      
            <td> 
            <?php if($user_type != "user"){?>

                  <a class='btn btn-primary btn-sm' href='c_edit.php?id=<?php echo $row['c_id']; ?>'>Edit</a>
                  <a class='btn btn-danger btn-sm' href= 'c_delete.php?id=<?php echo $row['c_id']; ?>' onclick='return checkdelete()'> Delete</a>

                 <?php }?>

                 <?php if($user_type != "admin"){?>
                 <a class='btn btn-primary btn-sm' href='./uploads/syllabus/<?php echo $row['file']?>' download>Download PDF</a>
                 <?php }?>

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
       function checkdelete()
       {
            return confirm('Are you sure?');
       }

</script>