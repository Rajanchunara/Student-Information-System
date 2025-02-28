<?php

@include 'db.php'; 
$select = "select * from sem_tbl where flag = 0";
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
      <button class="btn btn-primary my-5">
            <a href="addsem.php" class="text-light" style="text-decoration: none;">Add Semester</a>
      </button>

      <button class="btn btn-primary my-5">
            <a href="back.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">S_Id</th>
      <th scope="col">Semester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  <?php
      //$sql = "SELECT * FROM`sem_tbl`";
      //$result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($run)) {
      
      echo     

      "<tr>
      <td>".$row['s_id']."</td>
      <td>".$row['sem']."</td>
      <td> 
            <a class='btn btn-primary btn-sm' href='s_edit.php?id=$row[s_id]'>Edit</a>
            <a class='btn btn-danger btn-sm' href='s_delete.php?id=$row[s_id]'  onclick='return check()'>Delete</a>
      </td>
    </tr>";

      
           
}
?>

      
</div>


</body>
</html>
<script>
       function check()
       {
            return confirm('Are you sure?');
       }

</script>