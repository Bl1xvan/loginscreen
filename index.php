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
    <div class="col-sm-6 text-center bg-primary">
        <div class="form-cont">
            <form action="/action.php">
                <h2>Login</h2>
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
                <button type="submit" class="btn btn-default">
            </form>
        </div>
    </div>
    <div class="col-sm-6 text-center bg-info">
        <div class="form-cont">
            <form action="/action.php">
                <h2>Sign Up</h2>
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
                <button type="submit" class="btn btn-default">
            </form>
        </div>
    </div>
    </div>
</body>
</html>