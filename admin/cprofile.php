<?php
session_start();
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Database connection settings
        $db_host = 'localhost';
        $db_name = 'heendef';
        $db_user = 'root';
        $db_password = '';

        // Create a PDO instance
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL query
        $sql = "UPDATE admin SET name = :fullname, username= :username,phone = :phone, address = :address WHERE id = :admin_id";

        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':fullname', $_POST['fullname']);
         $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':phone', $_POST['phone']);
        $stmt->bindParam(':address', $_POST['address']);
        // You may need to change 'admin_id' to the actual primary key column name
        $stmt->bindParam(':admin_id', $_SESSION['id']);

        // Execute the statement
        $stmt->execute();
        header("location:profile?success=profile");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;
}
?>

