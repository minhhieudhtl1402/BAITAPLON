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
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'webp','jfif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $email = $_SESSION['LoginOK'];
            $sql = "UPDATE image_add SET isAvatar=0 where user_email='$email' and categories_id='2' ";
            $result = mysqli_query($db, $sql);

            $sql = "INSERT into image_add (imageAdd_link,user_email,categories_id,uploaded_on,isAvatar) VALUES ('" . $fileName . "','$email','2', NOW(),'1')";
            $insert = mysqli_query($db, $sql);
            echo $insert;
            if ($insert) {
                $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                header("location:you.php");
                echo $statusMsg;
            } else {
                $statusMsg = "File upload failed, please try again.";
                echo $statusMsg;
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
            echo $statusMsg;
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        echo $statusMsg;
    }
} else {
    $statusMsg = 'Please select a file to upload.';
    echo $statusMsg;
}
?>
// Display status message