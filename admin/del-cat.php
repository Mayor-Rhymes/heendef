<?php 
include 'includes/config.php';
$id = intval($_GET['id']);
$sql =mysqli_query($conn,"DELETE FROM category WHERE id='$id'");
if ($sql) {
	header("location:category?del=success#tbl");
}else{
	header("location:category?del=failure#tbl");
}
 ?>
