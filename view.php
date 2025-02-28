<?php

@include 'db.php'; 

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

           <?php
                  $id = $_GET['id'];
                   $sql = "SELECT * FROM `student_tbl` where s_id = '$id'";
                   $result = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_assoc($result)) {

             ?>

<div class="container profile-page">
    

<!-- personal Information -->
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="text-center text-danger">Personal Information</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <tbody class="text-dark">     
              <tr>
                  <th>S_ID</th>
                  <td><?php echo $row['s_id']?></td>
                </tr>
                <tr>
                  <th>Student Name</th>
                  <td><?php echo $row['s_name']?></td>
                </tr>
                <tr>
                  <th>Roll No.</th>
                  <td><?php echo $row['roll']?> </td>
                </tr>
                <tr>
                  <th>Email ID</th>
                  <td><?php echo $row['email']?> </td>
                </tr>
                <tr>
                  <th>Contact no.</th>
                  <td> <?php echo $row['contact']?></td>
                </tr>
                <tr>
                  <th>DOB</th>
                  <td> <?php echo $row['dob']?></td>
                </tr>
                <tr>
                  <th>Gender</th>
                  <td><?php echo $row['gender']?></td>
                </tr>
                <tr>
                  <th>Faculty</th>
                  <td> 
                    <?php 
                  $facId= $row['faculty'];
                   $facSql = "SELECT * FROM faculty_tbl where f_id= '$facId'";
                   $facResult = mysqli_query($conn, $facSql);
                   while($row2 = mysqli_fetch_assoc($facResult)) {  
                    echo $row2["f_title"];
                   }
                  ?> 
                  </td>
                </tr>
                <tr>
                  <th>Program</th>
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
                </tr>
                <tr>
                  <th>Semester</th>
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
                </tr>
                <tr>
                  <th>Permanent Address</th>
                  <td> <?php echo $row['p_address']?> </td>
                </tr>
                <tr>
                  <th>Temporary Address</th>
                  <td><?php echo $row['t_address']?> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Guardian's Information -->
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="text-center text-danger">Guardian's Information</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <tbody class="text-dark">
              <tr>
                  <th>Father's Name</th>
                  <td><?php echo $row['f_name']?> </td>
                </tr>
                <tr>
                  <th>Mother's Name</th>
                  <td> <?php echo $row['m_name']?></td>
                </tr>
                <tr>
                  <th>Father's Contact no.</th>
                  <td><?php echo $row['f_contact']?>  </td>
                </tr>
                <tr>
                  <th>Local Guardian's Name</th>
                  <td><?php echo $row['l_name']?> </td>
                </tr>
                <tr>
                  <th>Local Guardian's Relation</th>
                  <td><?php echo $row['l_relation']?></td>
                </tr>
                <tr>
                  <th>Local Guardian's Contact no.</th>
                  <td> <?php echo $row['l_contact']?> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Academuc Information -->
<div class="container">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
      <h3> Academic Information</h3>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">School/Collage Name</th>
      <th scope="col">Board</th>
      <th scope="col">Passing Year</th>
      <th scope="col">CGPA</th>
      <th scope="col">Major Subject</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['sc_name']?></td>
      <td><?php echo $row['board']?></td>
      <td><?php echo $row['p_year']?></td>
      <td><?php echo $row['cgpa']?></td>
      <td><?php echo $row['m_subject']?></td>
    </tr>
  </tbody>
</table>
</div>
 
  <div class="row mb-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body d-flex justify-content-around">
        
          <div>
            <a href="go_back.php" class="btn btn-outline-primary">Go Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php

}
  ?>
</body>
</html>

