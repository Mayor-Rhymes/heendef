<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['name'];
    $description = $_POST['description'];
   
    $title = mysqli_real_escape_string($conn,htmlspecialchars($title));
     $description = mysqli_real_escape_string($conn,htmlspecialchars($description));
    
  $id = intval($_GET['id']);
    $sql = "UPDATE category SET name='$title', description='$description' WHERE id='$id'";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:category?del=success#tbl");
}
?>
