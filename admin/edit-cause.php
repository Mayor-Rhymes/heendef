<?php 
include 'includes/config.php';
include 'controllers/update/cause.php';
$cid = intval($_GET['id']);
$cause = mysqli_query($conn,"SELECT * FROM causes WHERE id='$cid'");
while ($cat=mysqli_fetch_assoc($cause)) {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Causes | Heendef Admin</title>
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


</head>

<body>

 <?php include 'includes/header.php'; ?>

 <?php include 'includes/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Causes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Edit Site</li>
          <li class="breadcrumb-item active">Edit Causes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
              <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Cause</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" value="<?php echo htmlentities($cat['title']); ?>" name="title" >
                    <label for="floatingName">Title</label>
                  </div>
                </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control"  value="<?php echo htmlentities($cat['subject']); ?>" id="floatingName" name="subject" maxlength="250" >
                    <label for="floatingName">Subject</label>
                  </div>
                </div>
          
                    <div class="col-md-12">
          
                </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="floatingName"  value="<?php echo htmlentities($cat['goal']); ?>" name="goal" >
                    <label for="floatingName">Goal</label>
                  </div>
                </div>
            <script>
        function previewImage() {
            var fileInput = document.getElementById('image');
            var imagePreview = document.getElementById('preview');

            imagePreview.style.display = 'block';
            imagePreview.src = URL.createObjectURL(fileInput.files[0]);
        }
      </script>
             
                <div class="col-md-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="body" id="floatingTextarea" style="height: 100px;">
                      <?php echo htmlentities($cat['body']); ?>
                    </textarea>
                    <label for="floatingTextarea">Body</label>
                  </div>
                </div>
                <br>
            <div class="col-md-12">
                
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example" name="status">
                      <option value="">Select Status </option>
                      <option value="0">Deactivate</option>
                      <option value="1">Activate</option>
                    
                    </select>

                  </div>
                </div> 
                    <div class="col-md-6">
                  <div class="form-floating">
                    <img src="<?php echo htmlentities($cat['image_path']); ?>" alt="Preview" style="max-width: 400px; max-height: 300px;" />
                    <hr>
                
                       <label for="floatingTextarea">Image</label>
                
        <br />
         <a href="img_cause?id=<?php echo intval($cat['id']);?>"> <button type="button" class="btn btn-primary btn-sm">Change Image <i class="bi bi-image"></i></button></a>

                  </div>

                </div>
   
         
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-success">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

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
<?php } ?>