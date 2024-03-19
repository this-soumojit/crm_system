<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tickets - CRM</title>
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
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      color: #333;
    }

    .Ticket-list {
      list-style-type: none;
      padding: 0;
    }

    .Ticket-item {
      background-color: #f8f9fa;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .Ticket-item h2 {
      color: #333;
      margin-bottom: 5px;
    }

    .Ticket-item p {
      color: #666;
      margin: 0;
    }

  input[type="text"]{
    width:90%;
    padding:15px;
    border:none;
    background: #f1f1f1;

}
button{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
}


button:hover{
    opacity:1;
}

.signupbtn{
    /* float:left; */
    width:25%;

}
</style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Ticket</h1>
    </div>
    <ul class="Ticket-list">
      <li class="Ticket-item">
        <h2>Ticket </h2>
        <p>Description of Ticket</p>
        <br>
        <br>
        <form action="ticket_check.php" method="POST">
        <label for="name"><b>Name</b></label>
        <input type="text"  name="name" placeholder="Name" required>
        <label for="email"><b>Email</b></label>
        <input type="text"  name="email" placeholder="Email" required>
        <label for="contact"><b>Contact</b></label>
        <input type="text"  name="contact" placeholder="Contact" required>
        <label for="ticket"><b>Service-required</b></label>
        <input type="text"  name="ticket" placeholder="Service-required" required>
        <br>
        <br>
        <button type="submit" class="signupbtn">Submit</button>
        </form>
      </li>
      

      <!-- <li class="Ticket-item">
        <h2>Ticket 2</h2>
        <p>Description of Ticket 2</p>
      </li>
      <li class="Ticket-item">
        <h2>Ticket 3</h2>
        <p>Description of Ticket 3</p>
      </li> -->
      <!-- Add more Ticket items here -->
    </ul>
  </div>
</body>
</html>
