<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./asset/image/unicorn.png"
      type="image/x-icon"
    />
    <title>Welcome to Unicorn Software Solutions</title>
    <script src="./asset/scripts/jquery.min.js"></script>
    <link rel="stylesheet" href="./asset/css/style.css" />
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./asset/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="./asset/css/animation-style.css" />
  </head>

  <body>
    <!-- preloader -->

    <?php $past=5; $present=date("y"); $serviceYear=$present-$past; ?>

    <div id="preloader">

      <div class="loader">
        <span>{</span>
        <!-- <p>ussbd</p> -->
        <span>}</span>
      </div>

      
    </div>

    <!-- header html  -->
    <header>
      <div class="header container-lg text-uppercase">
        <div class="head">
          <div class="head-item">
            <div class="logo">
              <a class="lg-device" href="/"
                ><img
                  src="./asset/image/unicorn-removebg-preview.png"
                  alt="logo"
              /></a>
              <a class="sm-device" href="/"
                ><img
                  src="./asset/image/unicorn-removebg-preview.png"
                  alt="logo"
              /></a>
            </div>
            <div class="navber">
              <div class="nav-burger-icon">
                <i class="cngIcon bi bi-list"></i>
              </div>
              <div class="nav-list">
                <div class="nav-items">
                  <a href="/" class="nav-item"> home </a>
                  <a href="about-us.php" class="nav-item"> about us </a>
                  <a href="portfolio.php" class="nav-item"> portfolio </a>
                  <a href="service.php" class="nav-item"> service </a>
                  <a href="blog.php" class="nav-item" style="display: none">
                    blog
                  </a>
                  <a href="contact.php" class="nav-item"> contact </a>
                </div>
              </div>
            </div>
            <div class="login">
              <div class="login-section">
                <div class="login-icon">
                  <a href="#">
                    <i class="bi bi-person-circle"></i><span>login</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
