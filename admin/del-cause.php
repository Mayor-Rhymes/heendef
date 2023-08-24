<?php 
include 'includes/config.php';
require 'controllers/functions.php';
$id = intval($_GET['id']);
$xql = mysqli_query($conn,"SELECT * FROM causes WHERE id='id'");
$row=mysqli_fetch_assoc($xql);
$filename = $row['image_name'];
$folderPath =$row['image_path'];
deleteFile($path,$name);
$sql =mysqli_query($conn,"DELETE FROM causes WHERE id='$id'");
if ($sql) {
	header("location:cause?del=success#tbl");

}else{
	header("location:cause?del=failure#tbl");
}
 ?>
