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
        <h1>Register</h1>
        <form method="POST" action="login.php">
            <div class="text">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text">
                <input type="email" required>
                <label>E-mail</label>
                <span></span>
            </div>
            <div class="text">
                <input type="password" required>
                <label>Password</label>
                <span></span>
            </div>
            <div class="text">
                <input type="password" required>
                <label>Confirm Password</label>
                <span></span>
            </div>
            
            <input type="submit" value="Register">
            <div class="signup">
                Not a Member? <a href="login.php">Sign in</a>
            </div>
        </form>
    </div>
</body>
</html>