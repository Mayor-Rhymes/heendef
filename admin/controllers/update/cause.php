<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $goal = $_POST['goal'];
    $body = $_POST['body'];
    $status = $_POST['status'];
    $title = mysqli_real_escape_string($conn,htmlspecialchars($title));
     $subject = mysqli_real_escape_string($conn,htmlspecialchars($subject));
      $goal = mysqli_real_escape_string($conn,htmlspecialchars($goal));
      $body = mysqli_real_escape_string($conn,htmlspecialchars($body));
      
  $id = intval($_GET['id']);
    $sql = "UPDATE causes SET title='$title', subject='$subject', goal='$goal',body='$body',active='$status' WHERE id='$id'";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:cause?del=success#tbl");
}
?>
