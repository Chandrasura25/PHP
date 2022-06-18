<?php
include "dbcredentials.php";
session_start();

if (isset($_POST['submit'])) {
   // print_r($_FILES['myFile']);
   $fileName=$_FILES['myFile']['name'];

   $user_id =$_SESSION['user_details']['user_id'];
   $newName = time().$fileName;
   // echo $newName;
   $upload = move_uploaded_file($_FILES['myFile']['tmp_name'],"Uploads/".$newName);

  if ($upload){
     $query = "UPDATE users SET profile_pic = '$newName' WHERE user_id = $user_id";
     $insert=$connectdb->query($query);
     if($insert){
        echo "Uploaded successfully";
        header("Location:loginin.php");
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