<?php 
    if($_POST) {
        $email = $_POST['email'] ?? "sakinropo@gmail.com";
        $firstname = $_POST['firstname'] ?? "John";
        $lastname = $_POST['lastname'] ?? "Doe";
        $phone = $_POST['phone'] ?? "";

        
        function mailer($email, $firstname, $lastname, $phone, $body){
            require 'admin/private/shared/mailer/class/class.phpmailer.php';
            $mail = new PHPMailer(true); 
            
            try {
                $mail->SMTPDebug = 0;                                       
                $mail->isSMTP();                                            
                $mail->Host       = 'localhost';                    
                $mail->SMTPAuth   = true;                             
                $mail->Username   = 'u474mp54g1x5';                 
                $mail->Password   = 'G3t2n0t3';                        
                // $mail->SMTPSecure = 'tls';                              
                $mail->Port       = 25;  
              
                $mail->setFrom('ask@getRikeSD.com', 'RikeSD Technologies limited');           
                $mail->addAddress($email, $firstname." ".$lastname);
                // $mail->addCC('shafi@getRikeSD.com', 'Shafi GetRikeSD');
                $mail->addBCC("sakinropo@gmail.com");
                   
                $mail->isHTML(true);                                  
                $mail->Subject = 'Request a notary session';
                $mail->Body    = $body;
                $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                $mail->send();
                exit(json_encode(['success' => true, 'msg' => "Email sent successfully..."]));
                
            } catch (Exception $e) {
                exit(json_encode(['success' => false, 'msg' =>  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]));
            }
        }
        $body = '
            <p>Dear'. $firstname .'</p>

            <p>Thank you for completing our Request Form.</p>
        
            <p>Please <a href="https://docs.google.com/forms/d/e/1FAIpQLSeVqM0cMldS_rJYOHqDHoHBwXK64g_HxQtyIe9tprWpNCL3RQ/viewform">click here</a> to fill our enquiry form.</p>
            
            <p>This is a test email.</p>
        
            <p>Nnena from RikeSD</p>
        ';
        
        $sendMail = mailer($email, $firstname, $lastname, $phone, $body);
        if($sendMail == true){
            $body = '
                <p>Dear Team,</p>
    
                <p>You have a new request. See details below</p>
            
                <p>
                    <div>Customer Name: '. $firstname." ".$lastname .'</div>
                    <div>Email: '.$email.'</div>
                    <div>Phone Number: '.$phone.'</div>
                </p>
            ';
            $email = 'sandsify@gmail.com';
            $firstname = '';
            $lastname = '';
            mailer($email, $firstname, $lastname, $phone, $body);
        }
        

        
    }
 ?>