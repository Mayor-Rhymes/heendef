<?php 
   
   if($_SERVER['REQUEST_METHOD'] == 'POST') {
       
       if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['age']) && isset($_POST['problem'])) {


              $firstname = $_POST['firstname'];
              $lastname = $_POST['lastname'];
              $email = $_POST['email'];
              $phonenumber = $_POST['phonenumber'];
              $age = $_POST['age'];
              $problem = $_POST['problem'];
              $subject = "Consultation";

              $toemail = "olaks.raheem@gmail.com";

              mail(
                  $toemail,
                  $subject,
                  $problem,
              );
       }

   }




?>