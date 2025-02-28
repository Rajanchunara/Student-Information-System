<?php

@include 'db.php'; 
$select = "select * from program_tbl where flag = 0";  
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
            <a href="addprogram.php" class="text-light" style="text-decoration: none;">Add Program</a>
      </button>

      <button class="btn btn-primary my-5">
            <a href="back.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">P_Id</th>
      <th scope="col">Program Code</th>
      <th scope="col">Program Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
      //$sql = "SELECT * FROM`program_tbl`";
      //$result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($run)) {

       echo 

             "<tr>
                   <td>".$row['p_id']."</td>
                   <td>".$row['p_code']."</td>
                   <td>".$row['p_title']."</td>
                   <td> 
                       <a class='btn btn-primary btn-sm' href='p_edit.php?id=$row[p_id]'>Edit</a>
                       <a class='btn btn-danger btn-sm' href='p_delete.php?id=$row[p_id]' onclick='return check()'>Delete</a>

                  </td>
    </tr>";

      
           
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