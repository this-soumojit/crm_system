
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
  <title>Welcome to CRM</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 30px;
      text-align: center;
    }
    h1 {
      color: #333;
    }
    p {
      color: #666;
      line-height: 1.6;
    }
    .btn {
      display: inline-block;
      background-color:#04AA6D;
      color: #fff;
      padding: 12px 30px;
      border-radius: 25px;
      text-decoration: none;
      transition: background-color 0.3s;
      font-size: 16px;
      margin-top: 20px;
    }
    .btn:hover {
      opacity:0.8;
    }
    .features {
      list-style: none;
      padding: 0;
      text-align: left;
      margin-top: 30px;
    }
    .features li {
      margin-bottom: 10px;
    }
    .features li::before {
      content: "\2022";
      color: #007bff;
      font-weight: bold;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Our CRM Platform</h1>
    <p>Hello <?php echo $name ?>!</p>
    <p>We're delighted to have you on board. Your journey with our CRM platform begins now. Below are some key features and resources to help you get started:</p>
    <ul class="features">
      <li>Dashboard: Get an overview of your tasks, leads, opportunities, and more at a glance. Customize your dashboard to suit your preferences and priorities.</li>
      <li>Contacts: Manage your contacts efficiently. Keep track of interactions, notes, and important details to strengthen your relationships.</li>
      <li>Leads: Convert prospects into customers seamlessly. Track leads through the sales pipeline and nurture them effectively.</li>
      <li>Opportunities: Capitalize on every opportunity. Monitor deals, analyze pipelines, and close more sales with ease.</li>
      <li>Tasks: Stay organized and productive. Create, assign, and prioritize tasks to ensure nothing falls through the cracks.</li>
      <li>Reports: Gain valuable insights into your business performance. Generate reports to analyze trends, identify opportunities, and make data-driven decisions.</li>
      <li>Settings: Customize your CRM experience. Adjust settings, permissions, and preferences to match your unique requirements.</li>
    </ul>
    <p>Need assistance? Our support team is available to help you. Feel free to contact us at [contact information].</p>
    <p><strong>Explore, Engage, Excel</strong></p>
    <a href="dashboard.php" class="btn">Get Started</a>
  </div>
</body>
</html>
