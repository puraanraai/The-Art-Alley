<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Art Alley - Login</title>
  <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <h2>Log in</h2>
      <form action="#">
        <div class="input-group">
          <label for="username"><i class="fas fa-user"></i> Username</label>
          <input type="text" id="username" placeholder="Username">
        </div>
        <div class="input-group">
          <label for="password"><i class="fas fa-lock"></i> Password</label>
          <input type="password" id="password" placeholder="Password">
        </div>
        <div class="extras">
          <label><input type="checkbox"> Remember Me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit">Log In</button>
        <p>or <a href="signup">Sign Up</a></p>
      </form>
    </div>
  </div>
</body>
</html>
