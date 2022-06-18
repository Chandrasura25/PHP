<?php
include "dbconfig.php";
include 'dbcredentials.php';
session_start();
$_POST=json_decode(file_get_contents("php://input"));
echo json_encode($_POST);

    $email = $_POST->email;
    $password=$_POST->password;
    echo ($email.$password);
    $query = "SELECT * FROM users WHERE email='$email'";
    $inserted = $connectdb->query($query);

if ($inserted->num_rows > 0) {
        $userDetails = $inserted->fetch_assoc();
        $hashedpass = $userDetails['password'];
        $verify=password_verify($password,$hashedpass);
        if($verify){
            $_SESSION['user_details']=$userDetails;
            echo('$verify');
        } 
        else{
            $_SESSION['details_error']="Invalid password";
            echo "invalid";
        }
    } else {
        $_SESSION['details_error']="Invalid email";
        echo "Login failed, please try again later";
    }
?>