<?php 
include 'includes/config.php';
include 'controllers/post.php' ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create Post | Heendef Admin Dashboard</title>
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
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include 'includes/header.php'; ?>

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
<?php include 'includes/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Post</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active">Create Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        

       
          <div class="card">
            <form class="card-body" method="POST" enctype="multipart/form-data">
             <wbr>
                  <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="title" >
                    <label for="floatingName">Title</label>
                  </div>
                </div>
                <br>
                    <!-- <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="subject" maxlength="250" >
                    <label for="floatingName">Subject</label>
                  </div>
                </div> -->
                <br>
                     <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" name="category" aria-label="Floating label select example">
                        <option value="">Select Category</option>
                         <?php $cat = mysqli_query($conn,"SELECT * FROM category"); while($rw=mysqli_fetch_array($cat)){ ?>
               
                        <option value="<?php echo htmlentities($rw['id']); ?>"><?php echo htmlentities($rw['name']); ?></option>
                        <?php } ?>
                      </select>
                      <label for="floatingSelect">Category</label>
                    </div>
                  
              


              <!-- Quill Editor Full -->
                <br>
              <!-- <div id="editor-container">
                <h3>Body Goes Here!!</h3>
              
              </div>
               <input type="hidden" id="hidden-field" name="hidden">
                <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->

               
                <textarea
                class="form-control col-12"
                placeholder = "Please enter body"
                name = "body"
                rows="4"
                style="resize: none"
                ></textarea>
            <script>
        function previewImage() {
            var fileInput = document.getElementById('image');
            var imagePreview = document.getElementById('preview');

            imagePreview.style.display = 'block';
            imagePreview.src = URL.createObjectURL(fileInput.files[0]);
        }
        // Initialize Quill
        var quill = new Quill('#editor-container', {
            theme: 'snow',
        });

        // Listen for changes in the Quill editor
        quill.on('text-change', function() {
            // Get the HTML content of the editor
            var editorContent = quill.root.innerHTML;
            
            // Update the hidden text field with the editor content
            document.getElementById('hidden-field').value = editorContent;
        });
    </script>
              <br>

                    <div class="col-md-6">
                  <div class="form-floating">
                    <img id="preview" src="#" alt="Preview" style="display: none; max-width: 400px; max-height: 300px;" />
                    <hr>
                    <input type="file" class="form-control" title="Image" name="image" id="image" accept="image/*" onchange="previewImage()" >
                       <label for="floatingTextarea">Image</label>
                
        <br />
                  </div>

                </div>
              <!-- End Quill Editor Full -->
                
                   <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Post <i class="bi bi-pencil"></i></button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
</div>
            </div>
         

          </div>

        </div>

      
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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