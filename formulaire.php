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
      <form action="message.php" method="POST">
            <label class="inline-label" for="gender">Civilité : 
                  <select name="gender" id="gender" required>
                        <option value="">-- Genre --</option>
                        <option value="male">Mr.</option>
                        <option value="female">Mme.</option>
                        <option value="other">Autre</option>
                  </select>
            </label>

            <label class="inline-label" for="nationality">Nationalité: 
                  <?php 
                        include("./ressources/nationality.html");
                  ?>
            </label>

            <label class="inline-label" for="lastname">Nom: <input type="text" name="lastname" id="lastname" placeholder="Nom" required></label>
            <label class="inline-label" for="firstname">Prénom: <input type="text" name="firstname" id="firstname" placeholder="Prénom" required></label>
            <label class="inline-label" for="email">Email: <input type="email" name="email" id="email" placeholder="exemple@email.org" required></label>

            <label for="subject">Objet: 
                  <select class="break" name="subject" id="subject" required>
                        <option value="commands">Suivi de commande</option>
                        <option value="technical">Informations techniques</option>
                        <option value="aftersale">Après-vente</option>
                        <option value="other">Autre</option>
                  </select>
            </label>
            
            <label for="message">Message: 
                  <textarea class="break" name="message" id="message" placeholder="Votre message" required></textarea>
            </label>
            
            <div id="buttons">
                  <input class="form-btn" type="reset" name="reset" value="Réinitialiser">
                  <input class="form-btn" id="submit" type="submit" name="submit" value="Envoyer" disabled="true">
            </div>

      </form>

      <script src="./assets/js/script.js"></script>
</body>
</html>