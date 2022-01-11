<?php
$con = mysqli_connect("localhost","root","","flickr");
if(!$con){
    echo"connection failed" . mysqli_connect_error();
}
?>