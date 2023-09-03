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
                                    <!-- <li class="submenu-item"><a href="causes.html">Recent Works</a></li>
                         <li class="submenu-item"><a href="causes-single.html">Engaged Activities </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Research Works  </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Proposed Study </a></li> -->
                                </ul>

                            </li>
                            <li><a href="events.php">EVENTS</a></li>
                            <li><a href="gallery.php">GALLERY</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                            <li><a class="is-active" href="consult.php">CONSULT A DOCTOR</a></li>



                        </ul>

                    </div> <!-- /#navbar -->

                </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->


    <div class="page-heading-consult text-center">
         <div class="ghost"></div>
        <div class="container zoomIn animated">

            <h1 class="page-title">CONSULT A DOCTOR <span class="title-under"></span></h1>
            <p class="page-description">
                Empowering you with personalized health recommendations from qualified physicians
            </p>

        </div>

    </div>

    <div class="row" style="padding: 30px; width: 100%">

        <svg class="col-lg-6" id="a2b67f08-851c-405e-b5a2-eb36e85ca139" data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg" height="600" style="width: max(600px, 50%)" viewBox="0 0 865.76 682.89">
            <g id="b1c52b99-47bc-4dec-bbe5-f886aeb14bfc"
                data-name="freesvgillustration--background-complete--inject-125">
                <rect x="21.29" y="595.27" width="823.19" height="0.41" fill="#ebebeb" />
                <rect x="707.46" y="621.76" width="54.53" height="0.41" fill="#ebebeb" />
                <rect x="552.29" y="626.24" width="14.31" height="0.41" fill="#ebebeb" />
                <rect x="674.22" y="606.48" width="31.59" height="0.41" fill="#ebebeb" />
                <rect x="107.66" y="609.25" width="71.11" height="0.41" fill="#ebebeb" />
                <rect x="193.43" y="609.25" width="10.42" height="0.41" fill="#ebebeb" />
                <rect x="237.74" y="616.19" width="154.23" height="0.41" fill="#ebebeb" />
                <path
                    d="M411.48,521.84H93.58a9.4,9.4,0,0,1-9.38-9.4V65.56a9.39,9.39,0,0,1,9.38-9.31h317.9a9.4,9.4,0,0,1,9.4,9.4h0V512.44A9.4,9.4,0,0,1,411.48,521.84ZM93.58,56.57a9,9,0,0,0-9,9V512.44a9,9,0,0,0,9,9h317.9a9,9,0,0,0,9-9V65.56a9,9,0,0,0-9-9Z"
                    fill="#ebebeb" />
                <path
                    d="M767.61,521.84H449.69a9.41,9.41,0,0,1-9.4-9.4V65.56a9.41,9.41,0,0,1,9.4-9.31H767.61A9.39,9.39,0,0,1,777,65.56V512.44A9.39,9.39,0,0,1,767.61,521.84ZM449.69,56.57a9,9,0,0,0-9,9V512.44a9,9,0,0,0,9,9H767.61a9,9,0,0,0,9-9V65.56a9,9,0,0,0-9-9Z"
                    fill="#ebebeb" />
                <rect x="115.77" y="134.17" width="252.52" height="461.1" fill="#ebebeb" />
                <rect x="152.8" y="77.8" width="178.47" height="30.59" fill="#fafafa" />
                <rect x="128.76" y="145.36" width="226.54" height="449.9" fill="#fff" />
                <path
                    d="M344.46,346.81h-45.1a4.34,4.34,0,0,0-4.36,4.33v0h0a4.36,4.36,0,0,0,4.36,4.36h45.1a4.36,4.36,0,0,0,4.36-4.36h0A4.37,4.37,0,0,0,344.46,346.81Z"
                    fill="#ebebeb" />
                <rect x="162.63" y="170.29" width="52.49" height="379.92" fill="#ebebeb" />
                <polygon points="215.12 224.01 162.63 250.25 162.63 314.61 215.12 288.37 215.12 224.01"
                    fill="#f5f5f5" />
                <polygon points="215.12 301.5 162.63 327.75 162.63 352.39 215.12 326.15 215.12 301.5" fill="#f5f5f5" />
                <polygon points="215.12 435.42 162.63 461.65 162.63 486.29 215.12 460.05 215.12 435.42"
                    fill="#f5f5f5" />
                <rect x="406.03" y="108.37" width="343.98" height="364.95" fill="#ebebeb" />
                <rect x="408.7" y="111.22" width="338.64" height="359.29" fill="#fff" />
                <rect x="461.69" y="283.78" width="86.99" height="110.9"
                    transform="translate(140.67 826.48) rotate(-87.08)" fill="#f0f0f0" />
                <rect x="567.56" y="195.65" width="110.9" height="86.99"
                    transform="translate(-23.56 73.98) rotate(-6.67)" fill="#f0f0f0" />
                <rect x="491.33" y="99.4" width="173.36" height="27.61" rx="12.23" fill="#e6e6e6" />
                <rect x="497.04" y="109.57" width="161.94" height="14.93" rx="7.23" fill="#fff" />
                <rect x="438.51" y="153.4" width="145.36" height="114.03" fill="#e6e6e6" />
                <path
                    d="M458,166.91c-9.32-.31-10.31,5.16-6.67,8.47s39.08,23.16,40.3,29,3.51,14.55,7.1,7.11,10.34-5.45,12.69-11.74c1.65-4.54-15.39-4.94-20.4-8.5C476.28,180.92,463.42,167.11,458,166.91Z"
                    fill="#fff" />
                <path
                    d="M558.7,253.89c4.18,1.12,4.94-.94,1.28-4.23s-32.93-20.1-34.92-33.22c-.9-5.91-3.5-14.57-7.11-7.13s-10.32,5.46-12.68,11.75c-1.64,4.53,15.4,4.94,20.4,8.48C540.37,239.9,553.41,252.49,558.7,253.89Z"
                    fill="#fff" />
                <path d="M514,211.53c3.11-3.44-1.2-8.4-7.64-5.5S505.65,220.88,514,211.53Z" fill="#fff" />
                <path
                    d="M523.33,212c10.24,12.22,38.91,32.32,43,33.79s7.39,8.23-4.53.39-36.68-26.59-38.43-29.75S523.33,212,523.33,212Z"
                    fill="#fff" />
                <rect x="565.41" y="302.77" width="145.36" height="114.03" fill="#e6e6e6" />
                <path
                    d="M652.54,319.66c-12.56-.34-6.22,30.66-3.85,48s5.91,37.86,24.83,37,23.34-13.42,19.49-30.38C687.1,348.21,663.82,319.93,652.54,319.66Z"
                    fill="#fff" />
                <path
                    d="M623.65,319.66c12.54-.34,6.2,30.66,3.85,48s-5.91,37.86-24.83,37-23.34-13.42-19.49-30.38C589.07,348.21,612.34,319.93,623.65,319.66Z"
                    fill="#fff" />
                <path
                    d="M651.09,344.61a3.63,3.63,0,0,1-1.73-.45c-.61-.34-14.81-8.54-14.81-28.71a3.55,3.55,0,0,1,7.09,0c0,15.89,10.75,22.28,11.21,22.54a3.53,3.53,0,0,1-1.76,6.58Z"
                    fill="#fff" />
                <path
                    d="M625.1,344.61a3.55,3.55,0,0,1-1.77-6.59c.51-.29,11.22-6.68,11.22-22.54a3.55,3.55,0,0,1,7.09,0c0,20.17-14.21,28.37-14.82,28.72A3.55,3.55,0,0,1,625.1,344.61Z"
                    fill="#fff" />
                <path d="M665.68,385.78a9.07,9.07,0,1,0,9.09-9h0A9.07,9.07,0,0,0,665.68,385.78Z" fill="#f5f5f5" />
                <path
                    d="M617.05,350.45c-1.54,4.78-.84,9.25,1.54,10s5.55-2.49,7.08-7.25.84-9.25-1.55-10S618.58,345.69,617.05,350.45Z"
                    fill="#f5f5f5" />
            </g>
            <path d="M188,617.22l11.18-114.28,31.59,8.6L207.62,617.22,219.15,624A29.23,29.23,0,0,1,188,617.22Z"
                fill="#f9b499" />
            <path d="M257.9,510.28l-1.63,106.94s7.46,11.67,31.77,7.13l-10.37-7.13,6.16-68.08,1.36-45.53Z"
                fill="#f9b499" />
            <path
                d="M256.72,143.48s8.09-2.33,12.52-14.21a54,54,0,0,1-.77,11.94,18,18,0,0,0,7.5,19c.34.22.7.44,1.08.65,0,0-8.94-2.74-14.62-2.74a22.14,22.14,0,0,0-5.71-3.83Z"
                fill="#2f2e41" />
            <path d="M207.62,507.38s33,12.75,81.74-5.25L271.53,277.8H235.8Z" fill="#2f2e41" />
            <path d="M235.8,277.8s22.46,6.83,35.73,0l-4.79-100.12L263.4,165,233,173.73l-5,64.67Z" fill="#00f289" />
            <path
                d="M262.43,173.73s8.75,73.91,9.24,135.18l12.16,240.23s21.88.49,30.63-6.32c0,0-8.75-228.56-23.34-276.21l-.49-44.26s26.26,36.48,33.56,35.5c0,0,1.94,2.92,9.72-6.8l36.48-39.39-15.57-17.51-26.26,26.26-30.14-46.68s-14.11-14.73-36-15.63H224.65L201.16,163s1.21,95.87-9.24,160.47l-35.5,208.62s37.44,14.1,56.89,12.64c0,0,21.89-185.27,21.89-244.92,0,0,2.86-84.29-.21-118,0,0,3.63-7.5,8.76-3,0,0,4.27,5.11,6,4.62,0,0,3.82,0,6.93-7C256.72,176.4,258.73,170.33,262.43,173.73Z"
                fill="#00f289" />
            <path
                d="M262.43,173.73s8.75,73.91,9.24,135.18l12.16,240.23s21.88.49,30.63-6.32c0,0-8.75-228.56-23.34-276.21l-.49-44.26s26.26,36.48,33.56,35.5c0,0,1.94,2.92,9.72-6.8l36.48-39.39-15.57-17.51-26.26,26.26-30.14-46.68s-14.11-14.73-36-15.63H224.65L201.16,163s1.21,95.87-9.24,160.47l-35.5,208.62s37.44,14.1,56.89,12.64c0,0,21.89-185.27,21.89-244.92,0,0,2.86-84.29-.21-118,0,0,3.63-7.5,8.76-3,0,0,4.27,5.11,6,4.62,0,0,3.82,0,6.93-7C256.72,176.4,258.73,170.33,262.43,173.73Z"
                fill="#d5e7fd" opacity="0.6" />
            <path d="M548.81,616.25s-46.15,16-35.94,22.85H579l-4.71-26.88Z" fill="#00f289" />
            <path d="M631.32,617.32s-46.15,16-35.93,22.86h66.13l-4.71-26.89Z" fill="#00f289" />
            <path d="M574.29,612.22c-.22.47-3.92,7.92-12.31,8.89-7.59.88-12.63-4.29-13.17-4.86V601.17h25.48Z"
                fill="#f9b499" />
            <path d="M656.81,613.29c-.22.47-3.93,7.92-12.31,8.89-7.59.88-12.63-4.29-13.18-4.86V592.91h25.49Z"
                fill="#f9b499" />
            <polygon
                points="542.01 605.14 577.69 605.14 595.25 399.53 628.1 600.61 661.52 601.17 647.93 323.5 547.67 336.66 542.01 605.14"
                fill="#00f289" />
            <path
                d="M441.3,264.32l7.33,26.9,77.75-24.41,12-19.05a465,465,0,0,1,0,81.83l-12,145s26.41,21.43,54.31,16.94l8-154.95L621,492.13s46.84-4.1,55.8-14.57l-25.9-247.62,14.94-66.15s-1-9.08-12-14.06L612.07,129.3s-35.87-1.49-70.25,20.93c0,0-13.45,1.63-17.93,21.74L501,238.91Z"
                fill="#00f289" />
            <path
                d="M441.3,264.32l7.33,26.9,77.75-24.41,12-19.05a465,465,0,0,1,0,81.83l-12,145s26.41,21.43,54.31,16.94l8-154.95L621,492.13s46.84-4.1,55.8-14.57l-25.9-247.62,14.94-66.15s-1-9.08-12-14.06L612.07,129.3s-35.87-1.49-70.25,20.93c0,0-13.45,1.63-17.93,21.74L501,238.91Z"
                fill="#d5e7fd" opacity="0.6" />
            <path
                d="M642.26,177l-2.26-.15c3-45.68-29.72-49.91-30-49.95l.26-2.26C610.56,124.72,645.41,129.22,642.26,177Z"
                fill="#2f2e41" />
            <path
                d="M233.59,125l-2.79,27.86a4.94,4.94,0,0,0,.57,2.85c2.46,4.56,10.86,19.31,19,24.26,0,0,7.27-8.18,6.23-27.46l.1-9Z"
                fill="#f9b499" />
            <path d="M288.37,197.8H286.1c0-19.94-22.5-40.57-22.7-40.76l4.23.6C268.47,158.42,288.37,176.87,288.37,197.8Z"
                fill="#2f2e41" />
            <path d="M205.93,185l-2.26-.21c.07-.75,1.8-18.25,12.22-25.93l1.89.66C208.19,166.61,206,184.84,205.93,185Z"
                fill="#2f2e41" />
            <path
                d="M215.49,238.63a21.64,21.64,0,0,1-2.5-.15l.17-1.13c.09,0,8.78,1.21,9.63-3.76L221,206.34l1.13-.07,1.78,27.37v.06C223.26,237.94,218.51,238.63,215.49,238.63Z"
                fill="#e1e1e1" />
            <ellipse cx="210.68" cy="238.91" rx="3.53" ry="2.8" fill="#2f2e41" />
            <path
                d="M201.16,163s-14.68.35-15.81,21.88L164.53,256.3s-9.84,27.53,13.55,24.54l43.5-18.69-5-20.44-16.34,5.36S202.08,212.24,201.16,163Z"
                fill="#00f289" />
            <path
                d="M201.16,163s-14.68.35-15.81,21.88L164.53,256.3s-9.84,27.53,13.55,24.54l43.5-18.69-5-20.44-16.34,5.36S202.08,212.24,201.16,163Z"
                fill="#d5e7fd" opacity="0.6" />
            <path d="M210.68,266.83s-16.91,70.46-24.14,88.28c0,0,11-61.42,11.14-82.69Z" opacity="0.1" />
            <polygon points="200.22 247.07 201.19 222.05 204.81 245.56 200.22 247.07" opacity="0.1" />
            <path
                d="M217.1,243.9a97.83,97.83,0,0,0,21-5.84s14.72-3.77,24.37.85c0,0,5.4,4.59-13.94,5,0,0-3.45,3.7,10.07,3.17l21.38.05s5.88,4.82-17.51,6.92a39.63,39.63,0,0,1-24.37-1.59l-17.27,6.45Z"
                fill="#f9b499" />
            <path d="M354.82,194.15l5.07-7.92a33.7,33.7,0,0,1,10.5-22.44v36.75s-.26,1.39-4.31,1.55l-2,2.44Z"
                fill="#f9b499" />
            <rect x="370.39" y="102.05" width="107.26" height="133" fill="#00f289" />
            <path
                d="M453.65,207.68c9.29,2.37,19.73,6.85,17.54-11.51-1.69-14.17-17.51-50.07-27.67-54.46s-14.4-2.07-16,12.71C425.9,170.14,423.59,200,453.65,207.68Z"
                fill="#2f2e41" />
            <path
                d="M450.37,172l4.79-1.24c-1.45-5.62-4.24-8-6.32-9a8,8,0,0,0-4.59-.78c-5.43.36-9.89-1.83-13.25-6.54a28.42,28.42,0,0,1-4.6-11.63l-4.89.67A33.14,33.14,0,0,0,427,157.29c4.39,6.15,10.53,9.12,17.74,8.59l.28,0C445.53,165.78,448.75,165.69,450.37,172Z"
                fill="#e6e6e6" />
            <path
                d="M435.9,161.1a24.1,24.1,0,0,0,4.53,14.3c.43.6,1.43,0,1-.58a23.14,23.14,0,0,1-4.38-13.72.58.58,0,0,0-1.15,0Z"
                fill="#e6e6e6" />
            <path
                d="M437.51,168.86a29.39,29.39,0,0,1,18.93,21.47c.15.73,1.27.42,1.12-.31a30.56,30.56,0,0,0-19.74-22.27c-.71-.24-1,.87-.31,1.11Z"
                fill="#e6e6e6" />
            <path
                d="M448.13,175.05A35.06,35.06,0,0,0,445,194.53c.09.73,1.25.74,1.15,0a34.07,34.07,0,0,1,2.95-18.9c.32-.67-.68-1.26-1-.58Z"
                fill="#e6e6e6" />
            <path
                d="M394.37,207.68c-9.29,2.37-19.72,6.85-17.53-11.51,1.69-14.17,17.51-50.07,27.66-54.46s14.41-2.07,16,12.71C422.13,170.14,424.44,200,394.37,207.68Z"
                fill="#2f2e41" />
            <path
                d="M397,170.78c.4-3.19,4.73-5,6.56-4.9.3,0,.61,0,.91,0,14.5,0,20.35-14.24,21.52-22.82.74-5.46.05-21.15,0-21.82l-4.94.22c0,.16.71,15.92,0,20.93-.26,2-3,19.1-17.33,18.53a12.62,12.62,0,0,0-6.86,2.12,10,10,0,0,0-4.81,7.1Z"
                fill="#e6e6e6" />
            <path
                d="M411.86,161.1a23.14,23.14,0,0,1-4.38,13.72c-.43.6.57,1.18,1,.58A24.18,24.18,0,0,0,413,161.1a.58.58,0,0,0-1.16,0Z"
                fill="#e6e6e6" />
            <path
                d="M411.1,167.75A30.52,30.52,0,0,0,391.36,190c-.16.73,1,1,1.11.31a29.39,29.39,0,0,1,18.93-21.47c.7-.24.4-1.36-.3-1.11Z"
                fill="#e6e6e6" />
            <path
                d="M399.79,175.63a34.07,34.07,0,0,1,2.95,18.9c-.1.74,1.06.73,1.15,0a35.06,35.06,0,0,0-3.11-19.48c-.31-.68-1.31-.09-1,.58Z"
                fill="#e6e6e6" />
            <path
                d="M449.09,153.17A35.34,35.34,0,0,0,433,160.65c-.58.47.24,1.28.82.81a34.08,34.08,0,0,1,15.63-7.17c.73-.13.42-1.25-.31-1.12Z"
                fill="#e6e6e6" />
            <path
                d="M413.55,159.42a20.73,20.73,0,0,0-12.39-6.74c-.73-.11-1,1-.31,1.11a19.72,19.72,0,0,1,11.88,6.45c.49.56,1.31-.26.82-.82Z"
                fill="#e6e6e6" />
            <path
                d="M585.67,265.32l36.87-101.53-11.46-4,15.44-9.11s-3.48-19.93-16.44-24.91c0,0,4.49,11,2,20.21a69,69,0,0,0-6,17.77S587.16,232.93,585.67,265.32Z"
                fill="#00f289" />
            <path
                d="M585.67,265.32l36.87-101.53-11.46-4,15.44-9.11s-3.48-19.93-16.44-24.91c0,0,4.49,11,2,20.21a69,69,0,0,0-6,17.77S587.16,232.93,585.67,265.32Z"
                opacity="0.1" />
            <path d="M574.21,161.06l-11.46-3s-5.48-13.4,15-28.82c0,0-3.49,92.69,8,136,0,0-21.43-84.31-20.93-97.21Z"
                fill="#00f289" />
            <path d="M574.21,161.06l-11.46-3s-5.48-13.4,15-28.82c0,0-3.49,92.69,8,136,0,0-21.43-84.31-20.93-97.21Z"
                opacity="0.1" />
            <path
                d="M577.26,149.65l6.08-6,5.45,1.45,10.52-4.64-.4,5.55,9.48,10.25s-21.16,75.06-22.72,109C585.67,265.32,576.27,245.05,577.26,149.65Z"
                fill="#00f289" />
            <rect x="538.74" y="196.3" width="96.98" height="0.57" transform="translate(372.4 777.38) rotate(-88.21)"
                fill="#2f2e41" />
            <circle cx="584.88" cy="155.56" r="1.83" opacity="0.1" />
            <circle cx="583.06" cy="171.97" r="1.83" opacity="0.1" />
            <circle cx="583.06" cy="188.38" r="1.83" opacity="0.1" />
            <path d="M608.39,94.16l1.69,31.65c-4.71,17-21.29,19.33-21.29,19.33l-9.79-17,2.27-6.85,22-29Z"
                fill="#f9b499" />
            <path d="M539.74,207.89c0-.61-1.33-61.23,39.76-81.28v2.52C539.76,148.52,542,207.19,542,207.79Z"
                fill="#2f2e41" />
            <circle cx="541.3" cy="215.63" r="7.79" fill="#d1d3d4" />
            <circle cx="541.3" cy="215.63" r="4.11" opacity="0.1" />
            <path
                d="M441.3,264.32s-12.95.13-23.25,4.13c0,0-15.27,0-10.07,4.58,0,0,6.35,3.72,14.65,0,0,0-11.91,15.45-23.7,22,0,0-5.67,3.15,0,5.44,0,0-5.56,3.72-2.52,6,0,0,2.75,5.44,8.76,0,0,0,.42,6,6.08,2.42l4.51-3.85s1.91,5.72,8.25.86c0,0,18.18-9.24,21.29-26.94Z"
                fill="#f9b499" />
            <polygon points="607.29 350.42 597.37 278.94 699.84 262.83 709.35 334.31 607.29 350.42" fill="#2f2e41" />
            <path
                d="M626.47,233.6c-.12,0-11.69-2.4-11.11-10.21l5.39-26.15.55.12-5.38,26.11c-.54,7.27,10.55,9.55,10.66,9.58Z"
                fill="#e1e1e1" />
            <path d="M572.12,154.7l11.22-11,5.45,1.45-9.79-17S568.91,135.21,572.12,154.7Z" fill="#2f2e41" />
            <path d="M591.61,144.51s14.71-6.09,18.47-18.7a30.42,30.42,0,0,1,2,20.21l-3.68,10.28-9.48-10.25Z"
                fill="#2f2e41" />
            <circle cx="627.69" cy="233.11" r="3.22" fill="#2f2e41" />
            <circle cx="641.33" cy="234.59" r="3.22" fill="#2f2e41" />
            <path
                d="M194.53,239.48c-1.65,0-5.37-.26-7.72-2.36a6.12,6.12,0,0,1-2-4.53l1.94-26.33,1.13.09-1.94,26.26a5,5,0,0,0,1.65,3.66c2.66,2.39,7.66,2.06,7.71,2l.08,1.13A7.66,7.66,0,0,1,194.53,239.48Z"
                fill="#e1e1e1" />
            <ellipse cx="198.85" cy="238.77" rx="3.53" ry="2.8" fill="#2f2e41" />
            <path
                d="M230.8,152.86s-6.34,1.27-7.39,9.52a4.92,4.92,0,0,0,.3,2.46l8.85,22.5s4.62-13.76,11.19-8.51c0,0,4.06,5.67,6,5.43,0,0,3,1.24,7-6.54,0,0,2.55-6.32,5.71-2.67l6.81,4.92s-.48-22.05-12.52-25.7c0,0,1.08,16.63-6.33,25.7,0,0-7.53-2.89-19-24.26A4.11,4.11,0,0,1,230.8,152.86Z"
                fill="#00f289" />
            <path
                d="M230.8,152.86s-6.34,1.27-7.39,9.52a4.92,4.92,0,0,0,.3,2.46l8.85,22.5s4.62-13.76,11.19-8.51c0,0,4.06,5.67,6,5.43,0,0,3,1.24,7-6.54,0,0,2.55-6.32,5.71-2.67l6.81,4.92s-.48-22.05-12.52-25.7c0,0,1.08,16.63-6.33,25.7,0,0-7.53-2.89-19-24.26A4.11,4.11,0,0,1,230.8,152.86Z"
                opacity="0.1" />
            <path
                d="M221.58,207.44a1.12,1.12,0,0,1-1.11-.93c-3.87-20.9-13.28-20.5-13.38-20.47h-.26a12.42,12.42,0,0,0-9.64,2.35c-7.13,5.44-8.75,17.94-8.77,18.07a1.12,1.12,0,0,1-1.26,1,1.14,1.14,0,0,1-1-1.26c.07-.55,1.74-13.56,9.64-19.59A14.56,14.56,0,0,1,207,183.77c1.44,0,11.61.4,15.66,22.33a1.14,1.14,0,0,1-.91,1.32A.75.75,0,0,1,221.58,207.44Z"
                fill="#2f2e41" />
            <circle cx="288.42" cy="204.73" r="7.48" fill="#d1d3d4" />
            <circle cx="288.42" cy="204.73" r="4.41" opacity="0.1" />
            <path
                d="M188,617.22s-7.95,20.75,0,22.69h54a1.5,1.5,0,0,0,.93-2.69c-2.9-2.27-9.38-6.29-23.78-13.19C219.15,624,203.43,631.48,188,617.22Z"
                fill="#2f2e41" />
            <path
                d="M256.28,616.46s-8.52,21.51-.58,23.45h54a1.51,1.51,0,0,0,.93-2.69c-2.9-2.27-8.17-6-22.57-12.87C288,624.35,272.73,629.2,256.28,616.46Z"
                fill="#2f2e41" />
            <path d="M256.72,154.27V143.48s-10.15-3-16.64-10.76C240.08,132.72,240.24,148.84,256.72,154.27Z"
                fill="#f7a48b" />
            <ellipse cx="252.05" cy="115.88" rx="19.48" ry="28.42" fill="#f9b499" />
            <path
                d="M185.35,184.91s-18.36-17.8-3.93-38.4a38.44,38.44,0,0,1,6-6.54c5.16-4.57,18.65-17.34,21.78-28.32,0,0,7.5-32,37.15-32.56,0,0,26.31-4.73,28,13.08,0,0,1.18,18.37-2.75,27.56,0,0,1.83-14-6.75-25.36,0,0-3.3,21.35-16.94,22.66,0,0,10.3-6.49,10.3-15.12,0,0-9.72,11-20.73,11.18,0,0-1.11-3.67-4.39-4.08,0,0-1.76,9.15.57,16l-2.79,27.86s-5.13,2.25-6.15,5.24L201.16,163S186.61,163.25,185.35,184.91Z"
                fill="#2f2e41" />
            <ellipse cx="233.02" cy="117.03" rx="5.04" ry="8.02" fill="#f9b499" />
            <path d="M581.27,121.26l-1.77,5.35v2.52s13,.37,17.59-17.92Z" fill="#f7a48b" />
            <ellipse cx="581.27" cy="87.78" rx="22.16" ry="33.48" fill="#f9b499" />
            <path
                d="M555.42,54.31s-8.93,3.38-3.08,12.93c0,0,12.62,10.46,34.78-6.47a17.35,17.35,0,0,0,13.1,9.66s3,9.69,3.1,13.52l9.41-6.31s4.55-25.48-9.3-26.1c0,0,.62-10.46-15.08-6.46,0,0-12.93,4.31-23.39.92,0,0-7.69-7.39-11.08,0C553.88,46,553.26,48.77,555.42,54.31Z"
                fill="#2f2e41" />
            <ellipse cx="608.39" cy="85.6" rx="9.39" ry="5.32" transform="translate(338.85 637.7) rotate(-71.99)"
                fill="#f9b499" />
            <path d="M398.93,300.5a136.11,136.11,0,0,0,12.32-9.73" fill="none" stroke="#f7a48b"
                stroke-miterlimit="10" />
            <path d="M398.06,306c.76,1,8.55-6.92,14-10.32" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <path d="M405.17,306.51s.8,2,12-10.88" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <path d="M424,297.52s-1.94,2.83-8.25,7.56" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <path
                d="M661.52,322.44a3.69,3.69,0,0,1-3.39,3.47s-11.82,2.81-8.21,19.43c0,0,1.8,2.6,4.6,0,0,0-1,10.61,2.4,10.41,0,0,3.39.6,4.6-.8,0,0,2.41,2.8,5.82,0,0,0,2.66,2.4,4.93-.2,0,0,5.48,2.6,7.08,0L681,337.53s1-6.48-2.21-10.42l.2-3.75Z"
                fill="#f9b499" />
            <line x1="661.52" y1="354.95" x2="661.52" y2="339.32" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <line x1="667.34" y1="354.95" x2="667.34" y2="339.32" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <line x1="672.27" y1="354.75" x2="671.3" y2="339.32" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <line x1="654.52" y1="345.34" x2="658.35" y2="334.33" fill="none" stroke="#f7a48b" stroke-miterlimit="10" />
            <path d="M657.32,322.22l24.28,1.28s15.65-56.49,11.22-71.84l-26.94-87.87-14.94,66.15,14.42,35.38Z"
                fill="#00f289" />
            <path d="M657.32,322.22l24.28,1.28s15.65-56.49,11.22-71.84l-26.94-87.87-14.94,66.15,14.42,35.38Z"
                fill="#d5e7fd" opacity="0.6" />
            <path
                d="M645.92,234.87c-1.25,0-2.14-.07-2.26-.08l0-.56c.12,0,11.42.89,12.1-3.89L657,201.67l.57,0-1.25,28.7C655.8,234.33,649.42,234.87,645.92,234.87Z"
                fill="#e1e1e1" />
            <path
                d="M656.19,201.73c-.42-11-4.22-17-7.32-20.14a11.91,11.91,0,0,0-12.3-2.78c-10.65,3.72-14.41,18.61-14.44,18.76l-2.21-.54c.16-.66,4.1-16.24,15.9-20.37A14.2,14.2,0,0,1,650.47,180c3.4,3.39,7.54,9.91,8,21.65Z"
                fill="#2f2e41" />
        </svg>

        <form class="col-lg-6 row" action="mailto:emailid@example.com" method="post" enctype="text/plain">

            <!-- <div class="row"> -->


            <p class="col-lg-12" style="margin-bottom: 20px">
                Your health journey is unique, and we understand that personalized guidance is crucial to making
                informed decisions. Our "Consult a Doctor" service is here to provide you with expert insights
                tailored to your individual needs.
            </p>
            <div class="col-lg-6" style="margin-bottom: 10px">

                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Please enter firstname" />

            </div>
            <div class="col-lg-6" style="margin-bottom: 10px">

                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Please enter lastname" />

            </div>


            <div class="col-lg-6" style="margin-bottom: 10px">

                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Please enter email" />

            </div>
            <div class="col-lg-6" style="margin-bottom: 10px">

                <label for="phoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="phoneName" placeholder="Please enter phone number" />

            </div>
            <div class="col-lg-12" style="margin-bottom: 10px">

                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" placeholder="Please enter age" />

            </div>
            <div class="col-lg-12" style="margin-bottom: 10px">

                <label for="message">Describe Problem/message</label>
                <textarea class="form-control" rows="7" placeholder="Please enter message"
                    style="resize:none"></textarea>

            </div>

            <div class="col-lg-12">
                <button class="btn-primary" type="submit" name="submit">
                    CONSULT
                </button>

            </div>
            <!-- </div> -->
        </form>

    </div>



















    <?php include "footer.php"; ?>

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