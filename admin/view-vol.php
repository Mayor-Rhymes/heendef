<?php 
session_start();
include('includes/config.php');
$vid = intval($_GET['vid']);
//if (!isset($_SERVER['HTTP_REFERER'])) {
//  unset($_SESSION['dlogin']);
//  unset($_SESSION['username']);
    //$msg = "Your Session Has Expired";
    //$_SESSION['error'] = $msg;
    //header('location:logout.php?session=logout');
    //exit;
//}
  //  $ref = htmlspecialchars(stripcslashes($_GET['id']));
$vol = mysqli_query($conn,"SELECT * FROM volunteers WHERE id='$vid'");
while ($row=mysqli_fetch_assoc($vol)) {
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title> <?php echo htmlentities($row['name']); ?> | Volunteer for Heendef</title>
 </head>
 <body>
 <link rel="stylesheet" type="text/css" href="css/view/style.css">
    <!--[if mso]>
    <style type="text/css">
      .f-fallback  {
        font-family: Arial, sans-serif;
      }
    </style>
  <![endif]-->
  </head>
  <body>
   
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td class="email-masthead">
                <a href="#" class="f-fallback email-masthead_name">
                HEENDEF
              </a>
              </td>
            </tr>
            <!-- Email Body -->
            <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell">
                      <div class="f-fallback">
    
                        <h1><?php echo htmlentities($row['name']); ?></h1>
                         <h2>Phone :<a href='tel:<?php  echo " ".htmlentities($row['phone']); ?>' style='color:#15e38a;'><?php  echo " ".htmlentities($row['phone']); ?></a></h2>
                     <h2>Email :<a href='mailto:<?php  echo " ".htmlentities($row['email']); ?>' style='color:#15e38a;'><?php  echo " ".htmlentities($row['email']); ?></a></h2>
                
                       <br>
                       
                        <!-- Discount -->
                        <table class="discount" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td align="center">
                              <h1 class="f-fallback discount_heading">Message</h1>
                             
                              <!-- Border based button
           https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                <tr>
                                  <td align="center">
                                    <span  class="f-fallback button button--green"><?php echo htmlentities($row['reason']); ?></span>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                        <table class="purchase" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td>
                         
                                   <center>
                      <h3>Date Created: <wbr> <b style='color:red;'><?php  echo " ".htmlentities($row['createdAt']); ?></b></h3>
                  </center>
                          
                            <td>
                             </td>
                          </tr>
                          <tr>
                
                        </table>
                       
                        <!-- Action -->
                        <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td align="center">
                              <button class="f-fallback button button--green" onclick="window.location.href='volunteers'">Home</button>
                              <!-- Border based button
           https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
           
                            </td>
                          </tr>
                        </table>
                        <!-- Sub copy -->
                      
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td class="content-cell" align="center">
                      <p class="f-fallback sub align-center">&copy; 2023 Heendef.org | All rights reserved.</p>
                      <p class="f-fallback sub align-center">
                        Heendef 
                        
                        <br>Nigeria.
                      </p>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>

        </td>
      </tr>
    </table>
 </body>
 </html>
 <?php } ?>