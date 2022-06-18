<?php
include "dbcredentials.php";
session_start();

if (isset($_POST['file'])) {
   $fileName=$_FILES['img']['name'];

   $user_id =$_SESSION['user_detail']['user_id'];
   $newName = time().$fileName;
   $upload = move_uploaded_file($_FILES['img']['tmp_name'],"img/".$newName);

  if ($upload){
     $query = "UPDATE users SET profile_pic = '$newName' WHERE user_id = $user_id";
     $insert=$connectdb->query($query);
     if($insert){
        echo "Uploaded successfully";
        header("Location:signin.php");
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