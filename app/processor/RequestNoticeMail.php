<?php
    require_once('../../private/initialize.php'); 
    if($_POST){
        $email = strip_tags($_POST['email']) ?? "";
        $firstname = strip_tags($_POST['firstname']) ?? "";
        $lastname = strip_tags($_POST['lastname']) ?? "";
        $phone = strip_tags($_POST['phone']) ?? "";
            $subject = "We have a new request";
            $body = "
            <p>Hi Team,</p>
            <div>
                A project request has just been made. See details below <br/><br/>
                <table>
                  
                    <tr>
                        <td>Customer Name:</td> <td> ".$firstname. " ". $lastname ." </td> 
                    </tr>
                    <tr>
                        <td>Customer Email:</td> <td> ".$email." </td> 
                    </tr>
                    <tr>
                        <td>Phone Number:</td> <td> ".$phone." </td> 
                    </tr>
                </table>
                <p><a href=\"https://rikesd.org/app\">Login</a> to the portal for further action.</p> 
            </div>

            <p>
                <div>Regards,<br></div>
                <h3 style=\"color: #063BB3; font-family: Poppins \">Auto Email Engine.</h3>
                <div>W: www.rikesd.ord <br /> A: 10, Lord Lugard street, Asokoro Abuja, Nigeria  </div>

            </p>

        ";
       
        
        $sendMail = MailScript::pushMail(['mailTo' => 'admin@rikesd.ord', 'recieverName' => 'RikeSD Email Assistant', 'subject' => $subject, 'body' => $body, 'copy' => true]);
        if($sendMail == true) {
            exit(json_encode(['success' => true, 'msg' => "Email sent successful..."]));
            
        }else{
            exit(json_encode(['success' => false, 'msg' =>  $sendMail]));
        }
    }
 ?>