<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>

</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="index.php">
            <div class="text">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text">
                <input type="password" required>
                <label>Password</label>
                <span></span>
            </div>
            <div class="pass">Forgot Password ?</div>
            <a href="./login.php"><input type="submit" value="Login"></a>
            <div class="signup">
                Already a Member? <a href="./register.php">Sign up</a>
            </div>
        </form>
    </div>
</body>
</html>