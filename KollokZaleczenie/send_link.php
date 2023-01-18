<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 

require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\Exception.php'; 
require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\PHPMailer.php'; 
require 'C:\Users\Administrator\OneDrive\Рабочий стол\VS\01-php-docker\LoginLab\KollokZaleczenie\PHPMailer-master\src\SMTP.php'; 


$mail = new PHPMailer; 
 

//$mail->isSMTP();                            
$mail->Host = 'apsl-dev@gmx.com';           
$mail->SMTPAuth = true;                     
$mail->Username = 'apsl-dev@gmx.com';       
$mail->Password = ' apslDEV2023';         
$mail->SMTPSecure = 'ssl';                  
$mail->Port = 587;                          

$mail->setFrom('sender@gmx.com', 'gmx'); 
//$mail->addReplyTo('reply@gmail.com', ''); 
 

$mail->addAddress('daniilliubko@gmx.com'); 
 
 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Email from Localhost'; 
 
// Mail body content 
$bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>'; 
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
$mail->Body    = $bodyContent; 
 
// Send email 
if($mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
    header("Location: http://localhost:3000/KollokZaleczenie/form.php");
}
