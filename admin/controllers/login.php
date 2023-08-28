<?php

session_start();
// include "../includes/config.php";
// require_once '../admin/includes/config.php';
include(dirname(__DIR__).'/includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $name = mysqli_real_escape_string($conn, $_POST['uname1']);
  $nameclean = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $pass = mysqli_real_escape_string($conn, $_POST['pass1']);
  $passclean = filter_var($pass, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  $result = $conn->query("SELECT * FROM admin WHERE username='$nameclean' ");
  $total = $result->num_rows;
  if ($total < 1) {
    // echo "$nameclean <br />";
    // echo "$passclean <br />";
    // echo "$total";
    echo "
<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Error!</strong> User does not exist
</div>
";
  } else {
    while ($row = $result->fetch_assoc()) {
      //echo 'Yes we have a match and the email is '.$row['email'];
      if (password_verify($passclean, $row['password'])) {

        $_SESSION['id'] = $row['id'];
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Good!</strong> Lets get you logged in..
</div>";
        echo "<script>window.location.href='index'</script>";
      } else {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Invalid!</strong> Username or Password
</div>";
      }
    }
  }
  $conn->close();
}
?>