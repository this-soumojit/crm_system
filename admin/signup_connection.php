<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    if ($password != $confirm_password) {
        echo "Passwords do not match";
        exit();
    }
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $conn = mysqli_connect("localhost", "root", "", "for_admin");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO  admin_reg (name, email, password,contact,gender) VALUES ('$name', '$email', '$password','$contact','$gender')";
    $verify_query = mysqli_query($conn,"SELECT email FROM admin_reg WHERE email='$email'");
    if(mysqli_num_rows($verify_query)!=0){
        echo " <div class='message'>
                    <p>This email is already used ,Try another one Please!</p>
                </div><br>";

        echo "<a href='javascript:self.history.back()'><button class='button'>Go Back</button>";
    }else{
        if (mysqli_query($conn, $sql)) {
            // echo "Registration successful";
            echo " <div class='message'>
            <p>Registration Successfull..</p>
            </div><br>";
            echo "<a href='admin_signin.php'><button class='button'>Login</button>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }
    mysqli_close($conn);
}
?>
