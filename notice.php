<?php
session_start();

$user_type = $_SESSION['user_type'];

@include 'db.php'; 

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
            <a href="addnotice.php" class="text-light" style="text-decoration: none;">Add Notice</a>
      </button>
<?php }?>

      <button class="btn btn-primary my-5">
            <a href="back.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">S No</th>
      <th scope="col">Date</th>
      <th scope="col">Notice</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  <?php
      $sql = "SELECT * FROM`notice_tbl` order by n_id desc";
      $result = mysqli_query($conn, $sql);
      $i=1;
      while($row = mysqli_fetch_assoc($result)) {
      
      ?>  

      <tr>
       <td><?php echo $i; ?></td>
       <td><?php echo $row['date'] ?></td>
       <td><?php echo $row['notice'] ?></td>
      <td> 
            <a class='btn btn-primary btn-sm' href='noticeview.php?id=<?php echo $row['n_id']?>'>View</a>
            <?php if($user_type != "user"){?>
                  <a class='btn btn-danger btn-sm' href='n_delete.php?id=<?php echo $row['n_id']?>'  onclick='return check()'>Delete</a>
            <?php }?>
      </td>
    </tr>

 <?php     
   $i++;        
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