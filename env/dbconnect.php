<?php

use Dotenv\Dotenv;

require realpath("vendor/autoload.php");
$dotenv= Dotenv::createImmutable(__DIR__);
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// echo $_ENV['HOST'];
$con =new mysqli($_ENV['HOST'],$_ENV['USERNAME'],$_ENV['PASSWORD'],$_ENV['DBNAME']);
if($con->connect_error){
    die ("Unable to connect".$con->connect_error);
} else {
    echo "connection is successful";
}
?>