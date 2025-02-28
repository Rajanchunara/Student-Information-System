<?php
@include 'db.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $enc_pass = md5($pass);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$enc_pass' ";

    //echo $select;
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $success = 0;

        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["user"] = $row["email"];
            $_SESSION["user_type"] = $row["user_type"];
            $_SESSION['user_id'] = $row['id'];
            $success = 1;

        }
        if ($result > 0) {
           // echo "done3";
            header('location:index.php');
        } else {
        //    echo "done4";
            header('location:login.php');
        }
    }else {
        //    echo "done4";
            header('location:login.php');
        }
}
?>