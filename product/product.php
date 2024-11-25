<?php
session_start();
require_once "../configBacked/pages/connect.php";
$product = "select * from `item` where id>3";
$productRes = mysqli_query($conn,$product);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amul Product</title>
    <link rel="icon" href="../images/logo.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="product.css" />
  </head>
  <body>
    <div class="conatiner">
      <div class="circle" id="circle">
        <div class="item-info" style="--pclr: #ffa500" id="panchamrit">
          
        </div>
      </div>

      <div class="navigation">
        <img src="../images/logo.png" alt="" />
        <ul>
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

      <div class="product-hero-section">
        <div class="hero-products">
          <img src="../images/valvett.avif" alt="">
        </div>
        <img class="milk-img" src="../images/milk.png" alt="" />
      </div>
      <!-- cart text -->
      <div class="card-container" id="bottom">
        <h1>Handpicked for you</h1>
        <div class="card-body">
          <div class="card">
            <img src="../images/protein.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/organic.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/choco.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/infant.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/panchamrit.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/sports drink.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/milk uht.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/camel milk.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/honey.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/mithai.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/beverage.png" alt="" />
            <div class="view"></div>
          </div>

          <div class="card">
            <img src="../images/whipping.png" alt="" />
            <div class="view"></div>
          </div>
        </div>
      </div>

      <div class="popular-products">
        <div class="controls">
          <h1>Popular Products</h1>
          <div class="icons">
            <i
              id="left"
              class="fa-solid fa-circle-arrow-left"
              onclick="leftClick('product-container')"
            ></i>
            <i
              id="right"
              class="fa-solid fa-circle-arrow-left"
              onclick="rightClick('product-container')"
            ></i>
          </div>
        </div>

        <div class="product-container" id="product-container">
          <div class="product-body">
            <div class="product-card">
              <?php
                if(mysqli_num_rows($productRes)>0){
                  while($productData = mysqli_fetch_assoc($productRes)){

                    ?>
                                  <div
                class="card-item"
                style="--clr: <?php echo $productData['color']; ?>"
                onmouseenter="itemEnter('panchamrit','<?php echo $productData['id']; ?>','circle','<?php echo $productData['color']; ?>')"
                onmouseleave="itemLeave('panchamrit','<?php echo $productData['id']; ?>','circle')"
              >
                <div class="card-image-item">
                  <img src="../configBacked/<?php echo $productData['imgone']; ?>" alt="" />
                </div>
                <div class="card-description">
                  <h2><?php echo $productData['name']; ?></h2>
                  <h3>MRP <?php echo $productData['price']; ?></h3>
                  <div class="buy-cart">
                    <div class="cart buy-item">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <?php
                      if(isset($_SESSION['userid'])){
                        $uid = $_SESSION['userid'];
                        ?>
                      <a href="../configBacked/pages/process.php?pid=<?php echo $productData['id']; ?>&uid=<?php echo $uid; ?>">Add to Cart</a>

                        <?php
                      }else{
                        ?>
                      <a href="../amul login/login.php">Add to Cart</a>

                        <?php

                      }
                      ?>
                    </div>
                    <div class="buy buy-item">
                      <i class="fa-solid fa-bag-shopping"></i>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
              </div>
                    <?php
                  }
                }
              ?>

              <!-- Panchamrit -->
            </div>
          </div>
        </div>
      </div>

      <!-- About Products -->
      <div class="about">
        <h1>About</h1>
        <div class="about-content">
          <div class="about-image"></div>
          <div class="about-note">
            <h1>Know about Amul</h1>
            <div class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Consectetur exercitationem iste dolorum dolorem iusto ab hic
              deserunt. Ipsa ex voluptate magnam deleniti dicta soluta
              exercitationem fugit, incidunt asperiores iusto corrupti!
            </div>
            <div class="production">
              <div class="service">
                <h2>Dedicated service</h2>
                <div class="sub-title">
                  ptio modi delectus consequuntur consectetur sapiente!
                </div>
              </div>
              <div class="organic-ferm">
                <h2>Organic ferming</h2>
                <div class="sub-title">
                  ptio modi delectus consequuntur consectetur sapiente!
                </div>
              </div>
            </div>
            <div class="explor"></div>
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

          <h2>made with love by :The ABSK Coder</h2>
        </div>
      </footer>
    </div>

    <!-- footer -->

    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="product.js"></script>
  </body>
</html>
