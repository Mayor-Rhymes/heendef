<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
  
    $sql = "INSERT INTO category (name,description) VALUES('$name','$description')";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:category#list");
}
?>
