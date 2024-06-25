<?php
// 邮件配置
$to = 'cloud@origz.com'; // 收件人邮箱
$subject = '来自源初云的联系表单提交'; // 邮件主题

// 从POST请求中获取表单数据
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// 构建邮件内容
$body = "发件人姓名: $name\n";
$body .= "发件人邮箱: $email\n";
$body .= "发件人电话: $phone\n";
$body .= "消息内容: \n$message";

// 发送邮件
$headers = "From: $email";
if (mail($to, $subject, $body, $headers)) {
    echo '邮件发送成功';
} else {
    echo '邮件发送失败，请稍后再试';
}
?>




  <!-- 开始使用PHPMailer发送邮件
 
  <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.example.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'your-email@example.com';               // SMTP username
    $mail->Password   = 'your-password';                        // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('your-email@example.com', 'Mailer');
    $mail->addAddress('cloud@origz.com');                       // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
  
  
  结束-->