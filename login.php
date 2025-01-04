<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      
      <div class="title">
        <h2>Login</h2>
        <div id="logo"></div>
      </div>

      <div class="input-field">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      
      <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
      </div>
      <input type="submit" class="button" value="Log In">
      <div class="register">
        <p>Don't have an account? <a class="links" href="signup.php">Register</a></p>
      </div>
    
    </form>
  </div>
</body>
</html>
