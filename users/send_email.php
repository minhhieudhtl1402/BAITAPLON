<?php
 $username= 'phamdinh23022001@gmail.com';
 $password='lqxldijlnkzopiem';
 $email=$_POST['txtEmail'];
//khai báo thư viện
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

 function SendEmailForAccountActive($email){

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
// function SendEmail(){
    global $username;
    global $password;
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;    
    $mail ->CharSet = 'utf-8'    ;                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Flickr@gmail.com', 'Flickr'); //tên ng gửi
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Flickr-Verify your account';
    $mail->Body    = 'Chào mừng bạn đến với Flickr.com. Chào mừng bạn đến với Flickr.com. Để sử dụng tài khoản vui lòng nhấp <a href ="http://localhost/BAITAPLON/users/login.php">Đăng nhập</a> để kích hoạt ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()){
        return true;
    }
    
   } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}
?>