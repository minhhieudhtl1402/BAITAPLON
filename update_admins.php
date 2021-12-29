<?php
//admin.php truyền dl sang
//deleteUsers.php nhận dữ liệu từ admin.php gửi sang
$ma_admin = $_GET['id'];
//b1:kết nối database server
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
    die("Kết nối thất bại.Vui lòng kiểm tra lại các thông tin máy chủ");
}
//b2:thực hiện truy vấn
$sql = "SELECT * FROM admins where admin_id=$ma_admin ";

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
    <link rel="stylesheet" href="assets/css/admins.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Sửa Thông Tin Quản Lý</title>
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Sửa Thông Tin Quản Lý</h5>
            <form action="process-update-admins.php" method="post">
                <div class="form-group">
                    <label for="txtId">Id</label>
                    <input readonly type="text" class="form-control" id="txtId" name="txtId" placeholder="Admin_id" value="<?php echo $row['admin_id']; ?>">
                </div>
                <div class="form-group">
                    <label for="txtTen">Tên</label>
                    <input type="text" class="form-control" id="txtTen" name="txtTen" placeholder="Name" value="<?php echo $row['name']; ?>">

                </div>
                <div class="form-group">
                    <label for="txtPass">Pass</label>
                    <input type="pass" class="form-control" id="txtPass" name="txtPass" placeholder=" Pass" value="<?php echo $row['pass']; ?>">

                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>