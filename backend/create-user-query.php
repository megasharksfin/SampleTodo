<?php
// start session for interpage data transfer
session_start();
// call dbcon for database connection
include 'db-conn.php';

// instantiate variables that will be used to store form values from html
$fullName = $username = $password = $verify = "";


if (isset($_POST['submit'])) { // ibig sabihin neto, pag pinindot yung button na may name na login 
  // kunin yung mga values galing html
  // dapat tatawagin yung name na naka indicate dun sa html tapos i-aassign sa variable na ininstantiate sa taas
  // proper naming convention ng variable sa php is naka camel case pero you can name variables in any way you want
  $fullName = $_POST['full-name'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  // backend check if fields are empty
  if (
    !empty($firstName) ||
    !empty($lastName) ||
    !empty($username) ||
    !empty($password) ||
    !empty($verify)
  ) {
    // hash password for security
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    // call mysqli_query function to insert values into database
    mysqli_query($con,
      "INSERT INTO users (username, password, fullname)
      VALUES ('$username', '$pass_hash', '$fullName')");

    // if no database connection was made, throw error message
    if (!$con) {
      die("Database connection failed: " . mysqli_connect_error());
    }
    else {
    // proceed to index once successful
    header('Location:../backend/index.php');
    }
  }
}
?>