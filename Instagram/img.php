<?php
include "dbcredentials.php";
session_start();
$postDetail =$_SESSION['post_detail'];
if (isset($_POST['img'])) {
   $fileName=$_FILES['image_name']['name'];
   $image_title = $_POST['image_title'];
   $user_id =$_SESSION['user_detail']['user_id'];
   $image_name = time().$fileName;
   $post_id=$postDetail['post_id'];
   $upload = move_uploaded_file($_FILES['image_name']['tmp_name'],"ipost/".$image_name);

  if ($upload){
     $query = "INSERT INTO image (image_title,image_name,post_id) VALUES ('$image_title','$image_name','$post_id')";
     $insert=$connectdb->query($query);
     if($insert){
        echo "Uploaded successfully";
        header("Location:dashboard.php");
     }
     else {
        echo "Unable to upload";
     }
  }
  else{
      echo "uploads not successful";
  }
}
?>