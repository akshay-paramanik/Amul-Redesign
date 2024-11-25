<?php
require_once "../configBacked/pages/connect.php";
session_start();
if(isset($_SESSION['userid'])){
  $id=$_SESSION['userid'];
  $sql = "select * from `cart` where user_id=$id";
  $res = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($res);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amul cart</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <link rel="stylesheet" href="cart.css" />
  </head>
  <body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
              <img onclick="window.location.href='../index.php'" src="../images/logo.png" alt="" />
            </div>
            <ul>
              <li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
              <li><i class="fa fa-shopping-cart"></i><a href="../product/product.php">Product</a></li>
              <div class="search">
                <input type="text" name="" id="" placeholder="enter your mind" />
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <li><i class="fa fa-info-circle"></i><a href="../about/about.php">About</a></li>
              <?php
                if(isset($_SESSION['userid'])){
                  ?>
          <li><i class="fa fa-address-book"></i><a href="../amul login/profile.php">Profile</a></li>

                  <?php
                }else{
                  ?>
          <li><i class="fa fa-address-book"></i><a href="../amul login/login.php.php">Profile</a></li>

                  <?php

                }
              ?>
              <li><i class="fa fa-address-book"></i><a href="">Contact</a></li>
            </ul>
          </div>

          <div id="nav-item">
        <div class="logo">
          <img src="../images/logo.png" alt="" />
        </div>
        <div class="search">
          <input type="text" placeholder="enter your query" />
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <i id="menu" class="fa-solid fa-bars"></i>
        <ul id="list">
        <i id="close-item" class="fa-solid fa-xmark"></i>
        <li><i class="fa fa-home"></i><a href="../index.php">home</a></li>
          <li><i class="fa fa-info-circle"></i><a href="../about/about.php">about</a></li>
          <input type="text" id="mysearch" placeholder="enter your query" />

          <i class="fa-solid fa-magnifying-glass" id="mysubmit"></i>

          <li><i class="fa fa-shopping-cart"></i><a href="../cart/cart.php">cart</a></li>
          <?php
          if(isset($_SESSION['userid'])){
            ?>
          <li><i class="fa fa-address-book"></i><a href="../amul login/profile.php">Profile</a></li>
            <?php

          }else{
            ?>
            <li><i class="fa fa-address-book"></i><a href="../amul login/login.php">login</a></li>
                        <?php
            
                      }
                      ?>
          <li><i class="fa fa-first-order"></i><a href="">order</a></li>
          <li><i class="fa fa-question-circle"></i><a href="">help</a></li>
        </ul>
      </div>

      <div class="main">
        <div class="cart-container">
          <div class="heading-place">
            <h2>Cart items</h2>
            <span>Address</span>
          </div>
          <!-- Cart 1 -->
           <?php
           if($count>0){
            while($data = mysqli_fetch_assoc($res)){
              $pid = $data['item_id'];
              $psql = "select * from `item` where id=$pid";
              $pres = mysqli_query($conn,$psql);
              if(mysqli_num_rows($pres)>0){
                $pdata = mysqli_fetch_assoc($pres);
              
              ?>
          <div class="cart-box">
          <div class="box-item">
            <div class="image-container">
              <img src="../configBacked/<?php echo $pdata['imgone']; ?>" alt="" />
            </div>
            <div class="text-part">
              <div class="description">
                <?php echo $pdata['name']; ?>
              </div>
              <div class="price">
            <span class="final-price">
                  <i class="fa-solid fa-indian-rupee-sign"></i> <?php echo $pdata['price']; ?></span
                >
               
              </div>
              <div class="external-part">
                <div class="quantity">
                  <span class="decrement">-</span>
                  <input type="number" name="" id="" value="1" />
                  <span>+</span>
                </div>
            
                <span class="Remove">Remove</span>
              </div>
            </div>
          </div>
        </div>
        <?php
              }
            }
           }
           ?>
      </div>
      </div>
      </div>
      <footer>
        <div class="firstdata">
          <h1>Looking for Great Deals?</h1>
          <h1>Get the latest updates on new products and upcoming sales</h1>
        </div>
        <div class="search-andinput">
          <input type="text" placeholder="enail address" id="search-in" />
          <input type="submit" name="" id="search-sub" />
        </div>
        <div class="fafa">
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-instagram" aria-hidden="true"></i>
          <i class="fa fa-linkedin" aria-hidden="true"></i>
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </div>
        <div class="lastpart">
          <img src="/images/logo.png" alt="" />
          <div class="footer-container">
            <table class="footer-table">
              <tr>
                <th>Links</th>
                <th>Policies</th>
                <th>Accounts</th>
              </tr>
              <tr>
                <td><a href="https://amul.com/m/careers"> Career</a></td>
                <td>Refund Policy</td>
                <td><a href="https://shop.amul.com/"> My Account</a></td>
              </tr>
              <tr>
                <td><a href="https://amul.com/m/about-us">About Us</a></td>
                <td>Return Policy</td>
                <td>Wish List</td>
              </tr>
              <tr>
                <td><a href="https://amul.com/m/sitemap"> FAQs</a></td>
                <td>Cancel Policy</td>
                <td>Order History</td>
              </tr>
            </table>
          </div>
          <hr />
          <div class="contact-part">
            <table class="new-footer">
              <tr>
                <th>contact us</th>
              </tr>
              <td>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <a href="mailto:estore@amul.com">estore@amul.com</a>
              </td>
              <tr>
                <td>
                  <i class="fa fa-phone" aria-hidden="true"></i> 1800 258 3333
                </td>
              </tr>
            </table>
          </div>

          <h2>made with love by :<h1>The ABSK Coder</h1></h2>
        </div>
      </footer>
    </div>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script src="cart.js"></script>
  </body>
</html>
<?php
}else{
  header("location:../amul login/login.php");
}
?>