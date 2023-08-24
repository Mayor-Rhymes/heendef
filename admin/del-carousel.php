<?php 
include 'includes/config.php';
require 'controllers/functions.php';
$id = intval($_GET['id']);
$xql = mysqli_query($conn,"SELECT * FROM carousel WHERE id='id'");
$row=mysqli_fetch_assoc($xql);
$filename = $row['image_name'];
$folderPath =$row['image_path'];
deleteFile($path,$name);
$sql =mysqli_query($conn,"DELETE FROM carousel WHERE id='$id'");
if ($sql) {
	header("location:carousel?del=success#tbl");

}else{
	header("location:carousel?del=failure#tbl");
}
 ?>
