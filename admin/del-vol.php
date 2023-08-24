<?php 
include 'includes/config.php';
$id = intval($_GET['vid']);
$sql =mysqli_query($conn,"DELETE FROM volunteers WHERE id='$id'");
if ($sql) {
	header("location:volunteers?del=success#tbl");

}else{
	header("location:volunteers?del=failure#tbl");
}
 ?>
