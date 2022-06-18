<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $name . $email . $password;
    //    echo 'Submitted';
} else {
    echo 'fill the form';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="container mt-4">
        <div class="col-9 mx-auto">
            <div class="row shadow-lg" style="height: 60vh;">
                <div class="col-6 bg-primary">

                </div>
                <div class="col-6">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <h4 class="display-5">Simple Registration Form</h4>
                        <div class="form-group">
                            <label for="name">Fullname:</label>
                            <input type="text" class="form-control" placeholder="Enter fullname" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>