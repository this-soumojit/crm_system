<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <title>CRM Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 40px;
    }

    .header h1 {
      color: #333;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .section {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .section:hover {
      transform: translateY(-5px);
    }

    .section h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .data {
      font-size: 20px;
      font-weight: bold;
      color: #551A8B;
    }

    .data:hover {
      opacity: 0.8;
    }

    /* .data-icon {
      font-size: 24px;
      margin-right: 10px;
    } */

    .data-container {
      display: flex;
      align-items: center;
    }
    a {
    text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>CRM Dashboard</h1>
    </div>
    <div class="grid">
    <div class="section">
        <h2>Profile</h2>
        <a href="profile.php">
        <div class="data-container">
          <!-- <span class="data-icon">&#xf406;</span> -->
          <span class="data-icon">&#128100;</span>
          <div class="data">View Profile</div>
        </div>
        </a>
      </div>
      <div class="section">
        <h2>Tickets</h2>
        <a href="tickets.php"><div class="data-container">
          <span class="data-icon">&#x1F4CB;</span>
          <div class="data">Create Ticket</div>
        </div></a>

      </div>

      <div class="section">
        <h2>View Tickets</h2>
        <a href="view_tickets.php"><div class="data-container">
          <span class="data-icon">&#x1F4CB;</span>
          <div class="data">View</div>
        </div></a>
      </div>
      
      <div class="section">
        <h2>Opportunities</h2>
        <div class="data-container">
          <span class="data-icon">&#x1F4B0;</span>
          <div class="data">15</div>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>
