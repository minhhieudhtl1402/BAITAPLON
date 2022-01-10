<?php
if (isset($_POST['txtUsers_id']) & isset($_POST['txtFollowing_id'])) {
    $Users_id = $_POST['txtUsers_id'];
    $Following_id=$_POST['txtFollowing_id'];

}
        include 'dbConfig.php';
        $query="DELETE FROM follow WHERE users_id='$Users_id' and following_id='$Following_id'";
        $result=mysqli_query($db,$query);
          if ($result){
              header("location:profile.php?id=$Following_id");
          }
          else{
              header("location:error.php");
          }
?>