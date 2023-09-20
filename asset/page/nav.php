<div class="header" id="top">
  <div class="topContactInfo">
    <!-- <div class="leftTop">
                <a href="mailto:#">abusid@ussbd.com</a>
                <a href="tel:+880">+8801797-459533</a>
                <address>474-Nirala-Khulna</address>
            </div>
            <div class="rightTop">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div> -->
  </div>
  <!-- here the navber start  -->
  <div class="headerNav">
  <img src="../image/unicorn.png" class="sLogo" title="UNICORN SOFTWARE AND SOLUTION" alt="">
    <img
      class="logo"
      src="../image/unicorn-removebg-preview.png"
      alt="logo"
      title="UNICORN SOFTWARE AND SOLUTION"
    />
    <div class="navb" id="navber">
      <ul>
        <a href="../index.php" title="Home Page">
          <li>Home</li>
        </a>
        <a href="./about.php" title="About Us">
          <li>About</li>
        </a>
        <a href="./portfolio.php" title="Our Portfolio">
          <li>Portfolio</li>
        </a>
        <a href="./serve.php">
          <li>Service</li>
        </a>
        <a href="./shop.php">
          <li>Shop</li>
        </a>
        <a href="./contact.php">
          <li>Contact</li>
        </a>
      </ul>
    </div>
    <button
      onclick="navfunction()"
      class="btn btn-warning resMenu mt-4 h3 h-50 px-3 mx-2"
    >
      <i class="bi bi-chevron-double-down">Menu</i>
    </button>
  </div>
</div>

<div
  style="position: fixed; bottom: 5%; right: 5%; font-size: 45px; z-index: 1"
>
  <a href="#top">
    <i class="bi bi-file-arrow-up"></i>
  </a>
</div>

<script>
  function navfunction() {
    if (document.getElementById("navber").style.display === "block") {
      document.getElementById("navber").style.display = "none";
    } else {
      document.getElementById("navber").style.display = "block";
    }
  }
</script>
