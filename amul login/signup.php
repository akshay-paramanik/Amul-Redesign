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
      <form action="../configBacked/pages/process.php" method="post">
        <input type="text" name="fname" placeholder="First name" required />
        <input type="text" name="lname" placeholder="Last name" required />
        <input type="email" name="email" placeholder="E-mail" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <input type="tel" name="phone" placeholder="Mobile number" required />
        <input type="tel" name="pin" placeholder="Pin code" required />
        <label for="state">Select a state</label>
        <select name="state" id="state">
          <option value="AndhraPradesh">Andhra Pradesh</option>
          <option value="ArunachalPradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="HimachalPradesh">Himachal Pradesh</option>
          <option value="JammuKashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="MadhyaPradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="TamilNadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="UttarPradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="WestBengal">West Bengal</option>
                 
        </select>

        <input type="text" name="district" placeholder="District" required />
        <input type="text" name="address" placeholder="Address" required />
        <input type="text" name="city" placeholder="City" required />

        <button type="submit" class="primary" name="signup">Login</button>
      </form>
      <a href="/forgot-password">Forgot Password?</a>
      <span id="account">Have already account?</span
      ><a href="login.html">Log in</a>
      <div class="error">
        <!-- Error messages will be displayed here -->
      </div>
    </div>
  </body>
</html>
<?php
}
?>