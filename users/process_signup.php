<?php 
session_start();

// if(!isset($_POST['btnSignup'])){

//     header("location: signup.php");

// }
if(isset($_POST['txtEmail'])){
    $email=$_POST['txtEmail'];

}
    $fName= $_POST['txtName1'];
    $lName= $_POST['txtName2'];
    $age= $_POST['txtAge'];
    // $email=$_POST['txtEmail'];
    $pass=$_POST['txtPass'];
    $conn =mysqli_connect('localhost','root','','flickr');
    if(!$conn){
        die("kết nối thất bại!");
    }
    $sql1 = "SELECT * FROM users WHERE email = '$email' ";

    
    $result = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result) > 0){
        // $error = "Email is existed";
        // header("location: signup.php?error=$error"); 
        echo('<label class="text-danger" > <span class="glyphicon glyphicon-remove"></span> uhgehgo</label>');
        
    }else{
       
        $pass_hash= password_hash($pass ,PASSWORD_DEFAULT);
        $sql2= "INSERT INTO users(first_name, last_name, email, password, age) values ('$fName',' $lName','$email' ,'$pass_hash','$age' )";
        $result1 = mysqli_query($conn, $sql2);
        if($result1 == true){
           
            header("location:login.php");
        }
        
    }

    
    mysqli_close($conn);
    





?>