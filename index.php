<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amul</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="full">
      <!-- header -->
      <div class="navigation">
        <img src="images/logo.png" alt="" />
        <ul>
          <li><i class="fa fa-home"></i><a href="">home</a></li>
          <li><i class="fa fa-info-circle"></i><a href="about/about.php">about</a></li>
          <input type="text" id="mysearch" placeholder="enter your query" />

          <i class="fa-solid fa-magnifying-glass" id="mysubmit"></i>

          <li><i class="fa fa-shopping-cart"></i><a href="cart/cart.php">cart</a></li>
          <?php
          if(isset($_SESSION['userid'])){
            ?>
          <li><i class="fa fa-address-book"></i><a href="amul login/profile.php">Profile</a></li>

            <?php

          }else{
            ?>
<li><i class="fa fa-address-book"></i><a href="amul login/login.php">login</a></li>
            <?php

          }
          ?>
          <li><i class="fa fa-question-circle"></i><a href="product/product.php">Products</a></li>
          <li><i class="fa fa-first-order"></i><a href="">order</a></li>
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
          <li><i class="fa fa-home"></i><a href="">home</a></li>
          <li><i class="fa fa-info-circle"></i><a href="about/about.php">about</a></li>

          <li><i class="fa fa-shopping-cart"></i><a href="cart/cart.php">cart</a></li>
          <?php
          if(isset($_SESSION['userid'])){
            ?>
          <li><i class="fa fa-address-book"></i><a href="amul login/profile.php">Profile</a></li>

            <?php

          }else{
            ?>
<li><i class="fa fa-address-book"></i><a href="amul login/login.php">login</a></li>
            <?php

          }
          ?>
          <li><i class="fa fa-question-circle"></i><a href="product/product.php">Products</a></li>
          <li><i class="fa fa-first-order"></i><a href="">order</a></li>
        </ul>
      </div>

      <!-- carousel -->
      <div class="carousel">
        <div class="list">
          <div class="item">
            <video src="videos/butter video.mp4" autoplay loop muted></video>
            <div class="back">
              <div class="content">
                <div class="author">AMUL</div>
                <div class="title">BUTTER</div>
                <div class="topic">Utterly<br />Butterly<br />Delicious!</div>
                <div class="des">
                  Experience the iconic taste of Amul Butter, cherished by
                  millions across India for its rich, creamy texture and
                  unmatched flavor. Made from pure and fresh cream, Amul Butter
                  has been a staple in households for generations. Whether
                  spread on bread, used in cooking, or enjoyed straight from the
                  pack, it adds a touch of magic to every meal. Discover the joy
                  of Amul Butter, the Taste of India.
                </div>
                <div class="buttons">
                  <button>See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <video src="videos/milk video.mp4" autoplay loop muted></video>
            <div class="back">
              <div class="content">
                <div class="author">AMUL</div>
                <div class="title">MILK</div>
                <div class="topic">
                  MOOCH<br />
                  NAHIN TOH<br />
                  KUCH NEHIN
                </div>
                <div class="des">
                  Enjoy the goodness of Amul Milk, a trusted choice for purity
                  and nutrition. Sourced from the finest dairy farms, Amul Milk
                  is packed with essential nutrients that support a healthy
                  lifestyle. Perfect for drinking, cooking, or adding to your
                  favorite beverages, Amul Milk ensures that you and your family
                  receive the best in every glass. Experience the freshness and
                  quality that has made Amul Milk a household favorite across
                  India.
                </div>
                <div class="buttons">
                  <button>See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <video src="videos/cream video.mp4" autoplay loop muted></video>
            <div class="back">
              <div class="content">
                <div class="author">AMUL</div>
                <div class="title">ICE CREAM</div>
                <div class="topic">
                  A Delight In<br />
                  Every Bite
                </div>
                <div class="des">
                  Indulge in the creamy, delightful flavors of Amul Ice Cream, a
                  treat loved by all ages. Made with the finest ingredients and
                  a commitment to quality, Amul Ice Cream offers a wide range of
                  flavors to satisfy every palate. From classic favorites to
                  innovative new tastes, every scoop promises a moment of pure
                  joy. Enjoy the rich, velvety texture and irresistible taste
                  that make Amul Ice Cream a sweet companion for any occasion.
                </div>
                <div class="buttons">
                  <button>See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <video src="videos/cool video.mp4" autoplay loop muted></video>
            <div class="back">
              <div class="content">
                <div class="author">AMUL</div>
                <div class="title">KOOL</div>
                <div class="topic">CHILL YOUR DIL!</div>
                <div class="des">
                  Quench your thirst with Amul Cool, the ultimate refreshment
                  that brings you the perfect blend of taste and nutrition.
                  Whether it's a hot summer day or a quick break, Amul Cool
                  offers a range of flavored milk beverages that are both
                  energizing and satisfying. Made from the finest ingredients
                  and packed with essential nutrients, Amul Cool is the
                  refreshing way to stay cool and hydrated. Experience the chill
                  with every sip of Amul Cool.
                </div>
                <div class="buttons">
                  <button>See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <video src="videos/ghee video.mp4" autoplay loop muted></video>
            <div class="back">
              <div class="content">
                <div class="author">AMUL</div>
                <div class="title">GHEE</div>
                <div class="topic">
                  GIVE YOUR FAMILY<br />THE TASTE OF<br />HAPPINESS
                </div>
                <div class="des">
                  Discover the richness of Amul Ghee, crafted from the finest
                  quality butter to bring you the authentic taste and aroma of
                  traditional ghee. Known for its purity and high nutritional
                  value, Amul Ghee is a versatile ingredient that enhances the
                  flavor of your dishes, from everyday meals to festive
                  delicacies. Embrace the golden goodness of Amul Ghee, a
                  trusted choice for generations, and add a touch of health and
                  tradition to your culinary creations.
                </div>
                <div class="buttons">
                  <button>See More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
          <div class="item">
            <img src="images/amul butter.jpeg" alt="" srcset="" />
          </div>
          <div class="item">
            <img src="images/amul milk.webp" alt="" srcset="" />
          </div>
          <div class="item">
            <img src="images/amul icecream.webp" alt="" srcset="" />
          </div>
          <div class="item">
            <img src="images/amul cool.jpeg" alt="" srcset="" />
          </div>
          <div class="item">
            <img src="images/amul ghee.webp" alt="" srcset="" />
          </div>
        </div>
        <!-- arrows -->
        <div class="arrows">
          <button id="prev"><</button>
          <button id="next">></button>
        </div>
        <div class="time"></div>
      </div>

      <div class="details">
        <div class="slide-1" id="slide">
          <div class="box">
            <img src="images/milk back det.jpg" alt="" srcset="" />
          </div>
          <div class="back">
            <div class="photo">
              <img src="images/milk det.png" alt="" srcset="" />
            </div>
            <div class="left" id="text">
              <span id="val">58</span><span id="unit">kcal</span><br />
              <span id="info">ENERGY</span>
            </div>
            <div class="right" id="text">
              <span id="val">0.0</span><span id="unit">g</span><br />
              <span id="info">SUGER</span>
            </div>
            <div class="bottom" id="text">
              <span id="val">110</span><span id="unit">mg</span><br />
              <span id="info">CALCIUM</span>
            </div>
          </div>
        </div>
        <div class="slide-2" id="slide">
          <div class="box">
            <img src="images/icecream back det.jpg" alt="" srcset="" />
          </div>
          <div class="back">
            <div class="photo">
              <img src="images/icecream det.webp" alt="" srcset="" />
            </div>
            <div class="left" id="text">
              <span id="val">331</span><span id="unit">kcal</span><br />
              <span id="info">ENERGY</span>
            </div>
            <div class="right" id="text">
              <span id="val">114</span><span id="unit">mg</span><br />
              <span id="info">CALCIUM</span>
            </div>
            <div class="bottom" id="text">
              <span id="val">4.9</span><span id="unit">g</span><br />
              <span id="info">PROTINE</span>
            </div>
          </div>
        </div>
        <div class="slide-3" id="slide">
          <div class="box">
            <img src="images/butter back det.jpg" alt="" srcset="" />
          </div>
          <div class="back">
            <div class="photo">
              <img src="images/butter det.png" alt="" srcset="" />
            </div>
            <div class="left" id="text">
              <span id="val">722</span><span id="unit">kcal</span><br />
              <span id="info">ENERGY</span>
            </div>
            <div class="right" id="text">
              <span id="val">0.0</span><span id="unit">g</span><br />
              <span id="info">SUGER</span>
            </div>
            <div class="bottom" id="text">
              <span id="val">650</span><span id="unit">mcg</span><br />
              <span id="info">Vitamin A</span>
            </div>
          </div>
        </div>
        <div class="slide-4" id="slide">
          <div class="box">
            <img src="images/choco back det.jpg" alt="" srcset="" />
          </div>
          <div class="back">
            <div class="photo">
              <img src="images/choco det.webp" alt="" srcset="" />
            </div>
            <div class="left" id="text">
              <span id="val">535</span><span id="unit">kcal</span><br />
              <span id="info">ENERGY</span>
            </div>
            <div class="right" id="text">
              <span id="val">6.2</span><span id="unit">g</span><br />
              <span id="info">PROTINE</span>
            </div>
            <div class="bottom" id="text">
              <span id="val">52.7</span><span id="unit">g</span><br />
              <span id="info">CARBOHYDRETES</span>
            </div>
          </div>
        </div>
      </div>

      <div id="achievement">
        <div class="container-achieve">
          <h1 class="sub-title">OUR ACHIVEMENTS</h1>
          <div class="achieve-list">
            <div class="sqare">
              <img
                src="https://amul.com/files/cms/RajivGandhiAward.jpeg"
                alt=""
                srcset=""
              />
              <div class="layer">
                <h3>Rajiv Gandhi National Quality Award - 1999</h3>
                <p>
                  The award which is considered equivalent of Malcolm Baldrige
                  National Quality Award of USA and European Quality Award, is
                  the most prestigious award which recognizes achievements of an
                  organization in terms of excellence in business results,
                  business processes, customer satisfaction as well as societal
                  and environmental impact.
                </p>
                <a href="#"
                  ><i class="fa-sharp fa-solid fa-up-right-from-square"></i
                ></a>
              </div>
            </div>
            <div class="sqare">
              <img
                src="https://amul.com/files/cms/ggaward.jpg"
                alt=""
                srcset=""
              />
              <div class="layer">
                <h3>Amul receives Green Globe Foundation Award</h3>
                <p>
                  The Gujarat Cooperative Milk Marketing Federation Ltd. (GCMMF)
                  - India's largest food products marketing organization and
                  apex body of dairy cooperatives of Gujarat – has won the
                  "Green Globe Foundation Award" in the Manufacturing Category
                  at the Delhi Sustainable Development Summit 2012 .
                </p>
                <a href="#"
                  ><i class="fa-sharp fa-solid fa-up-right-from-square"></i
                ></a>
              </div>
            </div>
            <div class="sqare">
              <img
                src="https://amul.com/files/cms/IAA_Awards_2019.jpg"
                alt=""
                srcset=""
              />
              <div class="layer">
                <h3>
                  Amul - Marketer of the year FMCG Food - IAA Leadership Award
                  2019
                </h3>
                <p>
                  Dr. R.S. Sodhi, Managing Director, GCMMF Ltd. received the IAA
                  Leadership Awards 2019 - Marketer of the year FMCG Food by IAA
                  (International Advertising Association - India Chapter) during
                  the 7th edition of the IAA Leadership Awards held on 26th July
                  , 2019 in Mumbai.
                </p>
                <a href="#"
                  ><i class="fa-sharp fa-solid fa-up-right-from-square"></i
                ></a>
              </div>
            </div>
            <div class="sqare">
              <img
                src="https://amul.com/files/cms/WDIA_2020_1.jpg"
                alt=""
                srcset=""
              />
              <div class="layer">
                <h3>World Dairy Innovation Awards - 2020 - Finalists</h3>
                <p>
                  The judging panel considered 245 entries from over 12
                  countries in 20 categories. FoodBev Media's marketing manager
                  said: "Despite all of the challenges we are facing around the
                  world right now we have seen a record number of entries in
                  this year’s World Dairy Innovation Awards." "This speaks
                  volumes for the strides that are being made in the dairy
                  industry, and it is fantastic to see so many companies from
                  every continent taking pride and celebrating your success.".
                </p>
                <a href="#"
                  ><i class="fa-sharp fa-solid fa-up-right-from-square"></i
                ></a>
              </div>
            </div>
          </div>
          <a href="#" class="btn">See more</a>
        </div>
      </div>

      <section>
        <div class="container-rev">
          <div class="container__left">
            <h1>Read what our customers love about us</h1>
            <p>
              Over 200 companies frim diverse sectors consult us to enhance the
              user experience of their products and services.
            </p>
            <p>
              We have helped companies increase their customer base and generate
              multifold revenue with our service.
            </p>
            <button>Read our success stories</button>
          </div>
          <div class="container__right">
            <div class="card">
              <img src="images/reveiw icon.png" alt="user" />
              <div class="card__content">
                <span><i class="ri-double-quotes-l"></i></span>
                <div class="card__details">
                  <p>
                    We had a great time collaboraring with the Filament team.
                    They have my high recommendation!
                  </p>
                  <h4>- Marnus Stephen</h4>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="images/reveiw icon.png" alt="user" />
              <div class="card__content">
                <span><i class="ri-double-quotes-l"></i></span>
                <div class="card__details">
                  <p>
                    The team drastically improved our product's user experience
                    & increased our business outreach.
                  </p>
                  <h4>- Andrew Jettpace</h4>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="images/reveiw icon.png" alt="user" />
              <div class="card__content">
                <span><i class="ri-double-quotes-l"></i></span>
                <div class="card__details">
                  <p>
                    I absolutely loved working with the Filament team. Complete
                    experts at what they do!
                  </p>
                  <h4>- Stacy Stone</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- footer -->
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
          <img src="images/logo.png" alt="" />
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

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://kit.fontawesome.com/27f8f9f2f9.js"
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
  </body>
</html>
