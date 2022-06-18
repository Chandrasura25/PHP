<?php
session_start();
include 'dbcredentials.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password=$_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email'";

    $inserted = $connectdb->query($query);

if ($inserted->num_rows > 0) {
        $userDetail = $inserted->fetch_assoc();
        $hashedpass = $userDetail['password'];
        $verify=password_verify($password,$hashedpass);
      
        if($verify){
            $_SESSION['user_detail']=$userDetail;
            header('Location: dashboard.php');
        } 
        else{
            $_SESSION['detail_error']="Invalid password";
            header("Location:signin.php");
        }
        // echo "User exists";
    } else {
        $_SESSION['detail_error']="Invalid email";
        echo "Login failed, please try again later";
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
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap'); 
    </style>
   <div class="container-fluid">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <div class="row">
       <div class="col-4 my-5 mx-auto h-100">
       <div class="loader rounded-4">
        <div class="text-center" style="font-family: 'Oleo Script', cursive;">
        <h2>Instagram</h2>
        <h3>Sign In to your account</h3>
        </div>
       <input type="email" name="email" placeholder="Enter your Email or Username" class="form-control"/>
       <input type="password" name="password" placeholder="Enter your password" class="form-control">
       <input value="Sign In To Your Account" type="submit" name="submit"/>
       <p class="forget">Forgot Password? <a href="#">Click Here</a></p>
        <p class="forget">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div> 
       </div>
       </div>
       <?php
        if(isset($_SESSION['detail_error'])){
         echo $_SESSION['detail_error'];
        }
        ?>
   </form>
   </div> 
   <?php
    // session_unset();
    ?>
</body>
<script src="bootstrap.js"></script>
</html>