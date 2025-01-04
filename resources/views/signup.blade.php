<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Art Alley - Sign Up</title>
  <link rel="stylesheet" href="css/signup_style.css">
</head>
<body>
  <div class="signup-container">
    <div class="signup-box">
      <h2>Sign up</h2>
      <form action="#" method="post">
        <div class="input-field">
          <label for="full-name">Full Name</label>
          <input type="text" id="full-name" name="full-name" placeholder="Full Name" required>
        </div>
        <div class="input-field">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="yourname@domain.com" required>
        </div>
        <div class="row">
          <div class="input-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required>
          </div>
          <div class="input-field">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="••••••••" required>
          </div>
        </div>
        <div class="extras">
          <label><input type="checkbox"> I Am Artist</label>
        </div>
        <button type="submit" class="signup-btn">Create Account</button>
        <p class="login-link">or <a href="login">Log in</a></p>
      </form>
    </div>
  </div>
</body>
</html>
