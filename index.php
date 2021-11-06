<?php

include 'config.php';
session_start();

error_reporting(0);

if(isset($_SESSION['username'])){
    header("Location: welcome.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND  password = '$password'";
    $result = mysql_query($conn, $sql);
    
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
     }else{
         echo "<script>alert('Wrong username or password')</script>";
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="page-header text-center">
            <h1>WELCOME</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="formcont" id="login">
                <form action="/action.php">
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Enter Password" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="formcont" id="signup">
                <form action="/action.php">
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Enter Password" name="pwd">
                    </div>
                    <div class="form-group">
                        <label for="password">Re-enter Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Re-enter Password" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>