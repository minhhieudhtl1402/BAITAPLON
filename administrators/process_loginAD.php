<?php 
session_start();

if(isset($_POST['btnLogin'])){
    $name=$_POST['txtName'];
    $pass=$_POST['txtPass'];
    $conn =mysqli_connect('localhost','root','','flickr');
    if(!$conn){
        die("kết nối thất bại!");
    }
    $sql = "SELECT * FROM administrators WHERE name = '$name' and pass ='$pass' ";
    $result = mysqli_query($conn,$sql);
    $rs=mysqli_fetch_array($result);



    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        
             $_SESSION['AdministratorLogin'] = $name;
             
             header("location: admins.php");       
            echo "da chay toi day"; 
        
        
     }else{
        
         $error = "Bạn nhập thông tin chưa chính xác";
         header("location: index.php?error=$error"); 
     }
 
     
     mysqli_close($conn);
 }
 else {
     header('location: admins.php');
    
 }
 ?>

