<?php
session_start();
include 'dbcredentials.php';

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $hashpassword= password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (full_name,username, email, password,phone_no,address) VALUES ('$full_name','$username', '$email','$hashpassword','$phone_no','$address')";
    $inserted = $connectdb->query($query);
    if ($inserted) {
        $_SESSION['message']="Registration is successful";
        header('Location: signin.php');
    } else {
        $_SESSION['message']="Registration failed, please try again later";
    }
    
} else {
    echo "unsuccessful";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container-fluid">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <div class="row" style="height:80vh;">
       <div class="col-4 my-4 mx-auto h-100">
       <div class="loader rounded">
        <div class="text-center">
        <h2>Instagram</h2>
        <h3>Sign Up to your account</h3>
        </div>
       <input type="text" name="full_name" placeholder="Enter your fullname" class="form-control"/>
       <input type="text" name="username" placeholder="Enter your Username" class="form-control"/>
       <input type="email" name="email" placeholder="Enter your Email" class="form-control"/>
       <input type="text" name="password" placeholder="Enter your password" class="form-control">
       <input type="number" name="phone_no" placeholder="Enter your phone number" class="form-control"/>
       <input type="text" name="address" placeholder="Enter your Address" class="form-control"/>
       <input value="Sign Up" type="submit" name="submit"/>
        </div> 
       </div>
       </div>
       <?php
        if(isset($_SESSION['message'])){
         echo $_SESSION['message'];
        }
        ?>
   </form>
   </div> 
   <?php
    session_unset();
    ?>
</body>
<script src="bootstrap.js"></script>
</html>