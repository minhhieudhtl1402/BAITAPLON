<?php
session_start();
if (!isset($_SESSION['AdministratorLogin'])) {
  header("location:loginAdministrator.php");
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
  <title>QUẢN LÝ ADMINS</title>
</head>

<body>
  <div class="container-fluid">
    <div id="background" class="container-fluid bg-image">
      <h1 class="text-center  mb-5">QUẢN LÝ ADMINS </h1>
      <button type="button" class="btn btn-outline-primary"><a href="add_admins.php">Thêm</a></button>
      <?php echo  $_SESSION['AdministratorLogin']; ?>
          <a type="button" href="administratorLogout.php" class="nav-item btn btn-lg btn-outline-info">Thoát<i class="bi bi-box-arrow-right ms-1"></i></a>
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
          //b1:kết nối database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
          }
          //b2:thực hiện truy vấn
          $sql = "SELECT * FROM admins";
          $result = mysqli_query($conn, $sql);
          //b3:xử lí kq truy vấn
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <th scope="row"><?php echo $row['admin_id']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td>********</td>
                <td><?php echo $row['administrator_id']; ?></td>

                <td><a href="update_admins.php?id=<?php echo $row['admin_id'];?>"><i class="bi bi-pencil-square text-black"></i></a></td>
                <td><a href="delete_admins.php?id=<?php echo $row['admin_id']; ?>"><i class="bi bi-trash text-black"></i></a></td>
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