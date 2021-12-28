<?php session_start();
    if(!isset($_SESSION['LoginOK'])){
        header("location:loginAD.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/users.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>MANAGE USERS</title>
</head>

<body>
  <div class="container-fluid">
    <div id="background" class="container-fluid bg-image">
      <h1 class="text-center  mb-5">Quản Lí Người Dùng </h1>
      <a href="add_users.php" class="btn btn-outline-primary">Thêm</a>
      
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
            <th scope="col">Xoá</th>

          </tr>
        </thead>
        <tbody>
          <?php
          //b1:kết nối database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <th scope="row"><?php echo $row['users_id']; ?></th>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['age']; ?>mdo</td>
                <td><?php echo $row['registation_date']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href=""><i class="bi bi-pencil-square text-black"></i></a></td>
                <td><a href="deleteUsers.php?id=<?php echo $row['users_id']; ?>"><i class="bi bi-trash text-black"></i></a></td>
              </tr>
          <?php
            }
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>