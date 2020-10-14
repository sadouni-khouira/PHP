<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Inscrire un titre ici</title>
    <!-- On peut avoir d'autres méta-données ici -->
  </head>
  <body>
  <h1>Le formulaire HTML</h1>
    <!-- Ici, on placera tout le contenu à destination 
    de l'utilisateur -->

   <!--- <?php
    include 'exe4.php'; ?>--->
    <form action="action.php" method="post">
 <p>Votre Nom : <input type="text" name="nom" /></p>
 <p>Votre Téléphone  : <input type="tel" name="Téléphone" /></p>
 <p>Votre Email : <input type="email" name="email" /></p>
 <p>Votre Adresse : <input type="email" name="adresse" /></p>
 <p>Code postal : <input type="number" name="number" /></p>
 <p><input type="submit" value="OK"></p>
</form>
  </body>
</html>



