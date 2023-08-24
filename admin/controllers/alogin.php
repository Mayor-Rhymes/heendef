<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include ("../includes/config.php");
$id = intval($_SESSION['id']);
$sql = mysqli_query($conn,"SELECT * FROM admin WHERE id='$id'");
while ($row=mysqli_fetch_assoc($id)) {
if ($row['active']!=1) {?>
	<?php 
	if ($_SERVER['REQUEST_METHOD']==="POST") {
	$sql =mysqli_query($conn,"SELECT * FROM admin WHERE token='$token'");
	while($row=mysqli_fetch_array($sql)){
		$email = $row['email'];
		$name = $row['name'];
		$code = $row['code'];
	}
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                     //Enable verbose debug output
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'lagloballimited.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@lagloballimited.com';                     //SMTP username
    $mail->Password   = 'adekolaglobal01';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;   

    //Recipients
    $mail->setFrom('info@lagloballimited.com','Admin');
    $mail->addAddress($email,$name);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Account Verification';
    $mail->Body    = "$code";
    $mail->AltBody = "$code";

    $mail->send();
    unset($_SESSION['csrf_token']);
    header("location:code");
} catch (Exception $e) {
	echo "";
}
}
 ?>

<?php }else{
	header("location:index");
}	
}

 ?>


