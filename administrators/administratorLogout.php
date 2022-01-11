<?php
    session_start();
if(isset($_SESSION['AdministratorLogin'])){
    unset($_SESSION['AdministratorLogin']);
    header('location:index.php');
}
?>