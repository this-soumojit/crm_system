<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "tickets"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO user (name, email, contact, ticket) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $ticket);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $ticket = $_POST['ticket'];
    $stmt->execute();





    
    $stmt->close();

    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

echo " <div class='message'>
<p>Ticket Created Successfull..</p>
</div><br>";


$conn->close();
?>