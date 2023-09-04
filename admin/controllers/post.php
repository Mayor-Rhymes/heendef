<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image"])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    // $subject = $_POST['subject'];
    $code = "HDP".rand(1,1000);   
    $author = 1; 
    $category = $_POST['category'];
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
        unlink($targetFile);
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
    // Check image dimensions
    $maxWidth = 2084; // Change this to your desired maximum width
    $maxHeight = 2084; // Change this to your desired maximum height
    list($width, $height) = getimagesize($_FILES["image"]["tmp_name"]);
    if ($width > $maxWidth || $height > $maxHeight) {
        die ("<span color:red;>Image dimensions should be no larger than {$maxWidth}x{$maxHeight}px.</span>");

    }
    // Move the uploaded file to the target directory
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        die("Error uploading the file.");
    }


    $image_path = mysqli_real_escape_string($conn, $targetFile);
    $image_name = mysqli_real_escape_string($conn, $_FILES["image"]["name"]);
    
    $sql = "INSERT INTO blog (title,body,author,category,code,image_name,image_path) VALUES('$title','$body','$author','$category','$code','$image_name','$image_path')";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:posts");
}
?>
