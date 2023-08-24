<?php
// Start or resume a session to track user authentication status.
session_start();

// Include your database connection file.
include('includes/pdoconnect.php'); // Replace with the actual path to your database connection file.

// Check if the user is logged in. You can use your own authentication logic here.
if (!isset($_SESSION['id'])) {
    header('Location: login'); // Redirect to the login page if the user is not authenticated.
    exit();
}
//$id=intval($_SESSION['id']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's input from the form.
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate user input (you can add more validation rules).
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        $error = "All fields are required.";
    } elseif ($newPassword !== $confirmPassword) {
        $error = "New password and confirm password do not match.";
        header("location:profile?error=incorrect");
    } else {
        // Check if the current password matches the one stored in the database.
        $userId = $_SESSION['id']; // Assuming you have stored user ID in the session.
        $query = "SELECT password FROM admin WHERE id = :user_id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
$options = [
        'cost' => 11
    ];
        if ($userData && password_verify($currentPassword, $userData['password'])) {
            // Hash the new password before storing it in the database.
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT,$options);

            // Update the user's password in the database.
            $updateQuery = "UPDATE admin SET password = :new_password WHERE id = :user_id";
            $updateStmt = $pdo->prepare($updateQuery);
            $updateStmt->bindParam(':new_password', $hashedPassword);
            $updateStmt->bindParam(':user_id', $userId);
            $updateStmt->execute();

            header("location:profile?success=password");
        } else {
          header("location:profile?error=incorrect");
        }
    }
}
?>


