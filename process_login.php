<?php 
session_start();

if(isset($_POST['btnLogin'])){
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPass'];
    $conn =mysqli_connect('localhost','root','','flickr');
    if(!$conn){
        die("kết nối thất bại!");
    }
    $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$pass'";

    
    $result = mysqli_query($conn,$sql);
    $rs= mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['LoginOK'] = $email;
         $_SESSION['nameuser']= $rs['first_name'];
         $_SESSION['age']= $rs['age'];
         $_SESSION['registation_date']= $rs['registation_date'];
        header("location: index.php"); 
       
    }else{
        $error = "Bạn nhập thông tin chưa chính xác";
        header("location: login.php?error=$error"); 
    }

    
    mysqli_close($conn);
    


}
else {
    header('location: index.php');
}



?>