<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // No checking — just redirect
    header("Location: /Summer-wbt-2025/Hotel_Reservation_System/php/receptionist.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Summer-wbt-2025/Hotel_Reservation_System/css/loginreceptionist.css">
  <title>Login</title>
</head>
<body>
  <div class="login-box">
    <div class="login-header"><header>Login</header></div>

    <!-- Always posts back here -->
    <form action="/Summer-wbt-2025/Hotel_Reservation_System/php/loginreceptionist.php" method="POST">
      <div class="input-box">
        <input type="text" class="input-field" name="email" placeholder="Email" autocomplete="off" required>
      </div>
      <div class="input-box">
        <input type="password" class="input-field" name="password" placeholder="Password" autocomplete="off" required>
      </div>

      <div class="forgot">
        <section>
          <input type="checkbox" id="check" name="remember">
          <label for="check">Remember me</label>
        </section>
        <section><a href="#">Forgot password?</a></section>
      </div>

      <div class="input-submit">
        <button type="submit" class="submit-btn">Sign In</button>
      </div>

      <div class="sign-up-link">
        <p>Don't have an account? <a href="#">Sign Up</a></p>
      </div>
    </form>
  </div>
</body>
</html>
