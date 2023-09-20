<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="../image/portfolio.png"
      type="image/x-icon"
    />
    <title>Portfolio</title>
    <link rel="stylesheet" href="../style/portfolio.css" />
    <link rel="stylesheet" href="../style/about.css" />
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
        <p class="text-uppercase textShadow">our portfolio</p>
        <p class="text-capitalize h4">home / portfolio</p>
      </div>
    </div>
    <!-- here gallary section end  -->

    <!-- here old project start  -->
    <div class="display-6 m-5">
      <p class="text-lg-center">
        Our Recent Launched Projects Available into Market
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/cips.png" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">
                CIPS- A Goverment Project for all the Charterd accountent
                member.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/eims.png" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">
                EIMS- Education Institute managment system. Manage your
                Education institute in smart way.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/gpos.png" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">GPOS- Gas sylinder managment system</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/npos.png" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">NPOS- Business Managment Software.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/flit.jpg" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">
                Flit is a accounting managment system. No more worrying about
                your business accounts
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="imgBorder position-relative">
            <img class="w-100" src="../image/UEL.jpeg" alt="cips" />
            <div class="imgDetails position-absolute">
              <p class="text-center fontSize">
                UEL - Unicorn E-learning software, You can learn everything from
                this software.
              </p>
            </div>
          </div>
        </div>
      </div>
      <a
        class="btn btn-primary col-sm-4 mx-lg-5 p-1 text-center px-5"
        href="#"
        role="button"
        >See More Projects</a
      >
    </div>

    <!-- here old project end  -->

    <!-- upcoming project list start -->
    <div class="container">
      <p class="display-6 text-center text-uppercase text-dark m-lg-5">
        our upcoming project
      </p>
      <hr style="height: 3px" />
      <div class="table-responsive-md">
        <table class="table table-striped-columns table-hover align-middle">
          <thead class="table-light text-uppercase">
            <caption>
              Project list
            </caption>
            <tr>
              <th>Serial</th>
              <th>Project Name</th>
              <th>Use For</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <td scope="row">I</td>
              <td>Hospital Managment Software</td>
              <td>Manage Hospital</td>
            </tr>
            <tr>
              <td scope="row">II</td>
              <td>Front-End Template</td>
              <td>Best design for valueble software</td>
            </tr>
            <tr>
              <td scope="row">III</td>
              <td>Bloging</td>
              <td>See latest news and informetion</td>
            </tr>
            <tr>
              <td scope="row">IV</td>
              <td>e-Commerce</td>
              <td>Your daily partner</td>
            </tr>
            <tr>
              <td scope="row">V</td>
              <td>Social media</td>
              <td>Connect with the world</td>
            </tr>
          </tbody>
          <tfoot>
            <p class="text-uppercase">all list are controlled by ussbd.com</p>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- upcoming project list end  -->

    <!-- here testmonial start -->
    <div class="testmonial">
      <div class="container">
        <p class="text-center display-5 text-uppercase">testmonial</p>
        <hr
          style="
            height: 5px;
            background-image: linear-gradient(
              to right,
              rgb(8, 220, 235),
              rgb(30, 51, 235)
            );
          "
        />
        <div class="resTestmonial">
          <div class="test my-5" id="test1">
            <div class="text-center">
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <div>
                <img
                  src="../image/ridoy.jpg"
                  class="testImg text-center"
                  alt=""
                />
              </div>
              <div class="text-uppercase fs-4">mahmud hasan</div>
              <div class="text-capitalize fs-6">full stack devoloper</div>
              <div class="text-capitalize comments text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                consequuntur, nam blanditiis tempore perspiciatis fuga corporis
                amet atque veritatis exercitationem assumenda saepe!
              </div>
              <blockquote class="text-uppercase text-end">
                -Hridoy Sheikh <i class="bi-qr-code-scan bi"></i>
              </blockquote>
            </div>
          </div>
          <div class="test my-5" id="test2">
            <div class="text-center">
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <div>
                <img
                  src="../image/ridoy.jpg"
                  class="testImg text-center"
                  alt=""
                />
              </div>
              <div class="text-uppercase fs-4">mahmud hasan</div>
              <div class="text-capitalize fs-6">full stack devoloper</div>
              <div class="text-capitalize comments text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                consequuntur, nam blanditiis tempore perspiciatis fuga corporis
                amet atque veritatis exercitationem assumenda saepe!
              </div>
              <blockquote class="text-uppercase text-end">
                -Hridoy Sheikh <i class="bi-qr-code-scan bi"></i>
              </blockquote>
            </div>
          </div>
          <div class="test my-5" id="test3">
            <div class="text-center">
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <div>
                <img
                  src="../image/ridoy.jpg"
                  class="testImg text-center"
                  alt=""
                />
              </div>
              <div class="text-uppercase fs-4">mahmud hasan</div>
              <div class="text-capitalize fs-6">full stack devoloper</div>
              <div class="text-capitalize comments text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                consequuntur, nam blanditiis tempore perspiciatis fuga corporis
                amet atque veritatis exercitationem assumenda saepe!
              </div>
              <blockquote class="text-uppercase text-end">
                -Hridoy Sheikh <i class="bi-qr-code-scan bi"></i>
              </blockquote>
            </div>
          </div>
          <div class="test my-5" id="test4">
            <div class="text-center">
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <div>
                <img
                  src="../image/ridoy.jpg"
                  class="testImg text-center"
                  alt=""
                />
              </div>
              <div class="text-uppercase fs-4">mahmud hasan</div>
              <div class="text-capitalize fs-6">full stack devoloper</div>
              <div class="text-capitalize comments text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut
                consequuntur, nam blanditiis tempore perspiciatis fuga corporis
                amet atque veritatis exercitationem assumenda saepe!
              </div>
              <blockquote class="text-uppercase text-end">
                -Hridoy Sheikh <i class="bi-qr-code-scan bi"></i>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- here testmonial end  -->

    <!-- footer start here  -->
    <?php require "./footer.php" ?>
    <!-- footer end here  -->
  </body>
</html>
