<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - CRM System</title>
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
      background-color: #04AA6D;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
      margin: 10px;
      font-size: 16px;
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
  </style>
</head>
<body>
  <div class="container">
    <h1>Dashboard</h1>
    <p>Welcome to your CRM Dashboard. Here you can manage your customers and interactions.</p>
    <div class="btn-container">
      <a href="Customers.php" class="btn">View Customers</a>
      <a href="service.php" class="btn">Analytics</a>
      <a href="logout.php" class="btn logout-btn">Logout</a>
    </div>
  </div>
</body>
</html>
