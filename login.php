<?php
session_start();
include 'dbcredentials.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['password'];
    // echo $full_name . $email .$address .$phone_no;
    $query = "SELECT * FROM users WHERE email='$email'";

    $inserted = $connectdb->query($query);
    // echo $inserted;
if ($inserted->num_rows > 0) {
        $userDetails = $inserted->fetch_assoc();
        $hashedpass = $userDetails['password'];
        $verify=password_verify($password,$hashedpass);
        // echo($verify);
        if($verify){
            $_SESSION['user_details']=$userDetails;
            // print_r($userDetails);
            header('Location: dashboard.php');
        } 
        else{
            $_SESSION['details_error']="Invalid password";
            header("Location:login.php");
        }
        // print_r($userDetails);
        echo "User exists";
    } else {
        $_SESSION['details_error']="Invalid email";
        echo "Login failed, please try again later";
    }
    
} else {
    echo "unsuccessful";
}
?>