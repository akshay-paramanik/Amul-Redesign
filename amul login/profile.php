<?php
session_start();
require_once "../configBacked/pages/connect.php";
if(isset($_SESSION['userid'])){
  $id = $_SESSION['userid'];
  $sql = "select * from `user` where id=$id";
  $res = mysqli_query($conn,$sql);
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
      <h1>Profile Info</h1>
      <?php
    if($res){
      $data = mysqli_fetch_assoc($res);
      ?>
      <form action="../configBacked/pages/process.php" method="post">
        <label for="">Name</label>
        <input type="text" name="fname" value="<?php echo $data['fname']." ".$data['lname']; ?>" placeholder="First name" disabled />
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" placeholder="E-mail" disabled />

        <label for="">Mobile Number</label>
        <input type="tel" name="phone" value="<?php echo $data['mobile']; ?>" placeholder="Mobile number" disabled />
        <label for="">Pin code</label>
        <input type="tel" name="pin" value="<?php echo $data['pincode']; ?>" placeholder="Pin code" disabled />
        <label for="state">Select a state</label>
        <input type="text" value="<?php echo $data['state']; ?>"
        disabled>

        <label for="">District</label>
        <input type="text" name="district" value="<?php echo $data['district']; ?>" placeholder="District" disabled />
        <label for="">Address</label>
        <input type="text" name="address" value="<?php echo $data['address']; ?>" placeholder="Address" disabled />
        <label for="">City</label>
        <input type="text" name="city" placeholder="City" value="<?php echo $data['email']; ?>"
        disabled />
      </form>
      <?php
    }
      ?>
      </div>
    </div>
  </body>
</html>
<?php
}else{
  header("location:login.php");
}
?>