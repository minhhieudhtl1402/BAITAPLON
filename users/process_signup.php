<?php 
session_start();
   $fName= $_POST['txtName1'];
    $lName= $_POST['txtName2'];
    $age= $_POST['txtAge'];
    $email=$_POST['txtEmail'];
   $pass=$_POST['txtPass'];
if(isset($_POST['btnSignup'])){
    if (isset($_POST['txtEmail']) && $_POST['txtEmail'] != ''){
        include "send_email.php";
        if(SendEmailForAccountActive($_POST['txtEmail'])){
            
        //    echo "Tài khoản của bạn đã đăng ký thành công. Vui lòng kiểm tra Email";
    header("location:check_email.php");
    $conn =mysqli_connect('localhost','root','','flickr');
    if(!$conn){
        die("kết nối thất bại!");
    }
    $sql1 = "SELECT * FROM users WHERE email = '$email' ";

    
    $result = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result) > 0){
        $error = "Email is existed";
        header("location: signup.php?error=$error"); 
        echo('<label class="text-danger" > <span class="glyphicon glyphicon-remove"></span> uhgehgo</label>');
        
    }else{
       
        $pass_hash= password_hash($pass ,PASSWORD_DEFAULT);
        $sql2= "INSERT INTO users(first_name, last_name, email, password, age) values ('$fName',' $lName','$email' ,'$pass_hash','$age' )";
        $result1 = mysqli_query($conn, $sql2);
        if($result1 == false){
            header("location:error.php");
        }
        
    }
    mysqli_close($conn);
}
        else{
            echo "Xin lỗi. Email chưa được gửi...";
    }
}
}
?>
