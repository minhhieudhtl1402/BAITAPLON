<?php
   $admin_id = $_POST['txtid_admin'];
   $name = $_POST['txtTen'];
   $password = $_POST['txtPass'];
          //nhận dữ liệu từ admin,php gửi sang 
          $admin_id = $_GET['id'];
          //b1:kết nối database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          //b2:thực hiện truy vấn
          $sql = "INSERT INTO admins (admin_id,name,pass) VALUES ('$admin_id','$name','$password')";
          $number = mysqli_query($conn, $sql);
          if ($number>0){
              header("location:admins.php");
          }
          else{
              header("location:error.php");
          }
?>