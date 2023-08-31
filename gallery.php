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


        <nav class="navbar navbar-static-top">

            <div class="navbar-top" style="background-color: white;">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">

                            <ul class="list-unstyled list-inline header-contact" style="color: black;">
                                <li> <i class="fa fa-phone"></i> <a href="tel:">+234 817 686 9516 </a> </li>
                                <li> <i class="fa fa-envelope"></i> <a
                                        href="mailto:bmafolabi@gmail.com">bmafolabi@gmail.com</a> </li>
                            </ul> <!-- /.header-contact  -->

                        </div>

                        <div class="col-sm-6 col-xs-12 text-right" style="color: black;">

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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>

                        <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a> -->
                        <h2>HEENDEF </h2>

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
                                                echo "<li class='submenu-item'><a href='causes.php'>" . $row["name"] . "</a></li>";
                                            }
                                        }

                                    }
                                    ?>
                                </ul>

                            </li>
                            <li><a class="is-active" href="gallery.php">GALLERY</a></li>
                            <li><a href="admin/index.php">SEE YOUR DOCTOR</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li><a href="events.php">EVENTS</a></li>

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

    <footer class="main-footer">

        <div class="footer-top">

        </div>


        <div class="footer-main">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    <strong>HEENDEF</strong> Health, Environment and Development Foundation (HEENDEF) is
                                    a dynamic non-profit
                                    organization that was established on March 7, 2005, with the primary aim of
                                    promoting and advancing
                                    the well-being of communities through sustainable initiatives in health,
                                    environment, and development.
                                </p>

                                <p>
                                    HEENDEF is registered under the Corporate Affairs Commission with Registration
                                    Number: CAC/IT/NO 18195.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                        http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                        http://t.co/fTSazikPd4

                                    </li>

                                    <li class="tweet">

                                        20 Surprise Eggs, Kinder Surprise Cars 2 Thomas Spongebob Disney Pixar
                                        http://t.co/fTSazikPd4

                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message"
                                                required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send
                                                message</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>


            </div>


        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                HEENDEF@ copyrights 2023
            </div>
        </div>

    </footer>






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