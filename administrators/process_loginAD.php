<?php 
session_start();

if(isset($_POST['btnLogin'])){
    $name=$_POST['txtName'];
    $pass=$_POST['txtPass'];
    $conn =mysqli_connect('localhost','root','','flickr');
    if(!$conn){
        die("kết nối thất bại!");
    }
    $sql = "SELECT * FROM admins WHERE name = '$name' AND pass='$pass'";

    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        
        $_SESSION['LoginOK'] = $name;
        header("location: admin.php"); 
    }else{
        $error = "Bạn nhập thông tin chưa chính xác";
        header("location: loginAD.php?error=$error"); 
    }

    
    mysqli_close($conn);
    


}
else {
    header('location:admin.php');
}



?>