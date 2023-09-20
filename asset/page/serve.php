<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../image/technical-support.png"
      type="image/x-icon"
    />
    <title>Our Service</title>
    <link rel="stylesheet" href="../style/serve.css" />
    <link rel="stylesheet" href="../style/required.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <!-- here navbar start  -->
    <?php require "./nav.php" ?>
    <!-- here navber end  -->

    <!-- here gallary section start  -->
    <div class="portTop container-fluid position-relative">
      <div class="midTag text-light display-2 position-absolute">
        <p class="text-uppercase textShadow">our Service</p>
        <p class="text-capitalize h4">home / service</p>
      </div>
    </div>
    <!-- here gallary section end  -->

    <!-- why choose us start -->
    <div class="container text-center my-5">
      <p class="text-uppercase h2">Why Choose Us?</p>
      <div class="row">
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-lightbulb icons display-4"></i>
              <p class="h3 my-lg-3">We Understand Technology</p>
              <p class="iconContent">
                We live and breathe solving issues. It is these issues that
                prove our value to clients and it is the fact that we truly
                understand the industry today and how it changes. Our
                experienced teams allow us to get deeply engaged to help our
                clients map a path to success.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-balloon-heart icons display-4"></i>
              <p class="h3 my-lg-3">We Care About You</p>
              <p class="iconContent">
                In today’s pacing industry,the rate of change has never been
                faster, it is our ability to adapt that allows us to offer more
                competitive and innovative solutions, whatever the demands are.
                Our teams act dynamically for enterprise as well as SME
                customers. It is our flexibility that makes us stand above our
                competition.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-hand-thumbs-up icons display-4"></i>
              <p class="h3 my-lg-3">All You Need - In One Place</p>
              <p class="iconContent">
                We offer the end solutions that our customers demand. There is
                no finger pointing when it goes wrong. Our business values
                ensure that we offer the best solutions to all our clients
                regardless of size. We own and deliver the complete end-to-end
                solution.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-globe-asia-australia icons display-4"></i>
              <p class="h3 my-lg-3">We Are Global</p>
              <p class="iconContent">
                We have an international presence with office based in London,
                Dubai, India and Manila. Our network of partners throughout
                Europe ensures we can deliver internationally.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-rocket-takeoff icons display-4"></i>
              <p class="h3 my-lg-3">We Are Innovators</p>
              <p class="iconContent">
                In today’s marketplace, it is the innovation that sets us apart
                from the competition. We have big investment in R&D teams who
                develop better and more efficient solutions for our clients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-6 md-mb-30">
          <div class="card m-3 cardHover">
            <div class="card-body m-0">
              <i class="bi bi-trophy icons display-4"></i>
              <p class="h3 my-lg-3">We Lead</p>
              <p class="iconContent">
                Since our inception over 30 years ago, we have seen changes in
                our industry that have revolutionised the way we work and
                interact with each other. As an agile flexibility organisation,
                we have always been above the curve, growing continuously
                throughout.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- why choose us end  -->

    <!-- here card section start  -->
    <div class="text-center container my-5">
      <p class="text-uppercase text-center display-4">What we do</p>
      <hr
        style="
          height: 5px;
          background-image: linear-gradient(
            to right,
            rgb(101, 237, 247),
            rgb(245, 23, 234)
          );
        "
      />
    </div>
    <?php require "./service.php" ?>

    <div class="m-xl-5"></div>
    <!-- here card section end  -->

    <!-- service list start  -->
    <div class="container">
      <div class="row">
        <div class="dropdown my-5 col-lg-12 open">
          <button
            class="btn text-uppercase col-lg-12 md-mb-30 fs-4 btn-secondary dropdown-toggle"
            type="button"
            id="triggerId"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            all service list
          </button>
          <div class="dropdown-menu" aria-labelledby="triggerId">
            <div class="row serviceList">
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./cloudService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                    Infrastructure and Cloud Services
                    <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
              <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./networkService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Network Services
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./testingService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Testing Services
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>  
                  </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              > 
                <a href="./businessService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Business Excellence Services
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                  </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./integratedService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Integrated Engineering Solutions
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./performenceService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Performance Engineering
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./oracleService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Oracle
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./aiService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Artificial Intelligence
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./cyberService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Cyber Security
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            <div class="col-lg-6">
              <button
                class="dropdown-item cardHover text-sm-start"
                href="#"
              >
                <a href="./automationService.php" class="text-decoration-none">
                  <p>
                    <i class="bi bi-circle-square"></i>
                  Intelligent Automation
                  <i class="bi bi-chevron-double-right text-end fs-4"></i>
                  </p>
                </a>
              </button>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    
    <!-- service list end  -->

    <!-- identity start  -->
    <div class="p-2 ourWork">
      <div class="container">
        <div class="display-4 text-center">Who We Are?</div>
        <div class="iconContent">
          We are an enterprise driven by our promise to deliver Connected
          Experiences for the Connected World. We thrive on Change to create a
          better future for our customers, partners, associates, and
          stakeholders. Change that empowers us to innovate, collaborate and
          care. We are changemakers who are committed to create a positive
          impact on businesses, communities, and the planet.
        </div>
      </div>
    </div>

    <!-- identity end  -->

    <!-- footer start  -->
    <?php require "./footer.php" ?>
    <!-- footer end  -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
