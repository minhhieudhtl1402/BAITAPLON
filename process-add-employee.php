<?php
// Xử lý giá trị GỬI TỚI
if (isset($_POST['txtHo'])) {
    $ho = $_POST['txtHo'];
}

$ten = $_POST['txtTen'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$age = $_POST['txtAge'];
$address = $_POST['txtAddress'];

// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost', 'root', '', 'flickr');
if (!$conn) {
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql = "INSERT INTO users (first_name,last_name,email,password,age,address) VALUES ('$ho','$ten','$email','$password','$age','$address')";
// echo $sql;
$ketqua = mysqli_query($conn, $sql);

if (!$ketqua) {
    header("location: error.php"); //Chuyển hướng lỗi
} else {
    header("location: users.php"); //Chuyển hướng lại Trang Quản trị
}

// Bước 03: Đóng kết nối
mysqli_close($conn);
?>