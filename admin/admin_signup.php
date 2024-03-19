<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Signup/Registration</title>
</head>
<body>


<div class="split left">
<h1>Sign in to CRM</h1>
</div>

<div class="split right">
<form action="signup_connection.php" method="POST" >
<div class="container">
<label for="name"><b>Name</b></label>
<input type="text"  name="name" placeholder="Enter Name" required>

<label for="email"><b>Email</b></label>
<input type="text"  name="email" placeholder="Enter Email"required>

<label for="pass"><b>Password</b></label>
<input type="password"  name="password" placeholder="Enter Password" required>

<label for="psw-repeat"><b>Repeat Password</b></label>
<input type="password"  name="confirm_password" placeholder="Repeat Password" required>

<label for="contact"><b>Contact no.</b></label>
<input type="number"  name="contact" placeholder="Enter Contact" required>

<label for="gender"><b>Gender.</b></label>
<input type="radio" id="gender" name="gender" value="male" /> Male
<input type="radio" id="gender" name="gender" value="female" /> Female <br />

<button type="submit" class="signupbtn">Sign Up</button>
</div>
</div>
</div>



    
</body>
</html>