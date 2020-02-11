<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="stylesheet" href="./assets/styles/login.css">
  <script src="./assets/js/jquery-3.4.1.min.js"></script>
  <script src="./assets/js/script.js"></script>
  <title> Sample Todo </title>
</head>
<body>
  <h1> <?php echo $_SESSION['fullname']; ?> </h1>
</body>
</html>