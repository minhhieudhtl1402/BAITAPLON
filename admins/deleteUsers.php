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
          $query="SELECT * FROM users WHERE users_id ='$ma_user'";
          $result=mysqli_query($conn,$query);
          if(mysqli_num_rows($result)>0)
          {
            $ketquaxoa=0;
            $row=mysqli_fetch_assoc($result);

            $email=$row['email'];
            

            //Xoá ảnh của ng dùng trong bảng image_add
            $sql="DELETE FROM image_add where user_email='$email'";
            $number=mysqli_query($conn,$sql);
            
            if($number>0)
            {
              $ketquaxoa++;
            }
            else{
              header(('location:error.php'));
            }
                
          //Xoá danh sách follow và following của ng dùng
          $sql="DELETE FROM follow where users_id='$ma_user'";
            $number=mysqli_query($conn,$sql);
            
            if($number>0)
            {
              $ketquaxoa++;
            }
            else{
              header(('location:error.php'));
            }
            

            $sql="DELETE FROM follow where following_id='$ma_user'";
            $number=mysqli_query($conn,$sql);
            
            if($number>0)
            {
              $ketquaxoa++;
            }
            else{
              header(('location:error.php'));
            }
            
            //Xoá user trong bảng users
            $sql="DELETE FROM users where users_id='$ma_user'";
            $number=mysqli_query($conn,$sql);
            
            if($number>0)
            {
              $ketquaxoa++;
            }
            else{
              header(('location:error.php'));
            }
            
            if($ketquaxoa==4){

              header("location:users.php");
            }
   }
?>