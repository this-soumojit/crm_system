<?php
session_start();
unset($_SESSION['login_user']);
session_destroy();
header("Location:sign_in.php");
?>