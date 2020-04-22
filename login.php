<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container text-white">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control text-white" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control text-white" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>Regisgter Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password Confirm</label>
                        <input type="password" name="passwordConfirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>

</html>