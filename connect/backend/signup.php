<?php
// header("Access-Control-Allow-Origin:*");
// header("Access-Control-Allow-Methods:GET,POST,OPTIONS,PUT,DELETE");
// header("Access-Control-Allow-Headers:Content-Disposition,Content-Type,Content-Length,Accept-Encoding");
// header("Content-type:application/json");
include "dbconfig.php";
include 'dbcredentials.php';
$_POST=json_decode(file_get_contents("php://input"));

echo json_encode($_POST);
print_r($_POST);
session_start();
    $full_name = $_POST->fullname;
    $email = $_POST->email;
    $address = $_POST->address;
    $phone_no=$_POST->number;
    $password=$_POST->password;
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    if($full_name&&$email&&$address&&$phone_no&&$password){
    $query = "INSERT INTO users (full_name, email, address,phone_no,password) VALUES ('$full_name', '$email','$address','$phone_no','$hashpassword')";
    $inserted = $connectdb->query($query);
    if ($inserted) {
        echo json_encode($_POST);
    } else {
        echo "Registration failed, please try again later";
    }
} 
?> 