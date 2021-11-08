<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_pure_register_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die("<script>alert('Connection Failed')</script>");
}

?>
