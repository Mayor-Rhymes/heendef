<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "heendef");
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT SUBSTRING(description, 1,260) AS descr FROM about ORDER BY id DESC "; // Replace 'column_name' with the column containing the text you want to display.

$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$text = $row['descr'];


//mysqli_free_result($result);
mysqli_close($conn);

echo $text . "...";

?>
