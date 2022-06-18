<?php
include "dbcredentials.php";
session_start();
// $postDetail =$_SESSION['post_detail'];
$edit_id = $_POST['edit_id'];
$query = "SELECT * FROM `posts` WHERE post_id= '$edit_id'";

$inserted = $connectdb->query($query);

if ($inserted->num_rows > 0) {
    $editDetail = $inserted->fetch_assoc();
    print_r($editDetail);
}
else{

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
   <div class="row">
       <div class="col-4 my-4 mx-auto h-50">
       <div class="loader rounded">
        <div class="text-center">
        <h2>Instagram</h2>
        <h3>Edit your posts</h3>
        </div>
       <input type="text" name="post_title" placeholder="Enter your fullname" class="form-control"/>
       <input type="text" name="post_content" placeholder="Enter your Username" class="form-control"/>
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
</body>
<script src="bootstrap.js"></script>
</html>