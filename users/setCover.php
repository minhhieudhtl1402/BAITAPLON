<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}
$image_id = $_GET['id'];
$email=$_SESSION['LoginOK'];
//b1:kết nối database server
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
  die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
}
//b2:thực hiện truy vấn
$sql="UPDATE image_add SET isCover=0 where user_email='$email'";
$result=mysqli_query($conn,$sql);

$sql = "UPDATE image_add SET isCover=1 where imageAdd_id = '$image_id'";
$number = mysqli_query($conn, $sql);
if($number){
    header("location:you.php");
}
else{
    header("location:error.php");
}



?>