<?php
include "dbcredentials.php";
session_start();
$postDetail =$_SESSION['post_detail'];
if (isset($_POST['del'])) {
    $del_id = $_POST['del_id'];
    $query = "DELETE FROM posts WHERE post_id= '$del_id'";
    $deleted = $connectdb->query($query);
    if ($deleted) {
        echo "Record deleted successfully";
        header('Location: dashboard.php');
    } else {
        $_SESSION['post_error']="Posting failed, please try again later";
    }
} else {
    echo "unsuccessful";
}
?>