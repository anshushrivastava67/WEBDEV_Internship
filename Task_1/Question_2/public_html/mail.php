<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';



    $name=$_POST['name'];
    $email=$_POST['email'];
    $message1 = $_POST["message"];
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "anshushri0207@gmail.com";
    $mail->Password   = "sgxlckerhcekoijb";
    $mail->IsHTML(true);
    $mail->AddAddress("anshushri0711@gmail.com", "Anshu Shrivastava");
    
    $mail->Subject = "Enquiry from Portfolio";
   $message = "<h1>$name</h1>
              <h3>$email</h3>
            <p>$message1</p>";

              
    $mail->MsgHTML($message); 
    if(!$mail->Send()) {
      echo 'error';
      
    } else {
        echo 'Sucess!!';
        // header("location: index.html");
    }

?>