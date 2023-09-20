<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../image/contact.png" type="image/x-icon" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="../style/contact.css" />
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
    <!-- navber start  -->
    <?php require "./nav.php" ?>
    <!-- navber end  -->

    <!-- here gallary section start  -->
    <div class="portTop container-fluid position-relative">
      <div class="midTag text-light display-2 position-absolute">
        <p class="text-uppercase textshadow">Contact page</p>
        <p class="text-capitalize h4">home / contact us</p>
      </div>
    </div>
    <!-- here gallary section end  -->

    <!-- contact form start  -->
    <div class="container mgl">
      <div class="row">
        <div class="col-lg-8 p-5 contact">
          <form action="action.php" method="post">
            <label for="name"
              >Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; :
              <input
                required
                type="text"
                name="name"
                id="name"
                placeholder="Input Your Name"
            /></label>
            <label for="num"
              >Contact Number :
              <input
                type="number"
                name="num"
                id="num"
                placeholder="Input Your Contact No."
            /></label>
            <label for="email"
              >Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; :
              <input
                required
                type="email"
                name="email"
                id="email"
                placeholder="Input Your Mail"
            /></label>
            <label for="massage"
              >Massage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
              <input
                type="text"
                name="massage"
                id="massage"
                placeholder="Type Your Mail"
            /></label>
            <input type="submit" value="Submit" />
          </form>
        </div>
        <div class="col-lg-4">
          <img width="100%" src="../image/contact-us.gif" alt="" />
        </div>
      </div>
    </div>
    <!-- contact form end  -->

    <!-- footer start  -->
    <?php require "./footer.php" ?>
    <!-- footer end  -->
  </body>
</html>
