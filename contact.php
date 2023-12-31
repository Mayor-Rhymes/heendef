<?php include "admin/includes/config.php"; ?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <title>Contact | Health Environment Development Foundation</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootsrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Template main Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Modernizr -->
  <script src="assets/js/modernizr-2.6.2.min.js"></script>

  <link rel="icon" href="assets/images/logo.jpg">

</head>

<body>
  <!-- NAVBAR
    ================================================== -->

  <header class="main-header">


    <nav class="navbar navbar-static-top">

      <div class="navbar-top">

        <div class="container" style="color: black;">
          <div class="row">

            <div class="col-sm-6 col-xs-12">

              <ul class="list-unstyled list-inline header-contact">
                <li> <i class="fa fa-phone"></i> <a href="tel:">+234 817 686 9516 </a> </li>
                <li> <i class="fa fa-envelope"></i> <a href="mailto:bmafolabi@gmail.com">bmafolabi@gmail.com</a> </li>
              </ul> <!-- /.header-contact  -->

            </div>

            <div class="col-sm-6 col-xs-12 text-right">

              <ul class="list-unstyled list-inline header-social">

                <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-instagram"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
              </ul> <!-- /.header-social  -->

            </div>


          </div>
        </div>

      </div>

      <div class="navbar-main" style="background-color: black;">

        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">

              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.jpg" alt=""></a> -->
            <div style="height: 80px; width:150px;">
              <img src="assets/images/heendeflogo.jpg" alt="" style="height: 100%; width: 100%; "></img>
            </div>
          </div>

          <div id="navbar" class="navbar-collapse collapse pull-right">

            <ul class="nav navbar-nav">

              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li class="has-child"><a href="#">BLOGS</a>

                <ul class="submenu">

                  <?php
                  if (isset($conn)) {
                    $result = $conn->query("SELECT * FROM CATEGORY");
                    if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                        $category = $row["name"];
                        $id = $row["id"];
                        echo "<li class='submenu-item'><a href='blogs.php?category=$id'>" . $category . "</a></li>";
                      }
                    }

                  }
                  ?>
                  <!-- <li class="submenu-item"><a href="causes.html">Recent Works</a></li>
                         <li class="submenu-item"><a href="causes-single.html">Engaged Activities </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Research Works  </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Proposed Study </a></li> -->
                </ul>

              </li>
              <li><a href="events.php">EVENTS</a></li>
              <li><a href="gallery.php">GALLERY</a></li>
              <li><a class="is-active" href="contact.php">CONTACT</a></li>
              <li><a href="consult.php">CONSULT A DOCTOR</a></li>



            </ul>

          </div> <!-- /#navbar -->

        </div> <!-- /.container -->

      </div> <!-- /.navbar-main -->


    </nav>

  </header> <!-- /. main-header -->


  <div class="page-heading text-center">

    <div class="container zoomIn animated">

      <h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
      <p class="page-description">
        Get in Touch with Us.
      </p>

    </div>

  </div>

  <div class="main-container fadeIn animated">

    <div class="container">

      <div class="row">

        <div class="col-md-7 col-sm-12 col-form">

          <h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

          <form action="php/mail.php" class="contact-form ajax-form">

            <div class="row">

              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name*" required>
              </div>

              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
              </div>

            </div>

            <div class="form-group">
              <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
            </div>

            <div class="form-group alerts">

              <div class="alert alert-success" role="alert">

              </div>

              <div class="alert alert-danger" role="alert">

              </div>

            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right">Send message</button>
            </div>

            <div class="clearfix"></div>

          </form>

        </div>

        <div class="col-md-4 col-md-offset-1 col-contact">

          <h2 class="title-style-2"> HEENDEF <span class="title-under"></span></h2>
          <p>
            <b>We </b> value your engagement and are here to address any queries,
            collaborate on potential partnerships, or hear your valuable feedback..
          </p>

          <div class="contact-items">

            <ul class="list-unstyled contact-items-list">
              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> 18 Ogunfunmi
                Str., Akobi Crescent Surulere, Lagos.</li>
              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span><a
                  href="tel:+234 817 686 9516">+234 817 686 9516 </a></li>

              <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> <a
                  href="mailto:bmafolabi@gmail.com">bmafolabi@gmail.com</a></li>
            </ul>
          </div>



        </div>

      </div> <!-- /.row -->


    </div>



  </div>

  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.0086126189926!2d3.35892246951583!3d6.517323532030606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c49dae553c5%3A0x80e0513dd12a34af!2s18%20Ogunfunmi%20St%2C%20Surulere%20102215%2C%20Lagos!5e0!3m2!1sen!2sng!4v1692558271196!5m2!1sen!2sng"
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>


  <?php include "footer.php"; ?>





  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

  <!-- Bootsrap javascript file -->
  <script src="assets/js/bootstrap.min.js"></script>


  <!-- Google map  -->
  <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


  <!-- Template main javascript -->
  <script src="assets/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l; b[l] || (b[l] =
          function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
        e = o.createElement(i); r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
      }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X'); ga('send', 'pageview');
  </script>
</body>

</html>