<?php
session_start();
$userDetails=$_SESSION['user_details'];
print_r($userDetails);
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
    <div class="container">
        <div class="row mt-3">
            <div class="col-9 mx-auto shadow">
                <div class="row">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Welcome <?php echo $userDetails['full_name']?> </h5>
                        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="myFile" id="">
                        <input type="submit" value="Submit" class="form-control" name="submit">
                        </form>
                      </div>
                    </div>
                </div>
                <div class="col-5">
                    <img src='<?php echo "Uploads/{$userDetails['profile_pic']}"?>' style="height:200px; width:200px;" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>