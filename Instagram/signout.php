<?php
include 'dbcredentials.php';
if (isset($_POST['signout'])) {
 session_unset();
 header('Location: signin.php');
}
?>