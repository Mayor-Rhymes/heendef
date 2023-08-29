<?php

   include 'admin/includes/config.php';

   if($_SERVER['REQUEST_METHOD'] == 'POST') {

       if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_POST['whyVolunteer'])){

           $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
           $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
           $phoneNumber = filter_var($_POST['phoneNumber'], FILTER_SANITIZE_STRING);
           $whyVolunteer = filter_var($_POST['whyVolunteer'], FILTER_SANITIZE_STRING);


           $result = $conn->query("INSERT INTO volunteers (name, email, phone, reason) VALUES ('$name', '$email', '$phoneNumber', '$whyVolunteer')");
           
           if($result === true) {

               header("Location: events.php");
           } else {

             echo "failure";
           }
       }
   }

   $conn->close();

?>