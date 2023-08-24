<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image"])) {
  $id = intval($_GET['id']);
  if (isset($_FILES['image'])) {
      
    $targetDirectory = "uploads/posts/"; // Change this to the directory where you want to store the images
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


    $image_path = mysqli_real_escape_string($conn, $targetFile);
    $image_name = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    }
    $sql = "UPDATE `blog` SET `image_name`='$image_name',`image_path`='$image_path' WHERE id='$id'";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        header("location:events?success=edit");
    }else{
        exit("Error");
    }
    
    header("location:edit-post?id=$id");
}
?>
