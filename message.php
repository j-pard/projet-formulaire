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
                  $copy = $_POST["copy"]
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
                  echo $successMsg;
            }
            else {
                  echo $errorMsg;
            }
      }

      ?>

      <form action="formulaire.php">
            <button class="form-btn">Retour</button>
      </form>
</body>
</html>