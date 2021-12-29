<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
  header("location:loginadmin.php");
}
?>  
<?php
//admin.php truyền dl sang
//deleteUsers.php nhận dữ liệu từ admin.php gửi sang
$ma_user = $_GET['id'];
//b1:kết nối database server
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
    die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
}
//b2:thực hiện truy vấn
$sql = "SELECT * FROM users where users_id=$ma_user ";

$result = mysqli_query($conn, $sql);
//B3:xử lí kết quả
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
//b4:đóng kết nối
mysqli_close($conn);

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
    <title>Sửa Thông Tin Người Dùng</title>
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Sửa Thông Tin Người Dùng</h5>
            <!-- Form thêm Dữ liệu nhân viên -->
            <form action="process-update-users.php" method="post">
                <div class="form-group">
                    <label for="txtHo">Id</label>
                    <input readonly type="text" class="form-control" id="txtId" name="txtId" placeholder="Id" value="<?php echo $row['users_id']; ?>">
                </div>
                <div class="form-group">
                    <label for="txtHo">Họ</label>
                    <input type="text" class="form-control" id="txtHo" name="txtHo" placeholder="Nhập Họ" value="<?php echo $row['first_name']; ?>">

                </div>
                <div class="form-group">
                    <label for="txtTen">Tên</label>
                    <input type="text" class="form-control" id="txtTen" name="txtTen" placeholder="Nhập Tên" value="<?php echo $row['last_name']; ?>">

                </div>

                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="Email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập Email" value="<?php echo $row['email']; ?>">
                </div>

                <div class="form-group">
                    <label for="txtPassword">Password</label>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập Password" value="<?php echo $row['password']; ?>">

                </div>
                <div class="form-group">
                    <label for="txtAge">Tuổi</label>
                    <input type="number" class="form-control" id=txtAge" name="txtAge" placeholder="Nhập Tuổi" value="<?php echo $row['age']; ?>">

                </div>
                <div class="form-group">
                    <label for="txtAddress">Địa chỉ</label>
                    <input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Nhập Địa chỉ" value="<?php echo $row['address']; ?>">

                </div>

                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>