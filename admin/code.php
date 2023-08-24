<?php session_start(); 
include 'includes/config.php'; 

if (empty($_SESSION['id'])) {
  header("location:login");
}else{
  $id = intval($_SESSION['id']);
$check =mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
while ($rw=mysqli_fetch_assoc($check)) {
  if ($rw['active']=="1") {
    header("location:index");
  }else{
    header("location:verify");
  }
}
if ($_SERVER["REQUEST_METHOD"]==="POST") {
  $code= $_POST['code'];
  $sql = mysqli_query($conn,"SELECT * FROM admin");
  while($row=mysqli_fetch_array($sql)){
    $code_db = $row['code'];
    if ($code==$code_db) {
      $active =1;
       $token = bin2hex(random_bytes(64));
      $xql = mysqli_query($conn,"UPDATE admin SET active='$active',token='$token' WHERE code='$code'");
      if ($xql==true) {
        header("location:login");
      }
    }
  }

}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | Heendef Admin Dashboard</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                   <span class="d-none d-lg-block">Heendef Admin</span>&nbsp;
                 
                 
                </a>

              </div><!-- End Logo -->
                 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

          <form class="row g-3 needs-validation" novalidate method="POST">
              <div class="card mb-3">

                <div class="card-body"> 

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Verify Your Account</h5>
                   
                    <p class="text-center small" style="color:red;">Enter the code sent to your mail</p>
                  </div>

             
                    <div class="col-12">
                      <label for="yourName" class="form-label">Code</label>
                      <input type="number" name="code" maxlength="4" minlength="4" class="form-control" required>
                      <div class="invalid-feedback">Please Supply Code</div>
                    </div>
                <br>
                    <div class="col-12">
                      <button class="btn btn-success w-100 btn-lg" type="submit" id="submit" name="submit">Verify <i class="bi bi-check-circle"></i></button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Didnt get the code <a href="resend">Resend</a></p>
                    </div>
                  </form>

                </div>
              </div>

         

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/register.js"></script>
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