<?php 
include 'includes/config.php';
include 'controllers/text.php';
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Site Text | Heendef Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

 <?php include 'includes/header.php'; ?>

 <?php include 'includes/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Text</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Edit Site</li>
          <li class="breadcrumb-item active">Site Text</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
                <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Organization</h5>
                    <form class="row g-3"  method="POST" enctype="multipart/form-data">
             
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" value="" placeholder="Description" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Text goes here....</label>
                  </div>
                </div>         
                <div class="text-center">
                  <button type="submit" name="about" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
              

            </div>
          </div>
        </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
        function updateText() {
            $.ajax({
                url: 'controllers/views/about.php',
                type: 'GET',
                success: function (data) {
                    $('#dynamicText').text(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function () {
            updateText(); // Initial update on page load

        });
        function updateFounder() {
            $.ajax({
                url: 'controllers/views/founder.php',
                type: 'GET',
                success: function (data) {
                    $('#dynamicFounder').text(data);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function () {
            updateFounder(); // Initial update on page load

        });
    </script>




          <div class="col-lg-6">
                    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Saved</h5>
              <div class="textContainer">
               <div id="dynamicText">
      
    </div>
      <button onclick="window.location.href='wipe?data=about'" class="btn btn-danger"><i class="bi bi-trash"></i></button>
    </div>
  </div>

            </div>
          </div>
          </div>

               <div class="row">
        <div class="col-lg-6">
                <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Founder</h5>
                    <form class="row g-3"  method="POST" enctype="multipart/form-data">
             
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description_founder" value="" placeholder="Description" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Text goes here....</label>
                  </div>
                </div>         
                <div class="text-center">
                  <button type="submit" name="founder" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
              

            </div>
          </div>
        </div>
          <div class="col-lg-6">
                    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Saved</h5>
              <div class="textContainer">
               <div id="dynamicFounder">
      
    </div>
      <button onclick="window.location.href='wipe?data=founder'" class="btn btn-danger"><i class="bi bi-trash"></i></button>
    </div>
  </div>

            </div>
          </div>
          </div>
       </div>
    </section>


   </main><!-- End #main -->

<?php include 'includes/footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>