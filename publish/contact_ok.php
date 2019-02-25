<?php
$header_path = dirname(__FILE__)."/header.php";
include_once($header_path);
include_once($include_dir.'/CountryChk.php');
$name     = post('name');
$company  = post('company');
$email    = post('email');
$phone    = '+' . post('phone1') . ' - ' . post('phone2');
$country  = CountryChk(post('country'));
$message  = post('message');
//print_r($_POST);
//include_once($include_dir."/phpmailer/PHPMailer.php");
//include_once($include_dir."/phpmailer/phpmailer.lang-ko.php");
//include_once($include_dir."/phpmailer/class.smtp.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';

require $include_dir.'/phpmailer/Exception.php';
require $include_dir.'/phpmailer/PHPMailer.php';
require $include_dir.'/phpmailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->CharSet = "euc-kr";
	$mail->Encoding = "base64";
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'bkkorea.sending@gmail.com';                 // SMTP username
    $mail->Password = '!snowking1!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('3dwebart@naver.com', 'Mailer'); // 보내는 사람
    $mail->addAddress('3d.web.artist@gmail.com', 'Joe User'); // 받는 사람 Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $htmlMessage = '<table>';
    $htmlMessage .= '<tbody>';
    $htmlMessage .= '<tr>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'NAME';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $name;
    $htmlMessage .= '</td>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'COMPANY';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $company;
    $htmlMessage .= '</td>';
    $htmlMessage .= '</tr>';
    $htmlMessage .= '<tr>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'E-mail';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $email;
    $htmlMessage .= '</td>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'PHONE';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $phone;
    $htmlMessage .= '</td>';
    $htmlMessage .= '</tr>';
    $htmlMessage .= '<tr>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'COUNTRY';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $country;
    $htmlMessage .= '</td>';
    $htmlMessage .= '<th align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= 'MESSAGE';
    $htmlMessage .= '</th>';
    $htmlMessage .= '<td align="left" valihn="top" style="padding: 5px 10px;">';
    $htmlMessage .= $message;
    $htmlMessage .= '</td>';
    $htmlMessage .= '</tr>';
    $htmlMessage .= '</tbody>';
    $htmlMessage .= '</table>';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = iconv("UTF-8", "EUC-KR", $name);
    //$mail->Subject = '제목 테스트';
    $mail->Body    = $htmlMessage;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    redirect(FALSE, 'Your inquiry has been received');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>