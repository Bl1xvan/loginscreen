<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
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
            <h1>SIGN UP</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="formcont" id="signup" class="login-email">
                <form action="" method="POST">
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" id="username" class="form-control" placeholder="Enter Username" name="username" value="<?php echo $username ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $email ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $_POST['password'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Re-enter Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Re-enter Password" name="password" value="<?php echo $_POST['cpassword'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>