<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amul About</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navigation">
        <img onclick="window.location.href='../index.php'" src="../images/logo.png" alt="" />
        <ul>
          <li><i class="fa fa-home"></i><a href="../index.php">home</a></li>
          <li><i class="fa fa-info-circle"></i><a href="">about</a></li>
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






    
    <div class="about">
        <div class="main">
            <div class="details">
              <span id="head">
                KNOW ABOUT AMUL
              </span>
              <p class="dtls">
                Founded in 1946, Amul is an iconic Indian dairy
                    cooperative brand managed by the Gujarat Co-operative Milk Marketing Federation Ltd. (GCMMF).
                    Amul, derived from the Sanskrit word 'Amulya'
                    meaning priceless, represents the ethos of
                    providing high-quality dairy Amul grew from
                    strength to strength thanks to the inspired
                    leadership of Tribhuvandas Patel, the founder
                    Chairman and the committed professionalism
                </p>
            </div>
            <div class="pic">
            </div>
              

        </div>
        <div class="icon">
            <div class="box">
                <img src="../images/factory-machine.png" class="i-img">
               <p id="title">Modern Diary</p>
            </div>
            <div class="box">
                <img src="../images/organic-product.png" class="i-img">
               <p id="title">Natural & <br> organics</p>
                
            </div>
            <div class="box">
                <img src="../images/milk.png" class="i-img">
               <p id="title">Best Products</p>
                
            </div>
            <div class="box">
                <img src="../images/badge.png" class="i-img">
                <p id="title">Awarded Farm</p>
                
            </div>
        </div>

    </div>

    <div class="container2">
        <div class="front">
            <span id="head1">OUR STORY</span>
            <p class="dtls1">
                     Amul, started in 1946 with two village societies and 247
                        litres of milk, grew under the leadership of
                        Tribhuvandas Patel and Dr. Verghese Kurien. Prime
                        Minister Lal Bahadur Shastri endorsed its success,
                        based on farmer ownership, elected management,
                        professional operations, and responsiveness to
                        farmers' needs. Today, Amul symbolizes quality and
                        empowerment in India's dairy industry.
            </p>
        </div>
        <div class="back">
            <div class="outer">
                <div class="slider">
                    <div class="slides">
                        <div class="slide"><img src="../images/amual1.jpg" alt="Image 1"></div>
                        <div class="slide"><img src="../images/amul 2.jpg" alt="Image 2"></div>
                        <div class="slide"><img src="../images/../images/amul3.jpg" alt="Image 3"></div>
                        <div class="slide"><img src="../images/amul4.webp" alt="Image 4"></div>
                        <div class="slide"><img src="../images/amul5.jpg" alt="Image 5"></div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        <footer>
            <div class="firstdata">
    <h1>Looking for Great Deals?
    </h1>
    <h1>Get the latest updates on new products and upcoming sales
    </h1>
    </div>
    <div class="search-andinput">
        <input type="text" placeholder="enail address" id="search-in" >
        <input type="submit" name="" id="search-sub">
    </div>
    <div class="fafa">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
        <i class="fa fa-youtube-play" aria-hidden="true"></i>
    
    </div>
    <div class="lastpart">
        <img src="../images/logo.png" alt="">
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
                    <td><a href="https://amul.com/m/about-us">About Us</a> </td>
                    <td>Return Policy</td>
                    <td>Wish List</td>
                </tr>
                <tr>
                    <td><a href="https://amul.com/m/sitemap"> FAQs</a> </td>
                    <td>Cancel Policy</td>
                    <td>Order History</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="contact-part">
            <table class="new-footer">
                <tr><th>contact us</th></tr>
                <td><i class="fa fa-envelope" aria-hidden="true"></i>
                 <a href="mailto:estore@amul.com">estore@amul.com</a></td>
                 <tr>
                    <td><i class="fa fa-phone" aria-hidden="true"></i>
    1800 258 3333                </td>
                 </tr>
            </table>
        </div>
        
        <h2>made with love by : The ABSK Coder</h2>
    </div>
    
    
        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
        <script src="https://kit.fontawesome.com/27f8f9f2f9.js" crossorigin="anonymous"></script>

<script src="about.js"></script>
</body>
</html>