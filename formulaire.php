<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./assets/css/style.css">
      <title>formulaire</title>
</head>
<body>
     <h3>Formulaire</h3>
      <form action="" method="POST">
            <select name="gender" id="gender" required>
                  <option value="">-- Gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
            </select>

            <?php 
            include("./ressources/nationality.html");
            ?>

            <input type="text" name="lastname" id="lastname" placeholder="Nom" required>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
            <input type="email" name="email" id="email" placeholder="exemple@email.org" required>

            <select name="subject" id="subject" required>
                  <option value="commands">Suivi de commande</option>
                  <option value="technical">Informations techniques</option>
                  <option value="aftersale">Après-vente</option>
                  <option value="other">Autre</option>
            </select>
            
            <textarea name="message" id="message" placeholder="Votre message" cols="70" rows="10" required></textarea>
            <input type="checkbox" name="copy" id="copy" checked>
            <label for="copy">Envoyer une copie par mail</label>

            <input class="form-btn" type="reset" name="reset" value="Réinitialiser">
            <input class="form-btn" type="submit" name="submit" value="Envoyer">

            </form>

            <?php
                  function sanitize($input) {
                        $input = trim($input);
                        $input = filter_var($input, FILTER_SANITIZE_STRING);
                        return $input;
                  }

                  if(isset($_POST["submit"])) {

                        $sending = [
                              $gender = sanitize($_POST["gender"]),
                              $nationality = sanitize($_POST["nationality"]),
                              $firstname = sanitize($_POST["firstname"]),
                              $lastname = sanitize($_POST["lastname"]),
                              $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL),
                              $subject = sanitize($_POST["subject"]),
                              $message = sanitize($_POST["message"]),
                              $copy = $_POST["copy"]
                        ];

                        if($gender != "" && $nationality != "" && $firstname != "" && $lastname != "" && email != "" && $subject != "" && $message != "") {
                              print_r($sending);
                              echo "<p class='success'>Votre demande à été envoyée et sera traîtée dans les plus brefs délais, merci.</p>";
                        }
                        else {
                              echo "</p class='error'>Impossible d'envoyer votre demande, veuillez remplir tous les champs.</p>";
                        }
                  }
            ?>
</body>
</html>