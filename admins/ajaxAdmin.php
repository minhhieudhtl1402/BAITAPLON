<?php
include 'configAdmin.php';
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $query = "select *from users where users_id like'%{$input}%' OR first_name like'%{$input}%' OR  last_name like'%{$input}%' 
     OR email like'%{$input}%' OR password like'%{$input}%' OR age like'%{$input}%' OR registation_date like'%{$input}%' OR address like'%{$input}%'"; 
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){?>
        <table class="table">
        <thead>
          <tr>
          <th scope="col">Mã người dùng</th>
            <th scope="col">Họ</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Mật Khẩu</th>
            <th scope="col">Tuổi</th>
            <th scope="col">Ngày đăng kí</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>


          </tr>
        </thead>
          <tbody>
              <?php

              while ($row = mysqli_fetch_assoc($result)){
                  $users_id =$row['users_id'];
                  $first_name =$row['first_name'];
                  $last_name =$row['last_name'];
                  $email =$row['email'];
                  $password =$row['password'];
                  $age =$row['age'];
                  $registation_date =$row['registation_date'];
                  $address =$row['address'];
                  
                  ?>
                <tr>
                 <td><?php echo $row['users_id']; ?></td>
                 <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['registation_date']; ?></td>
                <td><?php echo $row['address']; ?></td>
                
              </tr> 
              <?php
              }
              ?>
          </tbody>
            </table>
          <?php
    }else{
        echo "<h6 class = 'text-danger text-center mt-3'> KHÔNG CÓ DỮ LIỆU </h6>";
    }
}
    ?>