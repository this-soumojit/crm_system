<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "tickets"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user details are provided via GET request
if(isset($_GET['email'])) {
    $email = $_GET['email'];

    // Prepare and execute SQL statement to retrieve tickets for the given email
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any tickets are found for the given email
    if ($result->num_rows > 0) {
        // Output tickets
        echo "<h2>Your Tickets:</h2>";
        while($row = $result->fetch_assoc()) {
            echo "<p><strong>Ticket:</strong> " . $row["id"] . "</p>";
            echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Contact:</strong> " . $row["contact"] . "</p>";
            echo "<p><strong>Service Required:</strong> " . $row["ticket"] . "</p>";
            // Add more fields if necessary
            echo "<hr>";
        }
    } else {
        echo "No tickets found for this email.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tickets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
            text-align: center;
        }
        p {
            margin: 5px 0;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #21825C;
        }
    </style>
</head>
<body>
    <h1>View Tickets</h1>
    <p>Please enter your email to view your tickets:</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <input type="text" name="email" placeholder="Your Email" required>
        <button type="submit">View Tickets</button>
    </form>
</body>
</html>
