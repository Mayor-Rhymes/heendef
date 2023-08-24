<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $title = mysqli_real_escape_string($conn,htmlspecialchars($title));
     $description = mysqli_real_escape_string($conn,htmlspecialchars($description));
      $status = mysqli_real_escape_string($conn,htmlspecialchars($status));
  $id = intval($_GET['id']);
    $sql = "UPDATE carousel SET title='$title', description='$description', active='$status' WHERE id='$id'";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:carousel?del=success#tbl");
}
?>
