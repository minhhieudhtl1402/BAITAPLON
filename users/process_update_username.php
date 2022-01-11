<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}
if(isset($_POST['txtFirstName']) && isset($_POST['txtLastName']))
{
     include 'dbConfig.php';
     $firstName=$_POST['txtFirstName'];
     $lastName=$_POST['txtLastName'];
    $email = $_SESSION['LoginOK'];
    $query = "UPDATE users SET first_name='$firstName',last_name='$lastName'  WHERE email='$email' ";
    $result = mysqli_query($db, $query);
    mysqli_close($db);
    if ($result) {
        header("location:you.php");
    } else {
        header("location:error.php");
    }
    
    
}


?>