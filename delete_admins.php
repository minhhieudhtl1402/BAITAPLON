<?php
//nhận dữ liệu từ admin,php gửi sang
$admins_id = $_GET['id'];
          //b1:kết nối database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          //b2:thực hiện truy vấn
          $sql = "DELETE  FROM db_admins where admins_id = $admins_id";
          $number = mysqli_query($conn, $sql);
          if ($number>0){
              header(location:admins.php);
          }
          else{
              header(location:error.php);
          }

          
 ?>