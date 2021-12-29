<?php
    session_start();
if(isset($_SESSION['AdminLogin'])){
    unset($_SESSION['AdminLogin']);
    header('location:loginadmin.php');
}
?>
