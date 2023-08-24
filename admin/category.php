<?php 
include 'includes/config.php';
include 'controllers/category.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Categories | Heendef Admin</title>
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
      <h1>Blog Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active">Blog Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
              <div class="card">
            <div class="card-body">
              <h5 class="card-title">New Category</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="name" >
                    <label for="floatingName">Name</label>
                  </div> 
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Description<label>
                  </div>
                </div>   
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>
       </div>
    </section>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog Categories</h5>
              <?php if (!empty($_GET['del']=="success" )) {?>
                <div id="tbl" class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                &#10004; Successful  
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php }elseif($_GET['del']=="failure"){ ?>
              <div id="tbl" class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                 &#10060; Unsuccessful 
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $cnt=1; $qls = mysqli_query($conn,"SELECT * FROM category ORDER BY id ASC");
                  while ($row=mysqli_fetch_array($qls)) {   ?>
                  <tr>
                    <th scope="row"><?php echo htmlentities($cnt); ?></th>
                    <td><?php echo htmlentities($row['name']); ?></td>
                    <td><?php echo htmlentities($row['category']); ?></td>
                    <td>
                      <button onclick="window.location.href='edit-cat?id=<?php echo htmlentities($row['id']); ?>'" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                      <button onclick="window.location.href='del-cat?id=<?php echo htmlentities($row['id']); ?>';" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      
                    </td>
                  </tr>
                <?php $cnt=$cnt+1;} ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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