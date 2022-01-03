<?php
session_start();
if (!isset($_SESSION['LoginOK'])){
    header("location:login.php");
}
include("dbConfig.php");
if (!isset($_POST['btnWriteSomething'])) {
    $noidung = $_POST['writeSomething'];
}

$email = $_SESSION['LoginOK'];
$query = "UPDATE users set users_describe='$noidung' where email='$email'";
$result = mysqli_query($db, $query);
if($result){
    header("location:you.php"); 
}
else{
    header("location:error.php");
}
mysqli_close($db);

?>