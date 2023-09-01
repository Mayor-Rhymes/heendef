<?php include "admin/includes/config.php" ?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Gallery | Charity / Non-profit responsive Bootstrap HTML5 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="assets/css/prettyPhoto.css">

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
        
    
        <nav class="navbar navbar-static-top" >

            <div class="navbar-top">

              <div class="container" style="color: black;">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+234 817 686 9516 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:bmafolabi@gmail.com">bmafolabi@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right"  >

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-instagram"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-linkedin"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main" style="background-color: black;">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.jpg" alt=""></a> -->
                  <h2>HEENDEF </h2>
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li class="has-child"><a href="#">BLOGS</a>

                      <ul class="submenu">
                        
                        <?php 
                          
                           if(isset($conn)){
                             $result = $conn->query("SELECT * FROM CATEGORY");
                             if($result->num_rows > 0){
                               while($row = $result->fetch_assoc()){
                                echo "<li class='submenu-item'><a href='causes.php'>". $row["name"] . "</a></li>";
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
                    <li><a class="is-active" href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="consult.php">CONSULT A DOCTOR</a></li>

                    

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">GALLERY <span class="title-under"></span></h1>
            <p class="page-description">
                Exploring Our Gallery: Capturing Moments of Impact and Empowerment
            </p>

        </div>

    </div>

    <div class="container zoomIn animated">

        <h4 class="text-center" style="font-size: 40px; color: black; margin-bottom: 30px">Heendef Gallery</h4>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: masonry; gap: 20px">
            <div style="border-radius: 10px; display: flex; flex-direction: column; gap: 10px;">
                <a href="assets/images/gallery/doll-87407_1280.jpg" class="gallery-item lightbox"
                    >

                    <img src="assets/images/gallery/thumb/doll-87407_1280.jpg" alt="">

                    <span class="on-hover">
                        <span class="hover-caption">Image Caption</span>
                    </span>

                </a>

                <p class="text-center">This is the first gallery</p>
            </div> <!-- /.gallery-item -->
            <div style="border-radius: 10px; display: flex; flex-direction: column; gap: 10px;">
                <a href="assets/images/gallery/doll-87407_1280.jpg" class="gallery-item lightbox"
                    >

                    <img src="assets/images/gallery/thumb/doll-87407_1280.jpg" alt="">

                    <span class="on-hover">
                        <span class="hover-caption">Image Caption</span>
                    </span>

                </a>

                <p class="text-center">This is the first gallery</p>
            </div> <!-- /.gallery-item -->
            <div style="border-radius: 10px; display: flex; flex-direction: column; gap: 10px;">
                <a href="assets/images/gallery/doll-87407_1280.jpg" class="gallery-item lightbox"
                    >

                    <img src="assets/images/gallery/thumb/doll-87407_1280.jpg" alt="">

                    <span class="on-hover">
                        <span class="hover-caption">Image Caption</span>
                    </span>

                </a>

                <p class="text-center">This is the first gallery</p>
            </div> <!-- /.gallery-item -->
        </div>

    </div>

    <?php include "footer.php"; ?>





    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- PrettyPhoto javascript file -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>

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