<?php
include '../backend/login-query.php';
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
  <div class="scroll">
    <div class="wrapper">
      <!-- header -->
      <h2> Sample Todo Application </h2>
      <div class="horizontal-rule"></div>
      <span class="error" id="login-error"> <?php echo $errorMessage; ?> </span>
      <form method="post" class="login-form">
        <!-- username field -->
        <div class="form-wrapper">
          <label for="username"> Username </label>
          <input type="text" name="username" id="username" class="textfield" placeholder="Input username here" required>
        </div>
        <!-- password field -->
        <div class="form-wrapper">
          <label for="password"> Password </label>
          <input type="password" name="pass" id="pass" class="textfield" placeholder="Input password here" required>
        </div>
        <div class="button-wrapper">
          <!-- submit button -->
          <button type="submit" class="submit-button" name="login"> Login </button>
          <a href="./create-user.php"> Create User </a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>