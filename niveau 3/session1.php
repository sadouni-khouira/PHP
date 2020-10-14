<?php
session_start();
if (isset($_POST['nom']) and !empty($_POST['nom'])) {
                                                            $_SESSION['nom']=$_POST['nom'];
                                                          }
if (isset($_POST['prenom']) and !empty($_POST['prenom'])) {
                                                            $_SESSION['prenom']=$_POST['prenom'];
                                                          }

if (isset($_POST['ville']) and !empty($_POST['ville'])) {
                                                            $_SESSION['ville']=$_POST['ville'];
                                                          }

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>le formulaire</title>
   
  </head>

  <body>


  <form action="session1.php" method="post">

  Nom :   <input type="text" name="nom" placeholder="Tapez votre nom"    required /><br><br>
  Prénom :<input type="text" name="prenom" placeholder="Tapez votre prénom"    required /><br><br>
  Ville :<input type="text" name="ville" placeholder="Tapez Votre ville de naissance"    required /><br><br>
         <input type="submit" value="Envoyer"> 
</form> 
<a href="session2.php" target="_blank">page 2</a>
</body>
</html>