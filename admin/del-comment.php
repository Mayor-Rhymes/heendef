<?php 
include 'includes/config.php';
$id = intval($_GET['id']);
$sql =mysqli_query($conn,"DELETE FROM comments WHERE id='$id'");
$xql = mysqli_query($conn,"	DELETE FROM reply WHERE comId='$id'");
if ($sql && $xql) {
	header("location:comments?del=success#tbl");

}else{
	header("location:comments?del=failure#tbl");
}
 ?>