<?php
session_start();
if(isset($_SESSION['userid'])){
  header("location:../index.php");
}else{
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="signin.css" />
  </head>
  <body>
    <div class="login-container">
      <h1>Login</h1>
      <form action="../configBacked/pages/action.php" method="post">
        <input type="email" name="email" placeholder="enter your email" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <button type="submit" name="login" class="primary">Login</button>
      </form>
      <a href="/forgot-password">Forgot Password?</a>
      <span id="account">create account?</span><a href="signup.php">Sign Up</a>
      <div class="error">
        <!-- Error messages will be displayed here -->
      </div>
    </div>
  </body>
</html>
<?php
}
?>