<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "for_admin");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admin_reg WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            $_SESSION['login_user'] = $email;
            header("location: admin_welcome.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }
}

    mysqli_close($conn);




?>
