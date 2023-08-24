<?php
include 'includes/config.php';
if (isset($_POST['about'])) {

$statement = mysqli_prepare($conn, "INSERT INTO about (description) VALUES (?)");
$variable1 = $_POST['description'];

// Bind the variables to the prepared statement as parameters
mysqli_stmt_bind_param($statement, "s", $variable1);

// Execute the prepared statement
if (mysqli_stmt_execute($statement)) {
    echo " ";
} else {
    echo "Error inserting data: " . mysqli_stmt_error($statement);
}

// Close the statement and the connection
mysqli_stmt_close($statement);
mysqli_close($conn);
}
if (isset($_POST['founder'])) {

$state = mysqli_prepare($conn, "INSERT INTO founder (description) VALUES (?)");
$variable2 = $_POST['description_founder'];

// Bind the variables to the prepared statement as parameters
mysqli_stmt_bind_param($state, "s", $variable2);

// Execute the prepared statement
if (mysqli_stmt_execute($state)) {
    echo " ";
} else {
    echo "Error inserting data: " . mysqli_stmt_error($state);
}

// Close the statement and the connection
mysqli_stmt_close($state);
mysqli_close($conn);
}

?>
