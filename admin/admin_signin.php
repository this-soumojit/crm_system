<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Login/Sign up Form/Admin</title>
   
</head>
<body>
  
<div class="split left">
    <h1>Sign in CRM as an Admin.</h1>
    <a link href="admin_signup.php" style="text-decoration:none">Sign up Now</a> <h7>,for a free Admin account</h7>
</div>
<div class="split right">
<div class="container">
<form action="signin_connection.php" method="POST">
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