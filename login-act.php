<?php
include 'include/conn.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = $db->query("SELECT * FROM saw_users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: dashboard.php");
} else {
    header("location: login.php");
}
?>
