<?php include "admin/includes/config.php"; ?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <title>Health Environment Development Foundation | Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootsrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!-- Owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">

  <!-- Template main Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Modernizr -->
  <script src="assets/js/modernizr-2.6.2.min.js"></script>

  <link rel="icon" href="assets/images/logo.jpg">


</head>

<body>


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

              <li><a class="is-active" href="index.php">HOME</a></li>
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
              <li><a href="contact.php">CONTACT</a></li>
              <li><a href="consult.php">CONSULT A DOCTOR</a></li>



            </ul>

          </div> <!-- /#navbar -->

        </div> <!-- /.container -->

      </div> <!-- /.navbar-main -->


    </nav>

  </header> <!-- /. main-header -->



  <!-- Carousel
    ================================================== -->
  <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#homeCarousel" data-slide-to="1"></li>
      <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">

        <img src="assets/images/slider/home-slider-2.jpg" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Giving hope to the future</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal"
              data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->


      <div class="item ">

        <img src="assets/images/slider/home-slider-1.jpg" style="width: 100%; height: 100%;" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">Everyone deserves a healthy life</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal"
              data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->




      <div class="item ">

        <img src="assets/images/slider/home-slider-3.jpg" alt="">

        <div class="container">

          <div class="carousel-caption">

            <h2 class="carousel-title bounceInDown animated slow">We believe in creating impact.</h2>
            <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
            <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal"
              data-target="#donateModal">DONATE NOW</a>

          </div> <!-- /.carousel-caption -->

        </div>

      </div> <!-- /.item -->

    </div>

    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
      <span class="fa fa-angle-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
      <span class="fa fa-angle-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div><!-- /.carousel -->

  <div class="section-home about-us fadeIn animated">

    <div class="container">

      <div class="row">

        <div class="col-md-3 col-sm-6">

          <div class="about-us-col">

            <div class="col-icon-wrapper">
              <img src="assets/images/icons/our-mission-icon.png" alt="">
            </div>
            <h3 class="col-title">Our Mission</h3>
            <div class="col-details">

              <p>At HEENDEF, our mission is to create positive and lasting impacts on the health, environment, and
                overall
                development of communities by implementing innovative projects, fostering education and awareness, and
                encouraging
                sustainable practices.
              </p>

            </div>
          </div>

        </div>


        <div class="col-md-3 col-sm-6">

          <div class="about-us-col">

            <div class="col-icon-wrapper">
              <img src="assets/images/icons/make-donation-icon.png" alt="">
            </div>
            <h3 class="col-title">Make donations</h3>
            <div class="col-details">

              <p>
                HEENDEF, plays a pivotal role in donations by mobilizing resources and channeling them to various
                charitable causes, making a positive impact on underserved communities and social initiatives.
              </p>
            </div>
          </div>

        </div>


        <div class="col-md-3 col-sm-6">

          <div class="about-us-col">

            <div class="col-icon-wrapper">
              <img src="assets/images/icons/help-icon.png" alt="">
            </div>
            <h3 class="col-title">Help & support</h3>
            <div class="col-details">

              <p>
                HEENDEF contributes to research by supporting and funding projects that address critical social and
                environmental issues, promoting scientific inquiry and innovation for sustainable development.
              </p>
            </div>
          </div>

        </div>


        <div class="col-md-3 col-sm-6">

          <div class="about-us-col">

            <div class="col-icon-wrapper">
              <img src="assets/images/icons/programs-icon.png" alt="">
            </div>
            <h3 class="col-title">our programs</h3>
            <div class="col-details">

              <p>
                HEENDEF is dedicated to enhancing social care by implementing programs that provide assistance,
                support, and resources to vulnerable individuals and marginalized communities
              </p>

            </div>
          </div>

        </div>



      </div>

    </div>

  </div> <!-- /.about-us -->

  <div class="section-home home-reasons">

    <div class="container">

      <div class="row">

        <div class="col-md-6">

          <div class="reasons-col animate-onscroll fadeIn">

            <img src="assets/images/reasons/we-fight-togother.jpg" alt="">

            <div class="reasons-titles">

              <h3 class="reasons-title">WE care about others</h3>
              <h5 class="reason-subtitle">We are humans</h5>

            </div>

            <div class="on-hover hidden-xs">

              <p> HEENDEF plays a pivotal role in promoting healthy feeding by implementing programs that
                ensure access to nutritious meals and fostering awareness about proper dietary practices.</p>
              <p>At HEENDEF, we also ensure that there is access to clean and safe drinking water by implementing
                projects
                that provide water purification systems, and education on proper water hygiene practices.</p>
              <p>HEENDEF, is also dedicated to enhancing social care by implementing programs that provide
                assistance, support, and resources to vulnerable individuals and marginalized communities.</p>
            </div>
          </div>

        </div>


        <div class="col-md-6">

          <div class="reasons-col animate-onscroll fadeIn">

            <img src="assets/images/reasons/we-care-about.jpg" alt="">

            <div class="reasons-titles">

              <h3 class="reasons-title">We fight together</h3>
              <h5 class="reason-subtitle">We are humans</h5>

            </div>

            <div class="on-hover hidden-xs">

              <p> HEENDEF, contributes to research by supporting and funding projects that address critical social
                and environmental issues, promoting scientific inquiry and innovation for sustainable development.</p>


              <p> HEENDEF is an NGO that plays a vital role in improving healthcare
                access and quality in underserved communities through various initiatives and partnerships.</p>

              <p> HEENDEF, an NGO, plays a pivotal role in donations by mobilizing resources and channeling them to
                various
                charitable causes, making a positive impact on underserved communities and social initiatives</p>

            </div>


          </div>

        </div>


      </div>



    </div>


  </div> <!-- /.home-reasons -->

  <div class="section-home our-causes animate-onscroll fadeIn">

    <div class="container">

      <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

      <div class="row">

        <div class="col-md-3 col-sm-6">

          <div class="cause">

            <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">

            <h4 class="cause-title">Health Care </h4>
            <div class="cause-details">
              At HEENDEF, we believe that good health is a fundamental right for every individual.
              Our dedicated HealthCare Initiative strives to make quality healthcare accessible and affordable to all,
              regardless of their socioeconomic background.
              Through our relentless efforts, we aim to create a healthier, happier, and more equitable society.
              <br><br>
              <br><br>
            </div>





          </div> <!-- /.cause -->

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="cause">

            <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">


            <h4 class="cause-title">Social Care</h4>
            <div class="cause-details">
              Social care goes beyond providing basic necessities; it encompasses a range of activities
              and services designed to enhance the well-being and quality of life for individuals facing challenges.
              It involves offering emotional support, access to education
              and healthcare, promoting social inclusion, and empowering communities to become self-sufficient.
              <br><br><br>
            </div>



          </div> <!-- /.cause -->

        </div>


        <div class="col-md-3 col-sm-6">

          <div class="cause">


            <img src="assets/images/causes/cause-culture.jpg" alt="" class="cause-img">

            <h4 class="cause-title">Research</h4>
            <div class="cause-details">
              Research stands as the cornerstone of progress. It provides a lens
              through which we can understand the intricacies of the world we inhabit.
              Our NGO employs research to dive deep into the issues that demand attention,
              seeking answers that lead to effective change. Whether it's environmental conservation, social justice,
              healthcare disparities, or educational inequality,
              research offers us a compass to navigate through uncharted waters.
            </div>




          </div> <!-- /.cause -->

        </div>

        <div class="col-md-3 col-sm-6">

          <div class="cause">

            <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">

            <h4 class="cause-title">Healthy Food & Pure Water</h4>
            <div class="cause-details">
              Our NGO's mission is to advocate for and promote the consumption of healthy,
              nutrient-rich food and safe, pure water sources. We recognize that these two factors are pivotal
              to leading a life of vitality and to building strong, resilient communities.
              Our commitment to this cause drives us to create awareness, inspire change, and foster a community
              that prioritizes well-being through the consumption of nourishing food and clean water.
            </div>




          </div> <!-- /.cause -->

        </div>

      </div>

    </div>

  </div> <!-- /.our-causes -->

  <div class="btn-holder text-center">

    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>

  </div>






  <div class="section-home our-sponsors animate-onscroll fadeIn">

    <div class="container">

      <h2 class="title-style-1">Our Sponsors <span class="title-under"></span></h2>

      <ul class="owl-carousel list-unstyled list-sponsors">

        <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
        <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
        <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

        <li> <img src="assets/images/sponsors/bus.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikimedia.png" alt=""></li>
        <li> <img src="assets/images/sponsors/one-world.png" alt=""></li>
        <li> <img src="assets/images/sponsors/wikiversity.png" alt=""></li>
        <li> <img src="assets/images/sponsors/united-nations.png" alt=""></li>

      </ul>

    </div>

  </div> <!-- /.our-sponsors -->




  <?php include "footer.php"; ?>




  <!-- Donate Modal -->
  <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
        </div>
        <div class="modal-body">

          <form class="form-donation">

            <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span> </h3>

            <div class="row">

              <div class="form-group col-md-12 ">
                <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
              </div>

            </div>


            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="firstName" placeholder="First name*">
              </div>

              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
              </div>
            </div>


            <div class="row">

              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Email*">
              </div>

              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" placeholder="Phone">
              </div>

            </div>

            <div class="row">

              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="address" placeholder="Address">
              </div>

            </div>


            <div class="row">

              <div class="form-group col-md-12">
                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
              </div>

            </div>

            <div class="row">

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary pull-right" name="donateNow">DONATE NOW</button>
              </div>

            </div>





          </form>

        </div>
      </div>
    </div>

  </div> <!-- /.modal -->





  <!--  Scripts
    ================================================== -->

  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

  <!-- Bootsrap javascript file -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- owl carouseljavascript file -->
  <script src="assets/js/owl.carousel.min.js"></script>

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