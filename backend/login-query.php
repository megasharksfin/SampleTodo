<?php
// start session
session_start();
// get db conn for database connection in SQL query
include 'db-conn.php';

$errorMessage = '';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  // check if username is correct
  $sqlQuery = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
  $userData = mysqli_fetch_array($sqlQuery);

  if (empty($userData)) {
    $errorMessage = 'Username is incorrect.';
    return; // stop execution of function
  }

  // assign password hash from database to a variable
  $hash = $userData['password'];

  // check if password is correct once username has been validated
  if (!password_verify($pass, $hash)) {
    $errorMessage = 'Password is incorrect.';
    return; // stop execution of function
  }

  // store userData to session for later usage
  $_SESSION['fullname'] = $userData['fullname'];

  // clear error message
  $errorMessage = '';
  
  // redirect to main menu after successful login
  header('Location:../frontend/main.php');
}
?>