<?php
//admin.php truyền dl sang
//deleteUsers.php nhận dữ liệu từ admin.php gửi sang
$ma_user=$_GET['id'];
//b1:kết nối database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          //b2:thực hiện truy vấn
          $sql = "DELETE FROM users where users_id=$ma_user ";
          
          $number=mysqli_query($conn,$sql);
          if($number>0)
          {
              header("location:users.php");
          }
          else{
              header(('location:error.php'));
          }
          

?>