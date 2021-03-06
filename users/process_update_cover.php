<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}

//Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "../assets/img/userImg/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','webp','jfif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $email=$_SESSION['LoginOK'];
            $sql = "UPDATE image_add SET isCover=0 where user_email='$email' and categories_id='1' ";
            $result=mysqli_query($db,$sql);


            $sql = "INSERT into image_add (imageAdd_link,user_email,categories_id,uploaded_on,isCover) VALUES ('".$fileName."','$email','1', NOW(),'1')";
            $insert=mysqli_query($db,$sql);
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                header("location:you.php");
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message


?>