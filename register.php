<?php


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
    <meta name="viewport" content="width=        <div class="col-sm-6">
            <div class="formcont" id="signup">
                <form action="/action.php">
                    <h2 class="text-center">Sign Up</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Enter Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Re-enter Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="Re-enter Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>