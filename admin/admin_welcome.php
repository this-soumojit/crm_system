<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Admin - CRM System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    p {
      color: #666;
      margin-bottom: 40px;
    }

    .btn-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      display: inline-block;
      padding: 15px 30px;
      background-color:#04AA6D;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
      margin: 10px;
      font-size: 18px;
      border: none;
      cursor: pointer;
    }

    .btn:hover {
        opacity:0.8;
    }

    .logout-btn {
      background-color: #dc3545;
    }

    .logout-btn:hover {
      background-color: #c82333;
    }

    .info-box {
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-top: 30px;
      text-align: left;
    }

    .info-box h2 {
      color: #333;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .info-box p {
      color: #666;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome Admin</h1>
    <p>You are now logged in as an admin. What would you like to do?</p>
    <div class="btn-container">
      <a href="dashboard.php" class="btn">Go to Dashboard</a>
      <a href="analytics.html" class="btn">View Analytics</a>
      <a href="settings.html" class="btn">Settings</a>
      <a href="logout.php" class="btn logout-btn">Logout</a>
    </div>
    <div class="info-box">
      <h2>Latest Updates</h2>
      <p>Check out the latest changes and updates in the CRM system.</p>
      <a href="#" class="btn">View Updates</a>
    </div>
    <div class="info-box">
      <h2>Need Help?</h2>
      <p>If you have any questions or need assistance, feel free to contact our support team.</p>
      <a href="#" class="btn">Contact Support</a>
    </div>
  </div>
</body>
</html>
