<?php
session_start();
include 'dbcredentials.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['password'];
    $query = "SELECT * FROM users WHERE email=?";
    $queryDb=$connectdb->prepare($query);
    $binder=$queryDb->bind_param('s',$email);
    $inserted =$queryDb->execute();
    if ($inserted) {
    $result=$queryDb->get_result()->fetch_assoc();
    echo 'successfully';
    print_r($result);
    $_SESSION['user_details']=$result;
    }  
    else{
    echo "failed";
}
}
else{
    echo "unsuccessful";
}
?>