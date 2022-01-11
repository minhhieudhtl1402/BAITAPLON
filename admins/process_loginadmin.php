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
   
    $rs=mysqli_fetch_array($result);
    echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        
       $pass_hash = $rs['pass'];
       echo password_verify($pass,$pass_hash);
        if(password_verify($pass,$pass_hash)){
            $_SESSION['AdminLogin'] = $name;
            
            header("location: users.php"); 

        
        }
        else
        {
            header('location: error.php');
        }
       
    }else{
        $error = "Bạn nhập thông tin chưa chính xác";
        header("location: index.php?error=$error"); 
    }

    
    mysqli_close($conn);
}
else {
    header('location: users.php');
}
?>