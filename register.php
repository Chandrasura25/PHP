<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "rowed_db";
$connectdb = new mysqli($host,$username,$password,$dbName);

if ($connectdb->connect_error) {
  die ("Unable to connect".$connectdb->connect_error);
} else {
    echo "connection is successful";
}

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    // echo $full_name . $email .$address .$phone_no;
    $query = "INSERT INTO users (full_name, email, address,phone_no,password) VALUES ('$full_name', '$email','$address','$phone_no','$hashpassword')";
    $inserted = $connectdb->query($query);
    echo $inserted;
    if ($inserted) {
        echo "Registration is successful";
    } else {
        echo "Registration failed, please try again later";
    }
    
} else {
    echo "unsuccessful";
}
?>