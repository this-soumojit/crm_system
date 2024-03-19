<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login/Sign up Form</title>
   
</head>
<body>
  
<div class="split left">
    <h1>Sign in CRM</h1>
    <a link href="sign_up.php" style="text-decoration:none">Sign up Now</a> <h7>,for a free account</h7>
</div>
<div class="split right">
<div class="container">
<form action="signin_check.php" method="POST">
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>

<label for="pass"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>

<button type="submit" class="signupbtn">Login</button>

</div>
</form>
</div>
</div>
    
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <form action="signin_check.php" method="POST" class="form">
            <h2>Sign In</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Sign In</button>
        </form>
    </div>
</body>
</html> -->
