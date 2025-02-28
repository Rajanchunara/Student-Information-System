<?php
session_start();

@include 'db.php'; 
$notice_id = $_GET['id'];

$user_type = $_SESSION['user_type'];
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
            <a href="noticeback.php" class="text-light" style="text-decoration: none;">Back</a>
      </button>

      <table class="table">
 
  <tbody>


  <?php
      $sql = "SELECT * FROM`notice_tbl` where n_id = $notice_id";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result) 
    

      ?> 

      <tr>
        <th>Notice Date: </th>
       
       <td><?php echo $row['date'];?></td>
    </tr>
    <tr>
    <th>Notice title: </th>
       
       <td><?php echo $row['notice'];?></td>
    </tr>
    <tr>
    <th>Notice: </th>
       
       <td><img src="./uploads/notices/<?php echo $row['file'];?>" width="200" /></td>
    </tr>

      
</div>


</body>
</html>
<script>
       function check()
       {
            return confirm('Are you sure?');
       }

</script>