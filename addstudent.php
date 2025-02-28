<?php 
@include 'db.php';

if(isset($_POST['submit'])) {
    $s_name = $_POST['s_name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $faculty = $_POST['faculty'];
    $program = $_POST['program'];
    $semester = $_POST['semester'];
    $p_address = $_POST['p_address'];
    $t_address = $_POST['t_address'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $f_contact = $_POST['f_contact'];
    $l_name = $_POST['l_name'];
    $l_relation = $_POST['l_relation'];
    $l_contact = $_POST['l_contact'];
    $sc_name = $_POST['sc_name'];
    $board = $_POST['board'];
    $p_year = $_POST['p_year'];
    $cgpa = $_POST['cgpa'];
    $m_subject = $_POST['m_subject'];

    $sql = "INSERT INTO `student_tbl`(`s_id`, `s_name`, `roll`, `email`, `contact`, `dob`, `gender`, `faculty`, `program`, `semester`, `p_address`, `t_address`, `f_name`, `m_name`, `f_contact`, `l_name`, `l_relation`, `l_contact`, `sc_name`, `board`, `p_year`, `cgpa`, `m_subject`) 
    VALUES (Null,'$s_name','$roll','$email','$contact','$dob','$gender','$faculty','$program','$semester','$p_address','$t_address','$f_name','$m_name','$f_contact','$l_name','$l_relation','$l_contact','$sc_name','$board','$p_year','$cgpa','$m_subject')";

     $result = mysqli_query($conn,$sql);

     if($result){
        header('location:student.php?msg=New record created successfully');
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
   <title>Student Information System</title>

</head>
<body>
   
<div class="container-fluid">
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header pb-1 d-flex justify-content-between">
           
          </div>
          <div class="card-body text-primary">
            <div class="table-responsive">
              <form class="row px-2" action="" method="POST" enctype="multipart/form-data">
              <div class="col-6 my-1" style="color: red;; font-size: 27px;">
                  <label class="form-label" style="text-decoration: underline; ">Student Information</label>
                </div>


                
                <div class="col-6 my-1" style="color: red;; font-size: 27px;">
                  <label class="form-label" style="text-decoration: underline; ">Guardian's Information</label>
                </div>
                
                  <div class="col-md-6 my-1">
                  <label class="form-label">Student Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="s_name" required>
                </div>

                <div class="col-md-6 my-1">
                  <label class="form-label">Father Name</label>
                  <input type="text" class="form-control" placeholder="Father Name" name="f_name" required>
                </div>

                <div class="col-md-6 my-1">
                  <label class="form-label">Roll no.</label>
                  <input type="text" class="form-control" placeholder="Roll no." name="roll" autocomplete="off" maxlength="15">
                </div>

                <div class="col-md-6 my-1">
                  <label class="form-label">Mother's Name</label>
                  <input type="text" class="form-control" placeholder="Mother Name" name="m_name">
                </div>
                
                <div class="col-md-6 my-1">
                  <label class="form-label">Email Id</label>
                  <input type="email" class="form-control" placeholder="Email Id" name="email">
                </div>
                
                <div class="col-6 my-1">
                  <label class="form-label">Father's Contact no.</label>
                  <input type="text" class="form-control" placeholder="father's contact no." name="f_contact">
                </div>


                <div class="col-6 my-1">
                  <label class="form-label">Contact</label>
                  <input type="text" class="form-control" placeholder="Contact no." name="contact" required>
                </div>
                <div class="col-6 my-1">
                  <label class="form-label">Local Guardian's Name</label>
                  <input type="text" class="form-control" placeholder="Local Guardian's Name" name="l_name" required>
                </div>
                <div class="col-md-6 my-1">
                  <label class="form-label">DOB</label>
                  <input type="date" class="form-control" name="dob" required>
                </div>

                <div class="col-6 my-1">
                  <label class="form-label">Local Guardian's Relation</label>
                  <input type="text" class="form-control" placeholder="Local Guardian's Relation" name="l_relation">
                </div>      

                <div class="col-md-6 my-1">
                  <label class="form-label">Gender</label>
                  <select class="form-control" name="gender">
                    <option>Select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                  </select>
                </div>

                <div class="col-6 my-1">
                  <label class="form-label">Local Guardian's Contact no.</label>
                  <input type="text" class="form-control" placeholder="Local Guardian's Contact no." name="l_contact">
                </div>
                <div class="col-md-6 my-1">
                  <label class="form-label">Faculty</label>
                  <select class="form-control" name="faculty">
                  <option>Select Faculty</option>
               <?php
                  $sql = "SELECT * FROM `faculty_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row['f_id'] ?>"><?php echo $row['f_title'] ?></option>
               <?php  }  
               
               ?>
                  </select>
                </div>

                
                <div class="col-6 my-1" style="color: red;; font-size: 27px;">
                  <label class="form-label" style="text-decoration: underline; ">Academic Information</label>
                </div>
                <div class="col-md-6 my-1">
                  <label class="form-label">Program</label>
                  <select class="form-control" name="program">
                  <option>Select Program</option>
               <?php
                  $sql = "SELECT * FROM `program_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row['p_id'] ?>"> <?php echo $row['p_title']?> </option>
               <?php  }  
               
               ?>
                  </select>
                </div>

                <div class="col-6 my-1">
                  <label class="form-label">School/Collage Name</label>
                  <input type="text" class="form-control" placeholder="School/Collage Name" name="sc_name" required>
                </div> 

                <div class="col-6 my-1">
                  <label class="form-label">Semester</label>
                  <select class="form-control" name="semester">
                  <option>Select Semester</option>
               <?php
                  $sql = "SELECT * FROM `sem_tbl`";
                  $result = mysqli_query($conn,$sql);
                  while($row= mysqli_fetch_assoc($result)){
               ?>
               <option value = "<?php echo $row['s_id'] ?>"><?php echo $row['sem'] ?></option>
               <?php  }  
               
               ?>
                  </select>
                </div>
                <div class="col-6 my-1">
                  <label class="form-label">Board</label>
                  <input type="text" class="form-control" placeholder="board" name="board" required>
                </div> 

                <div class="col-6 my-1">
                  <label class="form-label">Permanent Address</label>
                  <input type="text" class="form-control" placeholder="Permanent Address" name="p_address" required>
                </div>
                <div class="col-6 my-1">
                  <label class="form-label">Passing Year</label>
                  <input type="text" class="form-control" placeholder="Passing Year" name="p_year" required>
                </div>
                <div class="col-6 my-1">
                  <label class="form-label">Temporary Address</label>
                  <input type="text" class="form-control" placeholder="Temporary Address" name="t_address" required>
                </div>
                <div class="col-6 my-1">
                  <label class="form-label">CGPA</label>
                  <input type="text" class="form-control" placeholder="cgpa" name="cgpa" required>
                </div>

                <div class="col-6 my-1">
                  
                </div>
                
                <div class="col-6 my-1">
                  <label class="form-label">Major Subject</label>
                  <input type="text" class="form-control" placeholder="Major subject" name="m_subject" required>
                </div>
                <div class="col-12 mt-1 mb-2">
                  <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit">
                  <a href="go_back.php" class="btn btn-secondary btn-sm">Go Back</a>                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>