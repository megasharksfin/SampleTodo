<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="stylesheet" href="./assets/styles/create-user.css">
  <script src="./assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="./assets/js/script.js" type="text/javascript"></script>
  <title> Sample Todo </title>
</head>
<body>
  <div class="scroll">
    <form class="wrapper" action="../backend/create-user-query.php" method="post">
      <h2> Create User </h2>
      <div class="horizontal-rule"></div>
      <span id="error" class="error"></span>
      <!-- full name -->
      <div class="form-wrapper">
        <label for="full-name"> Full Name </label>
        <input
          type="text"
          class="textfield"
          placeholder="Full Name"
          name="full-name"
          id="full-name"
          required>
      </div>
      <!-- username -->
      <div class="form-wrapper">
        <label for="username"> Username </label>
        <input
          type="text"
          name="username"
          class="textfield"
          placeholder="Username"
          id="username"
          required>
      </div>
      <!-- password -->
      <div class="form-wrapper">
        <label for="password"> Password </label>
        <input
          type="password"
          name="password"
          class="textfield"
          placeholder="Password"
          id="password"
          minlength="8"
          maxlength="16"
          required>
      </div>
      <!-- verify -->
      <div class="form-wrapper">
        <label for="verify"> Verify Password </label>
        <input
          type="password"
          name="verify"
          placeholder="Verify Password"
          class="textfield"
          id="verify"
          required>
      </div>
      <!-- submit button -->
      <button type="submit" class="submit-button" name="submit" id="user_submit"> Submit </button>
    </form>
  </div>
</body>
</html>