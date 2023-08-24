<?php 
session_start();
include 'includes/config.php';
include 'controllers/update/events.php';
$evtId = intval($_GET['id']);
$evts=mysqli_query($conn,"SELECT * FROM events WHERE id = '$evtId'");
while ($ev=mysqli_fetch_assoc($evts)) {
  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events | Heendef Admin</title>
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
      <h1>Edit Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    
          <li class="breadcrumb-item active">Events</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
              <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Event</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="title" value="<?php echo htmlentities($ev['title']); ?>">
                    <label for="floatingName">Title</label>
                  </div>
                </div>
                    <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="body" value="<?php echo htmlentities($ev['body']); ?>" maxlength="250" >
                    <label for="floatingName">Body</label>
                  </div>
                </div>
          <div class="col-md-12">
                     <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" value="<?php echo htmlentities($ev['evtDate']); ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time (Start)</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="start" value="<?php echo htmlentities($ev['start']); ?>">
                  </div>

                </div>
                    <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time (End)</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="stop" value="<?php echo htmlentities($ev['stop']); ?>">
                  </div>
                  
                </div>

          </div>
      
          <div class="row mb-3">
                  <label for="inputAddress5" class="form-label">Location</label>
                  <input type="text" class="form-control" id="inputAddres5s" name="location" value="<?php echo htmlentities($ev['location']); ?>" placeholder="1234 Main St">
                </div>
                       <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="completed">
                      <option value="">Select Status </option>
                      <option value="0">Pending</option>
                      <option value="1">Completed</option>
                    
                    </select>
                  </div>
                </div>             
                    <div class="col-md-6">
                  <div class="form-floating">
                    <img src="<?php echo htmlentities($ev['image_path']); ?>" alt="Preview" style= "max-width: 400px; max-height: 300px;" />
                    <hr>

                       <label for="floatingTextarea">Image</label>
                
        <br />
        <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='img_evt?id=<?php echo $ev['id']; ?>'">Change Image <i class="bi bi-image"></i></button>
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