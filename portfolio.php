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

<div class="all-work container-lg">
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
      <div class="works-details">
        <div class="all-content-port text-center">
          <div id="port_list0">
            <div class="port-content">
              <!-- <p>Total Work</p> -->
            </div>
          </div>
          <div id="port_list1">
            <div class="port-content">
              <div class="e-learning text-start">
                <h3 class="text-capitalize">
                  unicorn learning suite
                </h3>
                <p>
                  E-Learning is developing a new dimension in learning and
                  training systems. Unicorn has developed a complete and robust
                  E-Learning system to ensure its support towards ELearning
                  process. Unicorn E-Learning Suite is a secured web based
                  complete training and learning system with flexible and
                  user-friendly interface. It is designed to fit any size
                  educational institute. It will help to…
                </p>
                <ul>
                  <li>
                    Simplify complex distant training and learning workflows.
                  </li>
                  <li>Helps to improve educational excellence.</li>
                  <li>Manage the entire distant learning process with ease.</li>
                  <li>
                    Suitable for 100% online classes as well as supplementing
                    face-to-face
                  </li>
                  <li>
                    Course management including complete lecture management,
                    content management (Text, Audio, Video, Slides etc),
                    workshop management, assessment management, lesson
                    management.
                  </li>
                  <li>
                    Online query and counseling management including chat
                    management.
                  </li>
                  <li>Online grading management.</li>
                  <li>Virtual library management.</li>
                  <li>
                    Easy to install on almost any platform that supports PHP.
                  </li>
                </ul>
              </div>
              <div class="totalhrd text-start">
                <h3 class="text-capitalize">
                  unicorn learning suite
                </h3>
                <p>
                  E-Learning is developing a new dimension in learning and
                  training systems. Unicorn has developed a complete and robust
                  E-Learning system to ensure its support towards ELearning
                  process. Unicorn E-Learning Suite is a secured web based
                  complete training and learning system with flexible and
                  user-friendly interface. It is designed to fit any size
                  educational institute. It will help to…
                </p>
                <ul>
                  <li>
                    Simplify complex distant training and learning workflows.
                  </li>
                  <li>Helps to improve educational excellence.</li>
                  <li>Manage the entire distant learning process with ease.</li>
                  <li>
                    Suitable for 100% online classes as well as supplementing
                    face-to-face
                  </li>
                  <li>
                    Course management including complete lecture management,
                    content management (Text, Audio, Video, Slides etc),
                    workshop management, assessment management, lesson
                    management.
                  </li>
                  <li>
                    Online query and counseling management including chat
                    management.
                  </li>
                  <li>Online grading management.</li>
                  <li>Virtual library management.</li>
                  <li>
                    Easy to install on almost any platform that supports PHP.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="port_list2">
            <div class="port-content">
              <p>app (mobile)</p>
            </div>
          </div>
          <div id="port_list3">
            <div class="port-content">
              <p>app (desktop)</p>
            </div>
          </div>
          <div id="port_list4">
            <div class="port-content">
              <p>app (web)</p>
            </div>
          </div>
          <div id="port_list5">
            <div class="port-content">
              <p>ux/ui</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- use tool for dev -->

<div class="port-tool">
  <div class="all-tool">
    <div class="port-intro">
      <div class="intro-work">
        <div class="work-intro">
          <h1 class="text-uppercase">use's populer <span>tools</span></h1>
          <p>
            We create dynamic, interactive and user-friendly solutions for our
            global clientele
          </p>
        </div>
      </div>
    </div>
    <div class="all-tool-list container-lg">
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/bs5.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Bootstrap V5.2.3</h5>
          <p>Powered by Bootstrap most latest version v5.2.3</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/jquery.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Latest Jquery</h5>
          <p>Template is fully customized according to latest Jquery.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/responsive.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Fully Responsive</h5>
          <p>100% responsive layout using default Bootstrap grid layout.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/customize.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Fully Customizable</h5>
          <p>Control easily the size by using default Bootstrap grid layout.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/easy use.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Easy To Use</h5>
          <p>Fully documention and premium support 24/7.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/touch.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Touch Enabled</h5>
          <p>Designed specially to boost mobile browsing experience.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/document.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Well Documented</h5>
          <p>A fully detailed documentation is always there .</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/browser.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Cross Browser</h5>
          <p>This template works perfectly with all available browsers.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/web.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Creative Modern Design</h5>
          <p>A large range of options features is available.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/font.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Google Fonts</h5>
          <p>
            Google fonts or upload custom fonts, set sizes, style, and much
            more.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include 'footer.php'

?>
