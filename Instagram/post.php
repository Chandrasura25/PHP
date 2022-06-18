<?php
session_start();
include 'dbcredentials.php';
$userDetail =$_SESSION['user_detail'];

if (isset($_POST['posts'])) {
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $user_id=$userDetail['user_id'];
    $query = "INSERT INTO posts (post_title,post_content,user_id) VALUES ('$post_title','$post_content','$user_id')";
    $inserted = $connectdb->query($query);
    if ($inserted) {
        $_SESSION['post']="Post is successful";
        header('Location: dashboard.php');
    } else {
        $_SESSION['post_error']="Posting failed, please try again later";
    }
    
} else {
    echo "unsuccessful";
}
?>