<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $date = $_POST['date'];
     $start = $_POST['start'];
    $stop = $_POST['stop'];
    $location = $_POST['location'];
    $title = mysqli_real_escape_string($conn,htmlspecialchars($title));
     $body = mysqli_real_escape_string($conn,htmlspecialchars($body));
      $date = mysqli_real_escape_string($conn,htmlspecialchars($date));
      $start = mysqli_real_escape_string($conn,htmlspecialchars($start));
      $stop = mysqli_real_escape_string($conn,htmlspecialchars($stop));
      $location = mysqli_real_escape_string($conn,htmlspecialchars($location));
    
     
    //$code = "HDE".rand(1,1000);

  $val = intval($_POST['completed']);
  $id = intval($_GET['id']);
    $sql = "UPDATE events SET title='$title', body='$body',evtDate='$date',start='$start',stop='$stop',location='$location', completed='$val' WHERE id='$id'";
    $exec = mysqli_query($conn,$sql);
    if($exec){
        echo "<script>alert('updated successfully')</script>";
    }else{
        exit("Error");
    }
    
    header("location:events?del=success#tbl");
}
?>
