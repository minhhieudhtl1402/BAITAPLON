<?php
include 'config.php';
if(isset($_POST['input'])){
    $input = $_POST['input'];
    $query = "select *from admins where admin_id like'%{$input}%' OR name like'%{$input}%' OR  pass like'%{$input}%'  OR administrator_id like'%{$input}%'"; 
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){?>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã admins</th>
            <th scope="col">Tên</th>
            <th scope="col">Mật Khẩu</th>
            <th scope="col">Mã administrators</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>


          </tr>
        </thead>
          <tbody>
              <?php

              while ($row = mysqli_fetch_assoc($result)){
                  $admin_id =$row['admin_id'];
                  $name =$row['name'];
                  $pass =$row['pass'];
                  $administrator_id =$row['administrator_id'];
                  ?>
                <tr>
                 <td><?php echo $row['admin_id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['pass']; ?></td>
                  <td><?php echo $row['administrator_id']; ?></td>
                  <td><a href="update_admins.php?id=<?php echo $row['admin_id']; ?>"><i class="bi bi-pencil-square text-black"></i></a></td>
                  <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="delete_admins.php?id=<?php echo $row['admin_id']; ?>"><i class="bi bi-trash text-black"></i></a></td>
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