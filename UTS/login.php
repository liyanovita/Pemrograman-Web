<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Check username and password (dummy example)
if ($username === 'user' && $password === 'password') {
  $_SESSION['username'] = $username;
  setcookie('login_cookie', 'true', time() + (86400 * 30), "/"); // Cookie lasts for 30 days
  echo 'Login successful';
} else {
  echo 'Invalid username or password';
}
?>
