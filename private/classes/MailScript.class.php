<?php
class MailScript extends DatabaseObject
{

    public static function pushMail($options=[]){ 
            $subject = $options['subject'] ?? false;
            $copy = $options['copy'] ?? false;
            $body = $options['body'] ?? false;
            $mailTo = $options['mailTo'] ?? '';
            $recieverName = $options['recieverName'] ?? false;

            $recipients = [
                  'shafi@rikesd.org' => 'Shafi',
                  'mpopoola@rikesd.org' => 'Dr. Mustapha Ayo P',
                  'honmusty@gmail.com' => 'Dr. Mustapha Ayo P',
                  'oolabisi@rikesd.org' => 'Dr. Mustapha Ayo P',
            ];

            $group_email = $options['group_email'] ?? $recipients;

            // print_r($group_email);

            require_once(SHARED_PATH . '/mailer/class/class.phpmailer.php');
  
            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            
            // // localhost method
            $mail->Host       = "smtp.hostinger.com"; // SMTP server example
            $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
            $mail->Username   = "admin@rikesd.org"; // SMTP account username example
            $mail->Password   = "Admin@rik3sd";        // SMTP account password example


            //smtp method
            // $mail->Host       = "smtp.gmail.com";
            // $mail->Username   = "sakinropo@gmail.com";
            // $mail->Password   = "D3p0rtiv0@#";
            // $mail->SMTPDebug  = 1;  
            // $mail->SMTPAuth   = TRUE;
            // $mail->SMTPSecure = "ssl";
            // $mail->Port       = 465; // Port for SSL: 465 Port for TLS/STARTTLS: 587
            

            $mail->From = "admin@rikesd.org";
            $mail->FromName = "RIKESD";

            $mail->AddAddress($mailTo, $recieverName);
            $mail->AddReplyTo('rikesd22@gmail.com', 'Research for Impact, Knowledge Based Economy and Sustainable Development');
            if($copy == true){
                // $recipients = array(
                //   'shafi@getRikeSD.com' => 'Shafi',
                //   'daniel@getRikeSD.com' => 'Daniel',
                //   'olaide@getRikeSD.com' => 'Olaide',
                //   'florence@getRikeSD.com' => 'Florence',
                //   'nnena@thespace.com.ng' => 'Nnena',
                //   'anu@thespace.com.ng' => 'Anuoluwapo',
                //   'fikayo@getRikeSD.com' => 'Fikayo Durosinmi-etti',
                // );
                foreach($group_email as $email => $name)
                {
                   $mail->AddCC($email, $name);
                }
            }
            $mail->IsHTML(true);

            $mail->Subject = $subject;

            $mail->Body    =  $body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            // pre_r($mail);
            if(!$mail->Send()) {
                return $mail->ErrorInfo;
            }else{
                return true;
            }
    }
}