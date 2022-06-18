<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form action="inject.php" method="POST">
                        <div class="inputBox">
                            <input type="text" name="email" placeholder="Enter your Email" id="">
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" placeholder="Enter your Password" id="">
                        </div>
                        <?php
                         session_start();
                         if(isset($_SESSION['details_error'])){
                             echo $_SESSION['details_error'];
                         }
                        ?>
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Login" id="">
                        </div>
                        <p class="forget">Forgot Password? <a href="#">Click Here</a></p>
                        <p class="forget">Don't have an account? <a href="#">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    // session_unset();
    ?>
</body>
</html>