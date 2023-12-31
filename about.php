<?php include "admin/includes/config.php"; ?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>About | Health Environment Development Foundation</title>
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
                                <li> <i class="fa fa-envelope"></i> <a
                                        href="mailto:bmafolabi@gmail.com">bmafolabi@gmail.com</a> </li>
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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">

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
                            <li><a class="is-active" href="about.php">ABOUT</a></li>
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

    <div class="page-heading text-center">

        <div class="container zoomIn animated">

            <h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
            <p class="page-description">
                Bridging Gaps: Nutritional Equity, Clean Water Access.
            </p>

        </div>

    </div>

    <div class="main-container">

        <div class="container">

            <div class="row fadeIn animated">

                <div class="col-md-6">

                    <img src="assets/images/about-us.jpg" alt="" class="img-responsive">

                </div>

                <div class="col-md-6">

                    <h2 class="title-style-2">ABOUT HEENDEF<span class="title-under"></span></h2>

                    <p style="text-align: justify;">
                        <?php
                        if (isset($conn)) {

                            $result = $conn->query("SELECT * FROM about");

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo $row["description"];
                                }
                            }
                        }

                        ?>
                    </p>

                    <p style="text-align: justify;">
                        At HEENDEF, our mission is to create positive and lasting impacts on the health, environment,
                        and overall
                        development of communities by
                        implementing innovative projects, fostering education and awareness, and encouraging
                        sustainable practices.
                    </p>

                    <p style="text-align: justify;">

                        Our vision is to be a leading organization that plays a pivotal role in
                        shaping healthier and environmentally conscious
                        communities, ultimately contributing to the overall development and progress of society.
                    </p>


                    <p style="text-align: justify;">
                        HEENDEF is registered under the Corporate Affairs Commission with Registration Number:
                        CAC/IT/NO 18195.
                    </p>

                </div>

            </div> <!-- /.row -->

            <div class="section-home about-us">


                <div class="row">

                    <div class="col-md-3 col-sm-6">

                        <div class="about-us-col">

                            <div class="col-icon-wrapper">
                                <img src="assets/images/icons/our-mission-icon.png" alt="">
                            </div>
                            <h3 class="col-title">our mission</h3>
                            <div class="col-details">

                                <p>At HEENDEF, our mission is to create positive and lasting impacts on the health,
                                    environment, and overall
                                    development of communities by implementing innovative projects, fostering education
                                    and awareness, and encouraging
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
                                    HEENDEF, plays a pivotal role in donations by mobilizing resources and channeling
                                    them to various
                                    charitable causes, making a positive impact on underserved communities and social
                                    initiatives.
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
                                    HEENDEF contributes to research by supporting and funding projects that address
                                    critical social and
                                    environmental issues, promoting scientific inquiry and innovation for sustainable
                                    development.
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
                                    HEENDEF is dedicated to enhancing social care by implementing programs that provide
                                    assistance,
                                    support, and resources to vulnerable individuals and marginalized communities
                                </p>
                            </div>


                        </div>

                    </div>



                </div> <!-- /.row -->


            </div>

        </div> <!-- /.about-us -->


        <div class="our-team animate-onscroll fadeIn">

            <div class="container">

                <h2 class="title-style-1">The Founder<span class="title-under"></span></h2>

                <div class="col-md-6">

                    <img style="width: 100%; height: 70%;" src="assets/images/founder.jpg" alt="">

                </div>
                <div class="col-md-6">

                    <h2 class="title-style-2">Dr. Bamgboye M. Afolabi</h2>

                    <p class="col-md-6" style="text-align: justify;">
                        Dr. Bamgboye M. Afolabi was born in Freetown, Siera Leone, one of the
                        countries in West Africa,
                        the third of eight children. Both of his parents were educationists – his father the Principal
                        of Secondary Schools and his mother, a French lecturer and eventually a senior staff at the
                        Federal Ministry of Education. Dr. Afolabi spent his early years attending primary schools in
                        the old western Region of Nigeria and later concluded both his secondary education and higher
                        science education at St. Gregory’s College where he had Grade 1 in his West African Examination
                        Council and at Federal School of Science in Lagos, Nigeria graduating in Physics, Chemistry and
                        Biology in 1970. His father had earlier secured an admission for him to study Medicine at either
                        Trinity College Dublin or University of
                        Melbourne in Australia, but the passing of his father in 1969 cut short this dream.
                    </p>
                    <p style="text-align: justify;">&nbsp &nbsp &nbsp &nbsp As an adolescent, Dr. Afolabi travelled to
                        UK, France,
                        Canada, and Germany in search of education. He briefly attended Maximillan-Ludwig University in
                        Munich, Germany but
                        has to withdraw from there because of lack of financial support. He eventually was given
                        admission to Lincoln University,
                        Jefferson City Missouri where in 1978 he graduated with his first degree, Bachelor of Science,
                        in Molecular Biology and Genetics
                        under Professor Nathan Cooke.
                    </p>
                    <p style="text-align: justify;">
                        &nbsp &nbsp &nbsp &nbsp Following his graduation, he returned to his country Nigeria, went
                        through the one-year National
                        Youth Service Corp, and returned to school to study Medicine at the College of Medicine
                        University of Lagos (CMUL) graduating in 1984
                        (MBBS) and later with MPhil and MSc, . He served his medical internship at the General Hospital,
                        Marina Lagos (Medical and Surgical postings),
                        Lagos Island Maternity Hospital (Obstetrics and Gynecology posting) and at the Massey Street
                        Children Hospital (Pediatric posting).
                        His ultimate goal however was to be involved in medical research, which led him to be employed
                        at the Nigerian Institute of Medical
                        Research, starting as a Junior Research Fellow in 1985 and ending as
                        Chief Medical Research Fellow in 2004, a period that he published about
                        80 papers in peer-review journals.
                    </p>

                </div>

            </div>
        </div>

        <!-- for the founder -->
        <div class="row fadeIn animated">


        </div> <!-- /.row -->

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

                            <h4 class="footer-title">Events <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">

                                        Technical Adviser Ondo State Ministry of Health, State Malaria Eradication and
                                        Control program Annual Operational Planning (AOP for 2018), 2017; (AOP for
                                        2020), 2019.


                                    </li>

                                    <li class="tweet">

                                        Joint Assessment of National Strategy, Ghana Health Services, 2014


                                    </li>

                                    <li class="tweet">

                                        EPI-Analysis for National Malaria Eradication Program, Federal Ministry of
                                        Health, Abuja 2014.


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

            <div class="footer-bottom">

                <div class="container text-right">
                    HEENDEF@ copyrights 2023
                </div>
            </div>
        </div>

    </footer>






    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>


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