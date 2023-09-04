<?php
include 'includes/config.php';
include 'controllers/album-images.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Albums | Heendef Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
            <h1>Album</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Edit Site</li>
                    <li class="breadcrumb-item active">Album</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">


                        <!-- Floating Labels Form -->
                        <!-- <form class="row g-3" method="POST">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" name="title" placeholder="Your Name">
                  <label for="floatingName">Title</label>
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

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="subtitle" placeholder="Description" id="floatingTextarea"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Description</label>
                </div>
              </div> -->

                        <!-- <div class="col-md-6">
                  <div class="form-floating">
                    <img id="preview" src="#" alt="Preview" style="display: none; max-width: 400px; max-height: 300px;" />
                    <hr>
                    <input type="file" class="form-control"  name="image" id="image" accept="image/*" multiple />
                
        <br />
                  </div>

                </div> -->


                        <div>
                            <div class="row">
                                <h5 class="card-title col-8">Album Images</h4>
                                    <button type="button" class="btn btn-primary col-4" data-bs-toggle="modal"
                                        data-bs-target="#newImageModal">Add New Image</button>
                            </div>


                            <div class="modal fade" id="newImageModal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success" style="--bs-bg-opacity: .5;">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Image To
                                                    Album</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="Enter Name" />
                                                </div>

                                                <br />

                                                <div class="form-group">
                                                    <label for="album-name">Album Name</label>
                                                    <select class="form-select" name="album-name" id="album-name">
                                                        <?php
                                                        if (isset($conn)) {

                                                            $sql = "SELECT * FROM album";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {

                                                                    echo "<option value=" . $row['title'] . ">" . $row['title'] . "</option>";
                                                                }
                                                            }
                                                        } else {
                                                            echo "<option value=" . $row['title'] . ">Nothing to show</option>";
                                                        }

                                                        ?>

                                                    </select>
                                                </div>

                                                <br />

                                                <div class="form-group">
                                                    <label for="file">Add image</label>
                                                    <input type="file" class="form-control" name="image" id="image"
                                                        accept="image/*" onchange="previewImage()" />
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <table class="table datatable">

                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Album Name</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                            </table>





                        </div>



                        <!--</form> End floating Labels Form -->

                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <?php include 'includes/footer.php'; ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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