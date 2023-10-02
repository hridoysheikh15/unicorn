<?php

include 'header.php'

?>

<head>
  <link rel="stylesheet" href="./asset/css/portfolio.css" />
</head>

<!-- top section -->

<div class="aboutTop">
  <div class="img-about">
    <img src="./asset/image/laptop-on-table.webp" alt="laptop-on-table" />
  </div>
  <div class="aboutTop-content">
    <div class="midTag">
      <p class="text-uppercase">Portfolio</p>
      <p class="text-capitalize">home / portfolio</p>
    </div>
  </div>
</div>

<!-- work intro -->

<div class="port-intro">
  <div class="intro-work">
    <div class="work-intro">
      <h1 class="text-uppercase">our <span>work</span></h1>
      <p>
        We create dynamic, interactive and user-friendly solutions for our
        global clientele
      </p>
    </div>
  </div>
</div>

<!-- all work with menu -->

<!-- all work menu -->

<div class="all-work">
  <div class="all-work-list">
    <div class="works-portfolio">
      <div class="works-btn">
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(0)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">all</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(1)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">web</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(2)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (mobile)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(3)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (desktop)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(4)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (web)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(5)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">ux/ui</span>
          </button>
        </div>
      </div>
      <div class="works-details"></div>
    </div>
  </div>
</div>

<?php

include 'footer.php'

?>
