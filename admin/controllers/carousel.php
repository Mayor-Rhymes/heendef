<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image"])) {
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $title = mysqli_real_escape_string($conn,$title);
     $subtitle = mysqli_real_escape_string($conn,$subtitle);
    $targetDirectory = "uploads/carousel/"; // Change this to the directory where you want to store the images
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        die("File already exists.");
    }

    // Check file size (10MB)
    $maxFileSize = 20 * 1024 * 1024;
    if ($_FILES["image"]["size"] > $maxFileSize) {
        die("File size exceeds the maximum allowed limit (20MB).");
    }

    // Allow only certain image file formats (you can add more if needed)
    $allowedFormats = array("jpg", "jpeg", "png","webp");
    if (!in_array($imageFileType, $allowedFormats)) {
        die("Only JPG, JPEG, PNG, and WebP files are allowed.");
    }

    // Move the uploaded file to the target directory
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        die("Error uploading the file.");
    }


    $imagePath = mysqli_real_escape_string($conn, $targetFile);
    $imageName = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    $active = 1;
    $sql = "INSERT INTO carousel (title,description,image_path, image_name,active) VALUES ('$title','$subtitle','$imagePath', '$imageName','$active')";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:carousel");
}
?>
