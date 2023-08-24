<?php
require '../includes/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['psw'];
     $token = $_POST['token'];
     $code = rand(1000,9999);
    $name = mysqli_real_escape_string($conn,$name);
     $email = mysqli_real_escape_string($conn,$email);
      $username = mysqli_real_escape_string($conn,$username);
    // Validate and sanitize input fields here
    $options = [
        'cost' => 11
    ];
    $hashedPassword = password_hash($password,PASSWORD_BCRYPT,$options);
    $stmt = $conn->prepare("INSERT INTO admin (name, email, username, password,token,code) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $username, $hashedPassword,$token,$code);

    if ($stmt->execute()) {
      echo "<script>window.location.href='verify'</script>";
    } else {
        exit("Error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
} 
?>
