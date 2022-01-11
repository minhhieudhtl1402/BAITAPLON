<?php
session_start();
if (!isset($_SESSION['AdminLogin'])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/users.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>MANAGE USERS</title>
</head>

<body>
  <div class="header">
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <!-- <h3>Xin chào <?php echo  $_SESSION['LoginOK'] = $name;; ?></h3> -->
            <a type="button" href="adminLogout.php" class="nav-item btn btn-lg btn-outline-info">Thoát<i class="bi bi-box-arrow-right ms-1"></i></a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <main>

    <div id="background" class="container-fluid ">
      <h5 class="text-center text-primary mt-5">Thêm mới Người Dùng</h5>
      <!-- Form thêm Dữ liệu nhân viên -->
      <form action="process-add-users.php" method="post">
        <div class="form-group">
          <label for="txtHo">Họ</label>
          <input type="text" class="form-control" id="txtHo" name="txtHo" placeholder="Nhập Họ">

        </div>
        <div class="form-group">
          <label for="txtTen">Tên</label>
          <input type="text" class="form-control" id="txtTen" name="txtTen" placeholder="Nhập Tên">

        </div>

        <div class="form-group">
          <label for="txtEmail">Email</label>
          <input type="Email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập Email">
        </div>

        <div class="form-group">
          <label for="txtPassword">Password</label>
          <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập Password">

        </div>
        <div class="form-group">
          <label for="txtAge">Tuổi</label>
          <input type="number" class="form-control" id=txtTuoi" name="txtAge" placeholder="Nhập Tuổi">

        </div>
        <div class="form-group">
          <label for="txtAddress">Địa chỉ</label>
          <input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Nhập Địa chỉ">

        </div>

        <button type="submit" id="btnSave" class="btn btn-primary mt-3">Lưu lại</button>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>