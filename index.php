<?php
@include 'db.php';

session_start();



if (!isset($_SESSION['user_type'])) {
    header('location:login.php');

} else {
   //echo $_SESSION['user_type'];
           if ($_SESSION['user_type'] == 'admin') {
            header('location:admin_page.php');

        } elseif ($_SESSION['user_type'] == 'user') {
            header('location:user_page.php');

        } else {
            echo "I amworking";
           // header('location:login.php');
        }    
}
?>