<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="about.php" class="footer-nav__link">The brand</a>
              </li>
              <li class="footer-nav__item">
                <a href="localstore.php" class="footer-nav__link">Local stores</a>
              </li>
              <li class="footer-nav__item">
                <a href="terms.php" class="footer-nav__link">Terms of business</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="checkout.php" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="cart.php" class="footer-nav__link">View cart</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading"></div>
            
          </div>

          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Head Office: KMD India.<br>
            NILHAT HOUSE
            5TH FLOOR , ROOM NO : 46
            11 R.N MUKHERJEE ROAD
            KOLKATA - 700 001
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:9830793946, 79903 02683">9830793946, 79903 02683</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:23cs019@charusat.edu.in" class="email__addr">23cs019@charusat.edu.in</a>
            </div>
          </div>

        </div>
      </div>

      
    </footer>
</body>

</html>
