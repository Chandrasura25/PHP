<?php
$host = "localhost";
$username = "root";
$password = "";
$dbName = "instagram";
$connectdb = new mysqli($host,$username,$password,$dbName);

if ($connectdb->connect_error) {
  die ("Unable to connect".$connectdb->connect_error);
} else {
    // echo "connection is successful";
}
?>