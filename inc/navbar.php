<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light nav-border">


    <a href="index.php">
      <div class="navbar-brand">
          <img width='100%' height='100%' src="assets/images/logo/color-h.png" alt="">
      </div>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="navbar-collapse collapse" id="navbarSupportedContent">


        <ul class="navbar-nav mx-auto">
          <?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>
            <li class="nav-item">
                <a class="text-lightblue <?php if($actual_link == "http://localhost/kept/index.php" || $actual_link == "http://localhost/kept/index.php") echo "active-menu"; else ""; ?>" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
                <a class="text-lightblue <?php if($actual_link == "http://localhost/kept/newbox.php" || $actual_link == "http://localhost/kept/newbox.php") echo "active-menu"; else ""; ?>" href="newbox.php">สั่งสินค้า</a>
            </li>
            <li class="nav-item">
                <a class="text-lightblue <?php if($actual_link == "http://localhost/kept/payment.php" || $actual_link == "http://localhost/kept/payment.php") echo "active-menu"; else ""; ?>" href="payment.php">ชำระสินค้า</a>
            </li>
            <li class="nav-item">
                <a class="text-lightblue <?php if($actual_link == "http://localhost/kept/aboutus.php" || $actual_link == "http://localhost/kept/aboutus.php") echo "active-menu"; else ""; ?>" href="aboutus.php">เกี่ยวกับเรา</a>
            </li>
        </ul>

        <ul class="navbar-nav nav-r">
            <!--register button-->
 <li class="nav-item-r">
              <div class="nav-register <?php if($actual_link == "http://localhost/kept/register.php" || $actual_link == "http://localhost/kept/register.php") echo "active-r-menu"; else ""; ?>">
                <a class="text-black"  href="index.php">Register</a>
              </div>
            </li> 

            <!--login button-->
           <li class="nav-item-r">
              <div class="nav-login <?php if($actual_link == "http://localhost/kept/login.php" || $actual_link == "http://localhost/kept/login.php") echo "active-r-menu"; else ""; ?>">
                <a class="text-blue" href="productcategories.php">Login</a>
              </div>
            </li> 

          <!--loggedin button-->
<!--           <li class="nav-item-r">
              <div class="dropdown">
                  <button class="btn dropdown-toggle logged-in-button" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="profile-icon">
                        <img class="img-fluid" src="assets/images/avatar.png" alt="">
                      </div>
                 
                       <font class="text-blue profile-name"  id="profile-name">
                        Mana JaideeJaideeJaideeJaideeJaideeJaideeJaidee
                       </font>

                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                      <button class="dropdown-item py-2 text-grey" type="button" onclick="window.location.href='profile.php';">Edit Profile</button>
                      <button class="dropdown-item py-2 text-grey" type="button">Logout</button>
                  </div>
              </div>
          </li> -->


         </ul>

     </div>





</nav>
