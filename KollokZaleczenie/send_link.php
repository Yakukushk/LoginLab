<?php 
namespace KollokZaleczeniel;
class hash{
public function new_Password() : void {
    $options = [
        'cost' => 8,
    ];
     $New_Password = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
     echo 'Your hash -> ' . $New_Password;
}

}
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 

require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\Exception.php'; 
require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\PHPMailer.php'; 
require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\SMTP.php'; 
session_start();




$mail = new PHPMailer; 
$hash = new hash;
$output = $hash->new_Password();
//$_SESSION($output);

$link="<a href='reset_pass.php'><br>Click To Reset password</br></a>";
echo $link;

//$mail->isSMTP();                            
$mail->Host = 'apsl-dev@gmx.com';           
$mail->SMTPAuth = true;                     
$mail->Username = 'apsl-dev@gmx.com';       
$mail->Password = ' apslDEV2023';         
$mail->SMTPSecure = 'ssl';                  
$mail->Port = 587;                          

$mail->setFrom('sender@gmx.com', 'gmx'); 
//$mail->addReplyTo('reply@gmail.com', ''); 
$key = isset($_POST['key']) ? $_POST['key'] : '';
$reset = isset($_POST['reset']) ? $_POST['reset'] : '';

$mail->addAddress('daniilliubko@gmx.com'); 
 
 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Email from Localhost'; 
 
// Mail body content 
//$mail->Body    = $bodyContent; 
 
// Send email 
if($mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo '<br>Message has been sent.</br>'; 
   // header("Location: http://localhost:3000/KollokZaleczenie/reset_pass.php");
}
