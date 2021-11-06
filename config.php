<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "login_pure_register_coding";

$conn = mysqli_connect($server, $username, $pass, $database);

if(!$conn){
    die("<script>alert('Connection Failed')</script>");
}

?>