<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../../../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/style.css">
      <title>Message</title>
</head>
<body>
      <?php
      function sanitize($input) {
            $input = trim($input);
            $input = filter_var($input, FILTER_SANITIZE_STRING);
            return $input;
      }

      $successMsg = "<p class='success'>Votre demande à été envoyée et sera traîtée dans les plus brefs délais, merci.</p>";
      $errorMsg = "</p class='error'>Impossible d'envoyer votre demande, veuillez remplir tous les champs.</p>";

      if(isset($_POST["submit"])) {
            $sending = [
                  $gender = $_POST["gender"],
                  $nationality = $_POST["nationality"],
                  $firstname = $_POST["firstname"],
                  $lastname = $_POST["lastname"],
                  $email = $_POST["email"],
                  $subject = $_POST["subject"],
                  $message = $_POST["message"],
            ];
      
            for ($i=0; $i < count($sending); $i++) { 
                  if($sending[$i] == $email) {
                        $sending[$i] = filter_var($sending[$i], FILTER_SANITIZE_EMAIL);
                  }
                  else {
                        $sending[$i] = sanitize($sending[$i]);
                  }
                  echo $sending[$i] . "<br>";
            }

            if($gender != "" && $nationality != "" && $firstname != "" && $lastname != "" && $email != "" && $subject != "" && $message != "") {

                  //Create a new PHPMailer instance
                  $mail = new PHPMailer;

                  //Tell PHPMailer to use SMTP
                  $mail->isSMTP();

                  //Enable SMTP debugging
                  // SMTP::DEBUG_OFF = off (for production use)
                  // SMTP::DEBUG_CLIENT = client messages
                  // SMTP::DEBUG_SERVER = client and server messages
                  $mail->SMTPDebug = SMTP::DEBUG_SERVER;

                  //Set the hostname of the mail server
                  $mail->Host = 'smtp.gmail.com';
                  // use
                  // $mail->Host = gethostbyname('smtp.gmail.com');
                  // if your network does not support SMTP over IPv6

                  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                  $mail->Port = 587;

                  //Set the encryption mechanism to use - STARTTLS or SMTPS
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

                  //Whether to use SMTP authentication
                  $mail->SMTPAuth = true;

                  //Username to use for SMTP authentication - use full email address for gmail
                  $mail->Username = 'pardons.jonathan@gmail.com';

                  //Password to use for SMTP authentication
                  $mail->Password = 'PASSWORD';

                  //Set who the message is to be sent from
                  $mail->setFrom($email, $lastname . " " . $firstname);

                  //Set who the message is to be sent to
                  $mail->addAddress('pardons.jonathan@gmail.com', 'Local Tester');

                  //Set the subject line
                  $mail->Subject = $subject;

                  //Read an HTML message body from an external file, convert referenced images to embedded,
                  //convert HTML into a basic plain-text alternative body
                  $mail->msgHTML($message . "<br> <br>" . "Message envoyé par: " . $email . "<br>");


                  if (!$mail->send()) {
                        echo 'Mailer Error: '. $mail->ErrorInfo;
                    } else {
                        echo $successMsg;
                    }
            }
            else {
                  echo $errorMsg;
            }
      }

      ?>

      <form action="index.php">
            <button class="form-btn">Retour</button>
      </form>
</body>
</html>