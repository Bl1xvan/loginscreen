<?php

include 'config.php';
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
        <div class="col-sm-offset-4 col-sm-4">
            <div class="formcont" id="login">
                <form action="" method="POST" class="login-email">
                    <h2 class="text-center">Login</h2>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="email" name="email" value="<?php echo $email; ?>">
                    </div> 
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pwd" class="form-control" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember">Remember me</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    <br/>
                    <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>