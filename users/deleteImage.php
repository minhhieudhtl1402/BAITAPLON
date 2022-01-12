<?php
    session_start();
    if (!isset($_SESSION['LoginOK'])) {
        header("location:login.php");
    }
//nhận dữ liệu từ admin,php gửi sang 
$image_id = $_GET['id'];
//b1:kết nối database server
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
  die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
}
//b2:thực hiện truy vấn
$sql = "DELETE  FROM image_add where imageAdd_id = '$image_id'";
$number = mysqli_query($conn, $sql);

if ($number>0){
    header("location:you.php");
}
else{
     header("location:error.php");
}
?>
