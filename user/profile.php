
<?php
session_start();
if(isset($_SESSION['login_user'])) {
  $conn = mysqli_connect("localhost", "root", "", "demo");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $email = $_SESSION['login_user'];

  $sql = "SELECT * FROM registration WHERE email = '$email'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $name = $row['name'];
      $email = $row["email"];
      $contact = $row['contact'];
      $gender = $row['gender'];

      $conn->close();
  } else {
      echo "No user found with the username: " . $username;
  }
} else {
 
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
   /* Container Styles */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Heading Styles */
h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Card Styles */
.card {
    background-color: #f9f9f9;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    text-align: left;
}

.card h3 {
    font-size: 20px;
    margin-top: 0;
}

.card p {
    margin: 10px 0;
}

.card p strong {
    font-weight: bold;
    margin-right: 5px;
}

/* Button Styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn:hover {
    opacity:0.8;
}

/* Logout Button Styles */
.logout {
    margin-top: 20px;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome, <?php echo $name?>!</h2>
    <div class="card">
      <h3>Your Profile</h3>
      <p><strong>Username:</strong> <?php echo $name?></p>
      <p><strong>Email ID:</strong><?php echo $email?></p>
      <p><strong>Gender:</strong><?php echo $gender?></p>
      <p><strong>Contact:</strong><?php echo $contact?></p>
      
      
    </div>
    <br>
    <br>
    <a href="logout.php" class="btn logout">Logout</a>
    
  </div>
</body>
</html>
