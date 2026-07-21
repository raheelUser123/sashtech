<?php
declare(strict_types=1);require_once __DIR__.'/includes/config.php';require_once __DIR__.'/includes/functions.php';
header('Content-Type: application/json; charset=utf-8');
function respond(bool $ok,string $message,int $code=200): never { http_response_code($code); echo json_encode(['success'=>$ok,'message'=>$message]); exit; }
if ($_SERVER['REQUEST_METHOD']!=='POST') respond(false,'Invalid request.',405);
if (!hash_equals($_SESSION['csrf_token']??'',(string)($_POST['csrf_token']??''))) respond(false,'Your session expired. Refresh and try again.',419);
if (!empty($_POST['website'])) respond(true,'Thank you.');
$last=(int)($_SESSION['last_submit']??0);if(time()-$last<20) respond(false,'Please wait a moment before submitting again.',429);
$name=trim((string)($_POST['name']??''));$email=filter_var(trim((string)($_POST['email']??'')),FILTER_VALIDATE_EMAIL);$message=trim((string)($_POST['message']??''));$service=trim((string)($_POST['service']??''));
if(!$name||!$email||!$message||!$service||empty($_POST['consent'])) respond(false,'Please complete all required fields.',422);
if(strlen($message)>3000) respond(false,'Message is too long.',422);
$fields=['Phone'=>$_POST['phone']??'','Company'=>$_POST['company']??'','Service'=>$service,'Budget'=>$_POST['budget']??'','Source'=>$_POST['source']??''];
$body='<h2>New Sash Tech Project Enquiry</h2><p><strong>Name:</strong> '.e($name).'</p><p><strong>Email:</strong> '.e((string)$email).'</p>';foreach($fields as $k=>$v){$body.='<p><strong>'.e($k).':</strong> '.e(trim((string)$v)).'</p>';}$body.='<p><strong>Details:</strong><br>'.nl2br(e($message)).'</p>';
try{
 $autoload=__DIR__.'/vendor/autoload.php'; if(!file_exists($autoload)) throw new RuntimeException('PHPMailer is not installed. Run composer install.'); require $autoload;
 $mail=new PHPMailer\PHPMailer\PHPMailer(true);$mail->isSMTP();$mail->Host=SMTP_HOST;$mail->SMTPAuth=true;$mail->Username=SMTP_USERNAME;$mail->Password=SMTP_PASSWORD;$mail->SMTPSecure=SMTP_ENCRYPTION;$mail->Port=SMTP_PORT;$mail->CharSet='UTF-8';$mail->setFrom(MAIL_FROM_EMAIL,MAIL_FROM_NAME);$mail->addAddress(MAIL_TO_EMAIL,MAIL_TO_NAME);$mail->addReplyTo((string)$email,$name);$mail->isHTML(true);$mail->Subject='New project enquiry from '.$name;$mail->Body=$body;$mail->AltBody=strip_tags($body);$mail->send();
 $confirm=new PHPMailer\PHPMailer\PHPMailer(true);$confirm->isSMTP();$confirm->Host=SMTP_HOST;$confirm->SMTPAuth=true;$confirm->Username=SMTP_USERNAME;$confirm->Password=SMTP_PASSWORD;$confirm->SMTPSecure=SMTP_ENCRYPTION;$confirm->Port=SMTP_PORT;$confirm->CharSet='UTF-8';$confirm->setFrom(MAIL_FROM_EMAIL,MAIL_FROM_NAME);$confirm->addAddress((string)$email,$name);$confirm->isHTML(true);$confirm->Subject='We received your project enquiry';$confirm->Body='<h2>Thanks, '.e($name).'.</h2><p>We received your enquiry and will reply as soon as possible.</p><p>— Sash Tech</p>';$confirm->send();
 $_SESSION['last_submit']=time();respond(true,'Thanks! Your project details have been sent.');
}catch(Throwable $e){error_log('Contact form error: '.$e->getMessage());respond(false,'Email could not be sent. Check SMTP settings or try again later.',500);}
