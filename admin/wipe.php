<?php 
include 'includes/config.php';
$data = $_GET['data'];
if ($data=="about") {
	$about = mysqli_query($conn,"DELETE FROM about");
	if ($about==true) {
		header("location:text");
	}
}elseif($data=="founder") {
	$about = mysqli_query($conn,"DELETE FROM founder");
	if ($about==true) {
		header("location:text");
	}
}else{
	header("location:404");
}
 ?>
