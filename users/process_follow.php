<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
  header("location:login.php");
}
$Users_id= $_POST['txtUsers_id'];
$Following_id=$_POST['txtFollowing_id'];
include 'dbConfig.php';
$query="INSERT INTO follow(users_id,following_id) VALUES('$Users_id','$Following_id')";
$result=mysqli_query($db,$query);


  if ($result){
      header("location:profile.php?id=$Following_id");
  }
  else{
      header("location:error.php");
  }



?>
