<?php
include 'includes/config.php';
include 'controllers/images.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Album Images | Heendef Admin</title>
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
            <h1>Album Images</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Edit Site</li>
                    <li class="breadcrumb-item active">Album Images</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Slide</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title"
                                        placeholder="The name of the image">
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

                            <!-- <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="subtitle" placeholder="Description"
                                        id="floatingTextarea" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea">Description</label>
                                </div>
                            </div> -->

                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-control" name="albumName">
                                    <option value="">--- Choose an album ---</option>
                                        <?php

                                        $query = "SELECT * FROM album";
                                        $result = $conn->query($query);
                                        if ($result->num_rows > 0) {
                                            
                                            while ($row = $result->fetch_assoc()) {
                                                $albumName = $row['title'];
                                                echo "<option value=$albumName>$albumName</option>";
                                            }
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <img id="preview" src="#" alt="Preview"
                                        style="display: none; max-width: 400px; max-height: 300px;" />
                                    <hr>
                                    <input type="file" class="form-control" name="image" id="image" accept="image/*"
                                        onchange="previewImage()">

                                    <br />
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
                            <h5 class="card-title">Carousel Slides</h5>
                            <?php if (!empty($_GET['del'] == "success")) { ?>
                                <div id="tbl"
                                    class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
                                    role="alert">
                                    &#10004; Successful
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php } elseif ($_GET['del'] == "failure") { ?>
                                <div id="tbl"
                                    class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                    role="alert">
                                    &#10060; Unsuccessful
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php } ?>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>

                                        <th scope="col">Image</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cnt = 1;
                                    $qls = mysqli_query($conn, "SELECT * FROM images ORDER BY id DESC");
                                    while ($row = mysqli_fetch_array($qls)) {
                                        $status = $row['active'];
                                        ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $cnt; ?>
                                            </th>
                                            <td>
                                                <?php echo htmlentities($row['title']); ?>
                                            </td>

                                            <td><img style="max-height:100px; min-height: 100px;"
                                                    src="<?php echo htmlentities($row['image_path']); ?>"></td>
                                            <td>
                                                <?php if ($status == 1): ?>
                                                    &#10004;
                                                <?php else: ?>
                                                    &#10060;
                                                <?php endif ?>
                                            </td>

                                            <td>
                                                <button
                                                    onclick="window.location.href='edit-image?id=<?php echo htmlentities($row['id']); ?>'"
                                                    class="btn btn-primary"><i class="bi bi-pencil"></i></button>
                                                <button
                                                    onclick="window.location.href='del-image?id=<?php echo htmlentities($row['id']); ?>';"
                                                    class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php $cnt = $cnt + 1;
                                    } ?>
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