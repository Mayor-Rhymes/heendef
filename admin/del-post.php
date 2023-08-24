<?php 
include 'includes/config.php';
$id = intval($_GET['id']);
$sql =mysqli_query($conn,"DELETE FROM blog WHERE id='$id'");
$row=mysqli_fetch_assoc($sql);
$code = $row['code'];
$xql =mysqli_query($conn,"DELETE FROM comments WHERE code='$code'");
$zql =mysqli_query($conn,"DELETE FROM reply WHERE code='$code'");
if ($sql) {
	header("location:posts?del=success#tbl");

}else{
	header("location:posts?del=failure#tbl");
}
 ?>
