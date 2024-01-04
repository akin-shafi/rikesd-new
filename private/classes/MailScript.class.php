<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailScript extends DatabaseObject
{
    public static function pushMail($options = [])
    {
        $subject = $options['subject'] ?? false;
        $copy = $options['copy'] ?? false;
        $body = $options['body'] ?? false;
        $mailTo = $options['mailTo'] ?? '';
        $recieverName = $options['recieverName'] ?? false;

        $recipients = [
            'shafi@rikesd.org' => 'Shafi',
            'mpopoola@rikesd.org' => 'Dr. Mustapha Ayo P',
            'oolabisi@rikesd.org' => 'Barr. Olabisi Olagbemiro',
        ];

        $group_email = $options['group_email'] ?? $recipients;

        require_once(SHARED_PATH . '/PHPMailer/src/Exception.php');
        require_once(SHARED_PATH . '/PHPMailer/src/PHPMailer.php');
        require_once(SHARED_PATH . '/PHPMailer/src/SMTP.php');

        $mail = new PHPMailer(true);

        // // localhost method
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = "rikesd22@gmail.com"; // SMTP account username example
        $mail->Password = "wjvxqmmqzkpdfxsh"; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 465;

        $mail->From = "rikesd22@gmail.com";
        $mail->FromName = "RIKESD";

        $mail->AddAddress($mailTo, $recieverName);
        $mail->AddReplyTo('rikesd22@gmail.com', 'Research for Impact, Knowledge Based Economy and Sustainable Development');
        if ($copy == true) {
            foreach ($group_email as $email => $name) {
                $mail->AddCC($email, $name);
            }
        }
        $mail->IsHTML(true);

        $mail->Subject = $subject;

        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if (!$mail->Send()) {
            return $mail->ErrorInfo;
        } else {
            return true;
        }
    }
}