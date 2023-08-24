<?php
// Fetch content from the database
include 'includes/config.php';
$id = intval($_GET['id']);
$query = "SELECT body FROM blog WHERE category = '$id'"; // Modify the query as needed
$result = $conn->query($query);
$row = $result->fetch_assoc();
$formattedContent = $row['body'];

// Output the formatted content
echo "<div>$formattedContent</div>";
?>
